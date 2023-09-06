<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reservation.css">
    <link rel="stylesheet"  href="css/footer.css">
    <link rel="stylesheet"  href="css/contac.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1763c99aed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cleaning</title>
    <style>
        .container{
            max-width: 1170px;
        }
        @media screen and (min-width: 992px){
           .container{
            max-width: 1170px;
            }
        }
    </style>
</head>
<body>

    <!-- navbar start -->
    <?php include './component/navbar.php'; ?>
    <?php include './component/model.php'; ?>

    <!-- content contact -->
    <div class="container" >
        <br><br><br><br>
        <div class="row container_contact_row d-flex justify-content-around  p-4" >
            <div class="col-6 container_form_contact d-flex-column justify-content-around align-items-center">
                <form class="myForm_contact" action="">
                     <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom... ">
                      </div>
                     <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name@example.com...">
                      </div>
                      <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message..." rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn w-100">Envoyer</button>
                </form>
                <div class="whatssap">
                    <i class="fa-brands fa-whatsapp" style="color: #56cc84;"></i>
                    <h1>Contactez-nous sur whatsapp</h1>
                </div>
            </div>
            <div class="col-6 container_icon_map">
                <div class="container_icons w-100">
                    <div class="contact_icon_container">
                        <i class="fa-solid fa-phone-volume" style="color: #56cc84;"></i>
                        <p>06-56780018</p>
                    </div>
                    <div class="contact_icon_container" style="border-top: 0.4px solid #dee0e2;border-bottom: 0.4px solid #dee0e2;">
                        <i class="fa-solid fa-envelope" style="color: #56cc84;"></i>
                        <p>nom@email.com</p>
                    </div>
                    <div class="contact_icon_container">
                        <i class="fa-solid fa-location-dot" style="color: #56cc84;"></i>
                        <p>Tanger-Maroc</p>
                    </div>
                </div>
                <div class="cnt_map w-100"><div id="map" class="map"></div></div>
            </div>
        </div>
    </div>

    <!-- footer start -->
    <?php include './component/footer.php'; ?>

    <!-- navbar script -->
    <script src="js/script.js"></script>
    <!-- script map -->
    <script>
        const map = L.map('map').setView([35.7774, -5.8035], 14); // Coordonnées de Tanger

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        L.marker([35.7774, -5.8035]).addTo(map)
            .bindPopup('Tanger, Maroc')
            .openPopup();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
