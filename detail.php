<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets2/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles2.css" rel="stylesheet" />
</head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets2/imag/user.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">page d'accueil</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="profil.php">Deposer une annonce</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Mes-annonces.php">Voire Mes annonces</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <?php
        if(isset($_POST["showAnnonce"])){
            $con = mysqli_connect('localhost', 'Root', '', 'gestions');
            $id=$_POST["annonceClient"];
            $result = mysqli_query($con, "SELECT * FROM annonce WHERE id_annonce=$id");
            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <div class="card" id="cards">
                            
                        <div id="modal">
                            
                            <div id="infoModal" style="width:250px">
                            <h5 class="modal-title" id="exampleModalLabel"><span>Titre :</span> <?php echo $row['titre']; ?></h5>
                            <p class="card-text"><span>Description :</span> <?php echo $row['description']; ?></p>
                            <p class="card-text"><span>Montant :</span> <?php echo $row['prix']; ?> <span>DH</span></p>
                            <p class="card-text"><span>Type d'annonce :</span> <?php echo $row['type_annonce']; ?></p>
                            <div class="btnmod">
                            </div>
                            </div>
                        </div>
                        </div>
                <?php
            }
        }
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts2.js"></script>
</body>
</html>