<?php
include '../../controller/TicketC.php';
session_start();

$Ticket1C=new TicketC();
$list=$Ticket1C->afficherTicketTalent($_SESSION['idTalent']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#acceui">acceuil</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">signup</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Evenement.php">Evenement</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="reservation.php">Reservations</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>
</header>

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <u> <h2 class="section-heading text-uppercase">Mes réservations</h2></u>
            <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
            <?php
            foreach($list as $row){
                ?>
                <div class="col-lg-4 col-sm-6 mb-4">

                    <div class="portfolio-item">
                        <a class="portfolio-link"  >
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo $row['photo_event']; ?>" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?php echo $row['nom_event'].",".$row['adresse_event']; ?></div>
                            <div class="portfolio-caption-subheading text-muted" ><a href="suppTicket.php?id=<?php echo $row['id_ticket']; ?>"><button type="submit" class="btn btn-primary">Annuler</button></a></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
        <!DOCTYPE html>
            <html>
            <head>
            <style>
            .pagination {
              display: inline-block;
            }
            
            .pagination a {
              color: black;
              float: left;
              padding: 5px 14px;
              text-decoration: none;
              transition: background-color .3s;
              border: 3px solid #ddd;
            }
            
            .pagination a.active {
              background-color: #212529;
              color: white;
              border: 1px solid #212529;
            }
            
            .pagination a:hover:not(.active) {background-color: #ddd;}
            </style>
            </head>
            <body>
            
            <h2> </h2>
            
            <div class="pagination">
              <a href="Evenement.php">&laquo;</a>
              <a href="Evenement.php">1</a>
              <a href="reservation.php" class="active">2</a>
              <a href="reservation.php">&raquo;</a>
            </div>
            
            </body>
            </html>
    </div>

</section>

<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
