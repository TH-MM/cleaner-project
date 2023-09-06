<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1763c99aed.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@10.1.0/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <title>Document</title>

    <link rel="stylesheet" href="css/art.css">
    <link rel="stylesheet" href="css/plans.css">
    <link rel="stylesheet" href="css/reviews.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/reservation.css">
    <style>
        @import url(https://db.onlinewebfonts.com/c/fc1030bfbd93e6c6e5e8785e0032e4d9?family=Wigrum+Web);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Bebas Neue', sans-serif;
            font-family: 'Mulish', sans-serif;
        }

        .Our_Cleaning_Services {
            margin-top: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .Our_Cleaning_Services h1 {
            text-align: center;
            font-weight: 600;
            font-size: 39px;
            line-height: 58.8px;
            letter-spacing: -0.5px;
            margin-bottom: 10px;
            width: 85%;
            color: rgb(75, 91, 104);
            min-height: 90px;
        }

        .Our_Cleaning_Services .lign {
            min-width: 30%;
            border-bottom: 0.2px solid rgb(226, 226, 226);
        }

        .Our_Cleaning_Services p {
            margin-top: 25px;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
            width: 60%;
            font-weight: 300;
            color: #677D8F;
        }


        /*header section*/
        .home-section {
            width: 100%;
            display: block;
            min-height: 100vh;
            background-image: url('https://centrallimp.com.br/wp-content/uploads/2019/11/post-05-11.png');
            background-position: center top;
            background-size: cover;
            background-attachment: fixed;
        }

        .home-section-secend {
            background-color: rgba(0, 0, 0, 0.515);
            /* rgba(0, 0, 0, 0.343) */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .containerr {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .containerr h1 {
            text-align: center;
            color: #ffffff;
            font-weight: 900;
            font-size: 38px;
            line-height: 45.8px;
            letter-spacing: -1px;
            margin-bottom: 10px;
            width: 85%;
            animation: fade-in 0.5s ease-in-out;
        }

        .containerr p {
            text-align: center;
            font-family: "Wigrum Web", sans-serif;
            font-weight: bold;
            color: rgb(222, 222, 222);
            font-size: 19px;
            width: 68%;
            font-weight: 400;
            animation: fade-in 0.5s ease-in-out;
        }

        .open-button {
            padding: 22px 45px;
            /* padding: 10px 20px; */
            border-radius: 3px;
            background-color: #56cc84;
            color: white;
            border: none;
            font-weight: 700;
            font-size: 18px;
            cursor: pointer;
            opacity: 0.87;
            position: relative;
            top: 50px;
            right: 0;
        }

        @media screen and (max-width:991px) {
            .containerr p {
                min-width: 80%;
            }

            .containerr h1 {
                font-size: 38px;
                line-height: 45.8px;
                letter-spacing: -1px;
                margin-bottom: 10px;
                width: 85%;
                animation: fade-in 0.5s ease-in-out;
            }
        }

        @media screen and (max-width:440px) {
            .h2_widget {
                width: 100%;
                padding-bottom: 80px;
            }
        }

        

        /* home 280px */
        @media screen and (max-width:290px) {
            .containerr h1 {
                
                font-weight: 900;
                font-size: 24px;
            }
            .containerr p {
                font-size: 16.5px;
            }
            .open-button {
                padding: 18px 27px;
                font-size: 18px;
            }
            .h2_widget {
                width: 100%;
                padding-bottom: 80px;
                position: relative;
                right:18px;
            }
            .h5_widget {
                position: relative;
                right:18px;
            }
            .p1_widget p{
                position: relative;
                right:18px;
            }
            .animation{
                position: relative;
                right:18px;
            }
            .durée h1{
                font-size:70px;
            }
            .filter_buttons button{
                font-size:0.6rem;
                font-weight:700;
            }
        }

    </style>


</head>

<body>
    <!-- navbar start -->
    <?php include './component/navbar.php'; ?>
    <?php include './component/model.php'; ?>

    <!-- header section start -->
    <div class="home-section">
        <div class="home-section-secend">
            <div class="containerr">
                <h1>Chaque coin, chaque surface, chaque sourire</h1>
                <p>Société de nettoyage tanger vous propose des prestations aux meilleurs prix pour le nettoyage
                    domicile, vitres, moquettes, canapés et cristallisation de marbre</p>
                <a href="./estimation.php" class="open-button" id="openForm">Estimez votre maison</a>
            </div>
        </div>
    </div>

    <!-- slider -->
    <section class="content">
        <div class="Our_Cleaning_Services">
            <h1>Nos services de nettoyage</h1>
            <div class="lign"></div>
            <p>Laissez-nous utiliser nos procédures avancées pour garantir un environnement propre et 
               sain pour vos employés, clients et invités</p><br><br>
            <div class="container_slider" >
                <div style=' max-width: 1170px;width:100%;' class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide "><img src="" alt="">
                            <img src="img/house.png" alt="">
                            <h2 class="swiper-slide-h1">Nettoyage simple</h2>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Carpet cleaning</li>
                                <li><i class="fa-solid fa-check"></i> Hard Surface Celaning</li>
                                <li><i class="fa-solid fa-check"></i> Dust all furniture</li>
                            </ul>
                            <a href="./services.php#service-1">Read More</a>
                        </div>
                        <div class="swiper-slide"><img src="" alt="">
                            <img src="img/house.png" alt="">
                            <h2 class="swiper-slide-h1">Grand ménage</h2>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Carpet cleaning</li>
                                <li><i class="fa-solid fa-check"></i> Hard Surface Celaning</li>
                                <li><i class="fa-solid fa-check"></i> Dust all furniture</li>
                            </ul>
                            <a href="./services.php#service-2">Read More</a>
                        </div>
                        <div class="swiper-slide"><img src="" alt="">
                            <img src="img/house.png" alt="">
                            <h2 class="swiper-slide-h1">Nettoyage des vitres</h2>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Carpet cleaning</li>
                                <li><i class="fa-solid fa-check"></i> Hard Surface Celaning</li>
                                <li><i class="fa-solid fa-check"></i> Dust all furniture</li>
                            </ul>
                            <a href="./services.php#service-4">Read More</a>
                        </div>
                        <div class="swiper-slide"><img src="" alt="">
                            <img src="img/house.png" alt="">
                            <h2 class="swiper-slide-h1">Nettoyage aménagement</h2>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Carpet cleaning</li>
                                <li><i class="fa-solid fa-check"></i> Hard Surface Celaning</li>
                                <li><i class="fa-solid fa-check"></i> Dust all furniture</li>
                            </ul>
                            <a href="./services.php">Read More</a>
                        </div>
                        <div class="swiper-slide"><img src="" alt="">
                            <img src="img/house.png" alt="">
                            <h2 class="swiper-slide-h1">Fin chantier</h2>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Carpet cleaning</li>
                                <li><i class="fa-solid fa-check"></i> Hard Surface Celaning</li>
                                <li><i class="fa-solid fa-check"></i> Dust all furniture</li>
                            </ul>
                            <a href="./services.php">Read More</a>
                        </div>
                        <div class="swiper-slide"><img src="" alt="">
                            <img src="img/house.png" alt="">
                            <h2 class="swiper-slide-h1">Nettoyage des vitres</h2>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Carpet cleaning</li>
                                <li><i class="fa-solid fa-check"></i> Hard Surface Celaning</li>
                                <li><i class="fa-solid fa-check"></i> Dust all furniture</li>
                            </ul>
                            <a href="./services.php#service-4">Read More</a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <script src="https://unpkg.com/swiper@10.1.0/swiper-bundle.min.js"></script>

            </div>
        </div>
        <br><br><br>
    </section><br><br>

    <!-- reservation -->
    <section class="content_reservation_container">
        <div class="container reservation_container">
            <div class="col content_text_reservation">
                <h1>Raisons de <span style="color: #56cc84;">nous choisir</span></h1>
                <p>Derrière notre engagement enversl'excellence se cachent quelques attributs clés
                    qui définissent quinous sommes et ce qui nous différencie des autres.</p>
                <div class="content_text_icon">
                    <i class="fa-solid fa-leaf"></i>
                    <h4>Société formatrice</h4>
                    <p class="p_div">notre équipe de formateurs expérimentés guide nos agents tout au long de leur parcours, 
                    garantissant des services qui dépassent les attentes.pour garantir des résultats impeccables à chaque visite.</p>
                </div>
                <div class="content_text_icon">
                    <i class="fa-solid fa-leaf"></i>
                    <h4>Qualité supérieure</h4>
                    <p class="p_div">Nous utilisons des outils et des équipements de la plus haute qualité pour éliminer
                        toute la poussière et la saleté de vos locaux.</p>
                </div>
                <div class="content_text_icon">
                    <i class="fa-solid fa-leaf"></i>
                    <h4> Produits respectueux de l'environnement</h4>
                    <p class="p_div">Nous utilisons des produits biodégradables qui ne nuisent en aucune façon à
                        l'environnement, aux animaux domestiques ou aux humains.</p>
                </div>
                <div class="content_text_icon">
                    <i class="fa-solid fa-leaf"></i>
                    <h4>Entreprise la mieux notée</h4>
                    <p class="p_div">Nous avons la réputation de satisfaire nos clients
                        et de récupérer leur argent obligataire.</p>
                </div>
            </div>
            <div class="hidden container_form_reservation" id="myForm">
                <form class="form_1_reservation shadow" id="myForm1">
                    <h2 class='mb-4'>Réserver votre <span style="color: #56cc84;">service</span></h2>
                    <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">Date resérvation:</label>
                        <input type="date" class="form-control input_reservation" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 w-100 ">
                        <label for="exampleFormControlInput1" class="form-label">Heur resérvation :</label>
                        <input type="time" placeholder='votre email' class="form-control input_reservation"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 w-100 ">
                        <label for="exampleFormControlInput1" class="form-label">Adresse :</label>
                        <input type="text" placeholder='votre adresse' class="form-control input_reservation"
                            id="exampleInputPassword1">
                    </div>

                    <button id='openForm1' class="w-100 btn">Continer</button>
                </form>
                <form class="shadow form-popup form_1_reservation" id="myForm2">
                    <h2 class='mb-4'>Continer votre <span style="color: #56cc84;">réservation</span></h2>
                    <div class="mb-3 w-100 ">
                        <label for="exampleFormControlInput1" class="form-label">Nom et prenom :</label>
                        <input type="text" placeholder='votre nom et prénom ...' class="form-control input_reservation"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 w-100 ">
                        <label for="exampleFormControlInput1" class="form-label">Email :</label>
                        <input type="email" placeholder='votre email ...' class="form-control input_reservation"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 w-100 ">
                        <label for="exampleFormControlInput1" class="form-label">Adresse :</label>
                        <input type="text" placeholder='votre adresse...' class="form-control input_reservation"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" id='openForm2' class="w-100 btn">Continer</button>
                </form>
                <form class="shadow form-popup form_1_reservation" id="myForm3">
                    <h2 class='mb-4'>Continer votre <span style="color: #56cc84;">réservation</span></h2>
                    <div class="mb-3 w-100 ">
                        <label for="exampleFormControlInput1" class="form-label">Email :</label>
                        <select class="form-select form-select-lg mb-3"
                            style="font-size:16px;color:#677d8f;font-weight:400;" aria-label=".form-select-lg example">
                            <option selected value="1">ménage simple</option>
                            <option value="2">grande ménage</option>
                        </select>
                    </div>
                    <div class="mb-3 w-100 ">
                        <label for="exampleFormControlInput1" class="form-label">Message :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="votre message ..."
                            rows="3"></textarea>
                    </div>
                    <button type="submit" class="w-100 btn">Réserver</button>
                </form>
            </div>
        </div>
    </section>
    <br><br><br>

    <!-- frein-home -->
    <div class="w-100 class_container_home"
        style="background-color: #f5f6f7; overflow: hidden; padding-bottom: 30px; padding-top: 30px;">
        <div class="container">
            <div class="row class_row_home">

                <div class="col text_calcule">
                    <div class="">
                        <div class="col-lg-5 inset-pad">
                            <h2 class="h2_widget">Nous proposons des estimations, <span style="color: #56cc84;"> gratuites à domicile</span> alors pourquoi attendre ?</h2>
                            <!-- <h2 class="h2_widget" >Nous offrons des devis gratuits à domicile.</h2> -->
                            <h5 class="h5_widget">Prêt pour une installation propre</h5>
                            <div class="p1_widget">
                                <p>Lorsqu'il s'agit d'évaluer une solution de nettoyage et d'assainissement complète et
                                    efficace, du point de vue des coûts, il est important de s'assurer de l'exactitude de tous les coûts impliqués.</p>
                            </div>
                            <div class="p1_widget">
                                <p>Ce calculateur de coûts est mis à la disposition des clients pour vous aider à établir le coût 
                                estimé de nettoyage pour votre maison .</p>
                            </div>
                            <a href="./estimation.php"  style="" class="btn btn-lg animation animated tada" data-animation="tada"><i class="fa-solid fa-calculator" style="color: #ffffff;"></i> calculer maintenant</a>
                        </div>
                    </div>
                </div>

                <div class="col background_calcule">

                    <div class="row class_row">
                        <div class="col-md-6 image-container-1">
                            <div class="image back_img_1">
                                <div class="title_overlay">
                                    <span class="service-house-item-title">Residential Cleaning</span>
                                </div>
                            </div>
                            <div class="image back_img_2">
                                <div class="title_overlay">
                                    <span class="service-house-item-title">Window Cleaning</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 image-container-2">
                            <div class="image back_img_3">
                                <div class="title_overlay">
                                    <span class="service-house-item-title">Move In / Move Out Cleaning</span>
                                </div>
                            </div>
                            <div class="image back_img_4">
                                <div class="title_overlay">
                                    <span class="service-house-item-title">Apartment Cleaning</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><br><br>

    <!-- plans -->
    <div class="cntnr_plans">
        <div class="Our_Cleaning_Services">
                <h1>Choisissez votre plan tarifaire</h1>
                <div class="lign"></div>
                <p>Après quelques années de négociation, nous avons appris qu’il n’existe pas de solution unique. Nous faisons de notre mieux pour concevoir un forfait qui répond à vos besoins particuliers et respecte votre budget.</p><br><br>
        </div>  
        <nav class="filter_buttons">
        <button id="slider1Btn">Une seule fois</button>
        <button id="slider2Btn">Par semaine</button>
        <button id="slider3Btn">Par quinzaine</button>
        <button id="slider4Btn">Par moi</button>
        </nav><br><br>

        <div class="container cntnr_slider" >
                    <div  class="slider" id="slider1">
                        <div >
                            <div class="card-container">
                                <div style="border-radius: 3px 4px 6px rgba(62, 62, 62, 0.624) !important;" class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage Simple</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        40
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par heure</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Fin chantier</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        40
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par heure</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Grand ménage</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        55
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par heure</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage des vitres</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        35
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par heure</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage aménagement</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        40
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par heure</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Fin chantier</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        40
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par heure</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider hidden" id="slider2">
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage des vitres</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        127
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par jour</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage simple</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        129
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par jour</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Grand ménage</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        120
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par jour</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage des vitres</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        120
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par jour</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage aménagement.</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        122
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par jour</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Fin chantier</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        125
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par jour</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider hidden" id="slider3">
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage simple</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        121
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par semaine</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage aménagement.</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        156
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par semaine</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage des vitres</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        230
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par semaine</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Fin chantier</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        270
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par semaine</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Grand ménage</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        439
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par semaine</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage des vitres</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        230
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par semaine</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider hidden" id="slider4">
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Grand ménage</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        800
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par moi</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage aménagement</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        600
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par moi</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage des vitres</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        760
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par moi</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Fin chantier</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        450
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par moi</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage simple</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        456
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par moi</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-container">
                                <div class="card  city">
                                <div class="plan">
                                    <h1 class="h1_plan">Nettoyage aménagement</h1>
                                    <div class="durée">
                                    <h1>
                                        <sup>&nbsp;DH</sup>
                                        380
                                        <sup>00</sup>
                                    </h1>
                                    <p>Par moi</p>
                                    </div>
                                    <ul>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Nettoyeur expérimenté et formé</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        <span style="color:#56cc84;">Entretien </span>&nbsp Nettoyage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Responsabilité civile et dommages assurés</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Vous choisissez parmi 3 jours de ménage</li>
                                        <li style="font-size: 16px;line-height: 26px;list-style: none;color: #677d8f;text-align: center;">
                                        Couverture de vacances  planifiées</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

    </div>
    <br><br>

    <!-- TESTIMONIALS -->
    <section class="testimonial text-center">
        <div class="container">
            <div class="heading white-heading">
                Clients satisfaits
            </div>
            <div id="testimonial4"
                class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                            <p>Un petit mail pour vous remercier pour le travail fourni ! L'appartement était si propre
                                qu'on aurait pu croire qu'il était neuf !</p>
                            <h4>Jesse Hudson</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="https://hordercentre.co.uk/wp-content/uploads/Website-Profile-Photos-400-%C3%97-400px-1.png"
                                class="img-circle img-responsive" />
                            <p>Je tenais à vous remercier ainsi que vos collaborateurs pour la qualité du travail
                                effectué dans notre copropriété durant cette année. </p>
                            <h4>Droesbeke</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- END OF TESTIMONIALS -->
    <br><br><br>





    <!-- footer start -->
    <?php  include './component/footer.php';  ?>
    <!-- footer end -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                slidesPerView: 'auto', // Ajustement automatique du nombre de slides
                spaceBetween: 30,
                centeredSlides: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });


    </script>
    <script>
        $(document).ready(function () {
            // Activer le carrousel
            $("#testimonial4").carousel();

            // Gérer les contrôles personnalisés
            $("#prev-button").click(function () {
                $("#testimonial4").carousel("prev");
            });

            $("#next-button").click(function () {
                $("#testimonial4").carousel("next");
            });
        });
    </script>
    <script>
        $(document).ready(function () {

                // Initialize Slider 1
                $('#slider1').slick({
                slidesToShow: 3,
                dots: true,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                    },
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                    }
                ]
                });

                // Initialize Slider 2
                $('#slider2').slick({
                slidesToShow: 3,
                dots: true,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                    },
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                    }
                ]
                });

                // Initialize Slider 3
                $('#slider3').slick({
                slidesToShow: 3,
                dots: true,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                    },
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                    }
                ]
                });

                // Initialize Slider 4
                $('#slider4').slick({
                slidesToShow: 3,
                dots: true,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                    breakpoint: 980,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                    },
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                    }
                ]
                });

                // Button click events
                $('#slider23Btn').click(function () {
                $('#slider2').addClass('hidden');
                $('#slider1').addClass('hidden');
                $('#slider4').addClass('hidden');
                $('#slider3').removeClass('hidden');
                });

                // Button click events
                $('#slider4Btn').click(function () {
                $('#slider2').addClass('hidden');
                $('#slider1').addClass('hidden');
                $('#slider3').addClass('hidden');
                $('#slider4').removeClass('hidden');
                });
                // Button click events
                $('#slider1Btn').click(function () {
                $('#slider2').addClass('hidden');
                $('#slider3').addClass('hidden');
                $('#slider4').addClass('hidden');
                $('#slider1').removeClass('hidden');
                });

                // Button click events
                $('#slider2Btn').click(function () {
                $('#slider3').addClass('hidden');
                $('#slider1').addClass('hidden');
                $('#slider4').addClass('hidden');
                $('#slider2').removeClass('hidden');
                });

        });
    </script>

    <!-- Ajouter les liens vers les fichiers JavaScript de Bootstrap et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/plan.js"></script>
    <script src="js/script.js"></script>
    <script src="js/reviews.js"></script>
    <script>
        // reservation 
        document.getElementById("openForm1").addEventListener("click", function (e) {
            e.preventDefault();
            document.getElementById("myForm2").classList.add("show");
        });

        document.getElementById("openForm1").addEventListener("click", function (e) {
            e.preventDefault();
            document.getElementById("myForm1").classList.add("désactiver");
            document.body.classList.add("hidden");
            document.body.classList.remove("hidden");
        });

        document.getElementById("openForm2").addEventListener("click", function (e) {
            e.preventDefault();
            document.getElementById("myForm3").classList.add("show");
        });

        document.getElementById("openForm2").addEventListener("click", function (e) {
            e.preventDefault();
            document.getElementById("myForm2").classList.add("désactiver");
            document.body.classList.add("hidden");
            document.body.classList.remove("hidden");
        });


    </script>

</body>

</html>
