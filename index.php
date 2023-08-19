<?php include('./navbar.php') ?>

<div class="page-container">
    <h1 class="section-title">estimez votre maison gratuitement</h1>
    <div class="line"></div>
    <div class="calculating-form-container">
        <form class="calculating-form" id="timeForm" action="./showData.php" method="get">
            <div class="input-box">
                <label for="rooms">Number of Rooms :</label>
                <div>
                    <input type="range" class="rangeInput" id="rooms" name="rooms" min="0" max="10" step="1" value="0">
                    <span id="roomsValue">0</span>
                </div>
            </div>
            <div class="input-box">
                <label for="toilets">Number of Toilets :</label>
                <div>
                    <input type="range" class="rangeInput" id="toilets" name="toilets" min="0" max="10" step="1" value="0">
                    <span id="toiletsValue">0</span>
                </div>
            </div>
            <div class="input-box">
                <label for="livingRooms">Number of Living Rooms :</label>
                <div>
                    <input type="range" class="rangeInput" id="livingRooms" name="livingRooms" min="0" max="10" step="1" value="0">
                    <span id="livingRoomsValue">0</span>
                </div>
            </div>
            <div class="input-box">
                <label for="windows">Number of Windows :</label>
                <div>
                    <input type="range" class="rangeInput" id="windows" name="windows" min="0" max="10" step="1" value="0">
                    <span id="windowsValue">0</span>
                </div>
            </div>
            <div class="input-box">
                <label for="toilettesInRoom">Toilettes inclus dans les chambres :</label>
                <div>
                    <input type="range" class="rangeInput" id="toilettesInRoom" name="toilettesInRoom" min="0" max="10" step="1" value="0">
                    <span id="toilettesInRoomValue">0</span>
                </div>
            </div>
            <div class="input-box">
                <label for="kitchenType">Type de la cuisine :</label>
                <select id="kitchenType" name="kitchenType">
                    <option value="nothing">Select</option>
                    <option value="standard">Standard</option>
                    <option value="large">Large</option>
                </select>
            </div>
            <div class="input-box">
                <label for="serviceType">Type de service:</label>
                <select id="serviceType" name="serviceType">
                    <option value="nettoyageSimple">Nettoyage Simple</option>
                    <option value="grandeMenage">Grande Menage</option>
                    <option value="nettoyageDesVitres">Nettoyage Des Vitres</option>
                    <option value="nettoyageAmenagement">Nettoyage Amenagement</option>
                    <option value="finChantier">Fin Chantier</option>
                </select>
            </div>
            <div class="input-box">
                <label for="abonnements">Les abonnements :</label>
                <select id="abonnements" name="abonnements">
                    <option value="nothing">Select</option>
                    <option value="fois">Pour une seule fois</option>
                    <option value="semaine">Abonnement par semaine</option>
                    <option value="quinzaine">Abonnement par quinzaine</option>
                    <option value="mois">Abonnement par moi</option>
                </select>
                <p class="note">Note : pour les abonnements il faut demander le service au moins de fois par semaine.</p>
            </div>
            <div class="input-box">
                <label for="pets">Do you have pets :</label>
                <input type="checkbox" id="pets" name="pets" class="checkBoxTnput" value="50">
            </div>
        </form>
    </div>

    <div class="resultat">
        <div class="resultat-box">
            <h1>Time</h1>
            <p id="totalTime"></p>
        </div>
        <!-- <div class="back-slach"></div> -->
        <div class="resultat-box">
            <h1>Price</h1>
            <p id="totalPrice"></p>
        </div>
    </div>
</div>

<script>

    const costs = {
        rooms: 0,
        toilets: 0,
        livingRooms: 0,
        windows: 0,
        toilettesInRoom: 0,
        kitchen: {
            nothing: 0,
            standard: 0,
            large: 0,
        },
        pets: {
            true: 0,
            false: 0
        }
    };

    const services = {
        nettoyageSimple: 40,
        grandeMenage: 55,
        nettoyageDesVitres: 35,
        nettoyageAmenagement: 40,
        finChantier: 40,
    }

    const abonnements = {
        nothing: 0,
        fois: 0,
        semaine: 0.05,
        quinzaine: 0.1,
        mois: 0.15,
    }



    function calculateTotalTime() {
        let totalMinutes = 0;
        let servicePrice = 0;
        let discountPrice = 0;

        const serviceType = document.getElementById("serviceType").value;
        if (serviceType === 'nettoyageAmenagement' || serviceType == 'nettoyageSimple' || serviceType === 'finChantier') {
            costs.rooms = 20;
            costs.toilets = 10;
            costs.livingRooms = 30;
            costs.windows = 7;
            costs.toilettesInRoom = 10;
            costs.kitchen.standard = 40;
            costs.kitchen.large = 40;
            costs.pets.true = 10;
        } else if (serviceType === 'grandeMenage') {
            costs.rooms = 30;
            costs.toilets = 15;
            costs.livingRooms = 45;
            costs.windows = 10;
            costs.toilettesInRoom = 15;
            costs.kitchen.standard = 55;
            costs.kitchen.large = 75;
            costs.pets.true = 10;
        } else if (serviceType === 'nettoyageDesVitres') {
            costs.rooms = 0;
            costs.toilets = 0;
            costs.livingRooms = 0;
            costs.windows = 10;
            costs.toilettesInRoom = 0;
            costs.kitchen.standard = 0;
            costs.kitchen.large = 0;
            costs.pets.true = 0;
        }
        servicePrice = services[serviceType];

        for (const key in costs) {
            if (key === 'kitchen') {
                const kitchenType = document.getElementById("kitchenType").value;
                totalMinutes += costs.kitchen[kitchenType];
            } else if (key === 'abonnements') {
                const offerType = document.getElementById("abonnements").value;
                totalMinutes += costs.kitchen[offerType];
            } else if (key === 'pets') {
                const petsCheckbox = document.getElementById('pets');
                const petsValue = petsCheckbox.checked ? 'true' : 'false';
                petsCheckbox.value = petsValue;
                totalMinutes += costs.pets[petsValue];
            } else {
                const value = parseInt(document.getElementById(key).value);
                totalMinutes += value * costs[key];
                document.getElementById(`${key}Value`).innerHTML = value;
                const progress = (value / document.getElementById(key).max) * 100;
                document.getElementById(key).style.background = `linear-gradient(to right, #56cc84 ${progress}%, #eeeef4 ${progress}%)`;
            }
        }

        const hours = Math.floor(totalMinutes / 60);
        const minutes = totalMinutes % 60;
        // console.log('minutes :' + totalMinutes)

        const totalMinutesPrice = (totalMinutes / 60) * servicePrice;
        let totalPrice = totalMinutesPrice;
        const formattedTime = `${hours.toString().padStart(2, '0')}H ${minutes.toString().padStart(2, '0')}M`;
        document.getElementById('totalTime').textContent = `${formattedTime}`;



        const abonement = document.getElementById("abonnements").value;
        let discountAmount = totalPrice * abonnements[abonement];
        console.log(discountAmount)
        totalPrice = totalPrice - discountAmount;

        document.getElementById('totalPrice').textContent = `${totalPrice.toFixed(2)} DH`;
    }

    const inputIds = ['rooms', 'toilets', 'livingRooms', 'windows', 'kitchenType', 'serviceType', 'toilettesInRoom', 'abonnements', 'pets'];

    inputIds.forEach(id => {
        const input = document.getElementById(id);
        input.addEventListener('input', function() {
            calculateTotalTime();
        });
    });

    calculateTotalTime();
</script>

<?php include('./footer.php') ?>
