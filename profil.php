<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profil</title>
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Deposer une annonce</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Mes-annonces.php">Voire Mes annonces</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
 <!-- ====================== Add info by Client =========================== -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title" id="titreAnnonce">
          <h2>Desposer une annonce</h2>
        </div>
        <div class="row content" id="info">
          <div class="col-lg-6">
            <section class="u-align-center u-clearfix u-gradient u-section-3" id="carousel_babd">
              <div class="u-clearfix u-sheet u-sheet-1">
                <section class="h-100 h-custom" style="background-color: #fff;">
                  <div class="container py-5 h-100" id="agency">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="card-body p-4 p-md-5" id="titreInfo">
                        <div id="titleInfo">
                          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">ANNONCES INFO</h3>
                        </div>

                        <form class="px-md-2" action="index.php" method="post" enctype="multipart/form-data">
                          <!-- <input type="text" name="hidden_id" id="my_hidden_id" value=""/> -->
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example1q">Titre</label>
                            <input type="text" id="form1Example1q" class="form-control" name="titre" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1q">Import Image</label>
                            <input type="file" id="form3Example1q" class="form-control" name="image" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example1q">Description</label>
                            <input type="text" id="form3Example1q" class="form-control" style="height: 20vh;" name="description" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1q">Superficie</label>
                            <input type="text" id="form3Example1q" class="form-control" name="superficie" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1q">Adresse</label>
                            <input type="text" id="form3Example1q" class="form-control" name="adresse" />
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example1q">Montant</label>
                            <input type="text" id="form4Example1q" class="form-control" name="montant" />
                          </div>

                          <div class="row">
                            <div class="form-outline mb-4">
                              <div class="form-outline mb-4">
                                <label for="exampleDatepicker1" class="form-label">Date
                                  d’annonce</label>
                                <input type="date" class="form-control" id="exampleDatepicker1" name="date" />
                              </div>
                            </div>
                          </div>

                          <div class="form-outline mb-4">
                            <label class="form-label" for="form5Example1q">Type annonce</label>
                            <select name="type_annonce" class="form-select" aria-label="Default select example">
                              <option value="Vendre">Vendre</option>
                              <option value="Location">Location</option>
                            </select>
                          </div>
                          <button type="submit" name="submit" id="submitBtn">Submit</button>
                        </form>

                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </section>
          </div>
        </div>
      </div>

    </section>

        <?php
            $msg = "";
            // include("auth_session.php");
            // session_start();
            if (isset($_POST['submit'])) {
            $con = mysqli_connect('localhost', 'Root', '', 'gestions');
            if ($con) {
                // $id = $_POST['id'];
                $idClient  = $_SESSION['id_client'];
                $titre = $_POST['titre'];
                $description = $_POST['description'];
                $superficie = $_POST['superficie'];
                $adresse = $_POST['adresse'];
                $montant = $_POST['montant'];
                $type_annonce = $_POST['type_annonce'];

                $con = mysqli_connect('localhost', 'Root', '', 'gestions');
                if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
                }
            
                $sql = "INSERT INTO annonce(id_client,titre, description, adresse, superficie,type_annonce, prix, date_publication, date_modification) VALUES ('$idClient','$titre','$description','$adresse','$superficie','$type_annonce','$montant',NOW(),NOW())";
            
                if ($con->query($sql) === TRUE) {
                $id_annonce = $con->insert_id;
            
                $image = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $folder = "assets/img/" . $image;
                $upload_success = move_uploaded_file($tmp_name, $folder);
                $picturess = "INSERT INTO images(id_annonce,image_path) VALUES ('$id_annonce', '$folder')";
            
                
            
            
                if ($con->query($picturess) !== TRUE) {
                    echo "Error: " . $conn->error;
            
            
                    die("Error inserting image data.");
                }
            
                header("location:profil.php");
                } else {
                die("Error inserting announcement data.");
                }
            
                $conn->close();
            }
                
            }
            ?>


       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts2.js"></script>
    </body>
</html>
