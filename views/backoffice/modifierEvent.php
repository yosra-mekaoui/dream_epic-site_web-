<?php
include '../../controller/EvenementC.php';
$Evenmenet1C= new EvenementC();

$list=$Evenmenet1C->trouverEvent($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Evenement</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">modifier un Evenement</h1>
                        <form method="post" enctype="multipart/form-data">
                            <?php
                            foreach ($list as $row) {
                                ?>
                                <div class="form-row"  enctype="multipart/form-data">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" style="color:red;">Nom Evenement</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nom"
                                               name="nom" value="<?php echo $row['nom_event']; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Numéro de téléphone</label>
                                        <input type="number" class="form-control" id="inputAddress" placeholder="Numero"
                                               name="numero" value="<?php echo $row['num_tel']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4">Adresse Evenement</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Adresse"
                                           name="adresse" value="<?php echo $row['adresse_event']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Information de l'Evenement</label>
                                    <textarea class="form-control" placeholder="Informations" name="information"><?php echo $row['information_event']; ?></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">Date début</label>
                                        <input type="date" class="form-control" name="date_debut" value="<?php echo $row['date_debut']; ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Date fin</label>
                                        <input type="date" class="form-control" name="date_fin"  value="<?php echo $row['date_fin']; ?>">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Prix</label>
                                        <input type="number" class="form-control" id="input" placeholder="Prix" name="prix" value="<?php echo $row['prix']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Nombre des places</label>
                                        <input type="number" class="form-control" id="inputZip"
                                               placeholder="Nombre places" name="nombre" value="<?php echo $row['nombre_participants'] ?>">
                                    </div>
                                    <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Photo</label>
                                    <input type="file" name="photo" accept="image/png, image/jpeg ,image/jpg" required>
                                </div>
                            </div>


                                </div>
                                <?php
                            }
                            ?>
                            
                            <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                          </form>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

<?php
include '../../entities/Evenement.php';
if(isset($_POST['modifier'])){
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $file_tmp =$_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp,$target_file);
    $Evenement1=new Evenement(1,$_POST['nom'],$_POST['adresse'],$_POST['numero'],$_POST['information'],$_POST['nombre'],$_POST['date_debut'],$_POST['date_fin'],$_POST['prix'],$target_file);

    if($Evenmenet1C->modifierEvent($_GET['id'],$Evenement1)){
        ?>
        <script>
            document.location.replace("Evenements.php") ;
        </script>
        <?php
    }
}




?>
