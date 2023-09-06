<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1763c99aed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" type="text/css" href="css/reservation.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
    <!-- navbar start -->
    <?php include './component/navbar.php'; ?>

    <!-- content faq -->

    <div class="container conatiner_faq">
    <?php include './component/model.php'; ?>
    <br><br><br><br><br>
        <div class="accordion">
    
            <div class="accordion-item" >
              <button id="accordion-button-1" aria-expanded="true"><p class="accordion-title">Comment puis-je obtenir un devis ?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Visitez simplement le flux d'inscription pour réserver un nettoyage et, à mesure que vous fournissez des informations sur votre maison et votre emploi du temps, votre devis s'ajustera dynamiquement.</p>
              </div>
            </div>
    
            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><p class="accordion-title">Suis-je facturé le montant total indiqué même si le nettoyage de ma maison ne prend pas autant de temps ?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Non, vous n'êtes facturé qu'en fonction du temps pendant lequel votre femme de ménage était réellement à votre domicile pour travailler. S'ils terminent plus tôt, le montant total indiqué ne vous sera pas facturé.</p>
              </div>
            </div>
    
            <div  class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><p class="accordion-title">Est-ce que quelqu'un doit visiter ma maison avant que je puisse réserver un ménage ?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Absolument pas! Nous ne voudrions pas que des vendeurs insistants viennent chez nous, donc nous ne vous ferions jamais ça. Vous pouvez obtenir un devis et réserver votre ménage en ligne. Cela prend environ une minute.</p>
              </div>
            </div>
    
            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><p class="accordion-title">Les produits de nettoyage sont-ils inclus ?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Les produits de nettoyage ne sont pas inclus par défaut. Cela garantit que votre nettoyeur utilise les produits que vous aimez et qu’il n’y a pas de contamination croisée d’une maison à l’autre.</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><p class="accordion-title">Que faire si je ne suis pas satisfait de mon nettoyage ?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Veuillez nous contacter immédiatement et nous prendrons des dispositions pour remédier à la situation. Nous avons une garantie de satisfaction que nous respectons.</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><p class="accordion-title">Puis-je obtenir une réservation le jour méme?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Cela dépend entièrement de vous. Si vous n'êtes pas chez vous, assurez-vous de nous indiquer comment accéder à votre maison en inscrivant les informations dans votre tableau de bord client.</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><p class="accordion-title">Dois-je à la maison pour mon nettoyage ?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Cela dépend entièrement de vous. Si vous n'êtes pas chez vous, assurez-vous de nous indiquer comment accéder à votre maison en inscrivant les informations dans votre tableau de bord client.</p>
              </div>
            </div>

            <div class="accordion-item">
              <button id="accordion-button-1" aria-expanded="false"><p class="accordion-title">Mon nettoyeur arrive-t-il à l'heure exacte que je réserve ?</p><span class="icon" aria-hidden="true"></span></button>
              <div class="accordion-content">
                <p>Oui, la plupart du temps. Cependant, nous autorisons un créneau d'une heure en raison des conditions de circulation et des conditions météorologiques. </p>
              </div>
            </div>

            
    
        </div>
        <br><br><br><br>
    </div>

    <!-- footer start -->
    <?php include './component/footer.php'; ?>

      <!-- navbar script -->
      <script src="js/script.js"></script>
      <!-- faq script -->
    <script src="js/faq.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>