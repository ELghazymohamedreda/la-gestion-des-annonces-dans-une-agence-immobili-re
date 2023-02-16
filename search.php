<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LUXIOR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">LUXIOR</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" id="annonce">
          <h1>Gestion des annonces</h1>
          <h2>APPLICATION</h2>
          <div class="d-flex justify-content-center justify-content-lg-start" id="btnAnnonce">
            <a href="#info" class="btn-get-started scrollto">Déposer une annonce</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200" id="img">
          <img src="pngegg (5).png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>


  <main id="main">



    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title" id="titlee">
          <h2>Les annonces</h2>
        </div>
      </div>
      <div class="row" id="rows">
        <div class="card-deck">

          <?php
          if (isset($_POST['search'])) {
            $con = mysqli_connect('localhost', 'Root', '', 'agence');
            $min_price = $_POST['min'];
            $max_price = $_POST['max'];
            $types = $_POST['type_annoncess'];


            if ($max_price != '' && $min_price != '') {
              $query = "SELECT * FROM annonces WHERE montant BETWEEN $min_price AND $max_price";

              $results = mysqli_query($con, $query);

              while ($row = mysqli_fetch_assoc($results)) {
                $data = array();
                $data[] = $row;
          ?>

                <div class="card" id="cards">
                  <!-- Button trigger modal -->
                  <div id="modal">
                    <div>
                      <img class="card-text" src="<?php echo $row['images']; ?>">
                    </div>
                    <div id="infoModal">
                      <h5 class="modal-title" id="exampleModalLabel"><span>Titre :</span> <?php echo $row['titre']; ?></h5>
                      <p class="card-text"><span>Description :</span> <?php echo $row['description']; ?></p>
                      <p class="card-text"><span>Montant :</span> <?php echo $row['montant']; ?> <span>DH</span></p>
                      <p class="card-text"><span>Type d'annonce :</span> <?php echo $row['type_annonce']; ?></p>
                      <button type="button" class="modbuttons" class="btn btn-primary" id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Voir plus
                      </button>
                    </div>
                  </div>
                </div>
              <?php
              }
            }
            if ($max_price != '' && $min_price != '' && $types != '') {
              $querys = "SELECT * FROM annonces
              WHERE price BETWEEN $min_price AND $max_price
              AND type_annonce = '$types'";

              $results = mysqli_query($con, $querys);

              while ($row = mysqli_fetch_assoc($results)) {
                $data = array();
                $data[] = $row;
              ?>

                <div class="card" id="cards">
                  <!-- Button trigger modal -->
                  <div id="modal">
                    <div>
                      <img class="card-text" src="<?php echo $row['images']; ?>">
                    </div>
                    <div id="infoModal">
                      <h5 class="modal-title" id="exampleModalLabel"><span>Titre :</span> <?php echo $row['titre']; ?></h5>
                      <p class="card-text"><span>Description :</span> <?php echo $row['description']; ?></p>
                      <p class="card-text"><span>Montant :</span> <?php echo $row['montant']; ?> <span>DH</span></p>
                      <p class="card-text"><span>Type d'annonce :</span> <?php echo $row['type_annonce']; ?></p>
                      <button type="button" class="modbuttons" class="btn btn-primary" id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Voir plus
                      </button>
                    </div>
                  </div>
                </div>
              <?php
              }
            }
            if ($types != '') {
              $queryes = "SELECT * FROM annonces WHERE type_annonce = '$types'";
              $results = mysqli_query($con, $queryes);
              while ($row = mysqli_fetch_assoc($results)) {
                $data = array();
                $data[] = $row;
              ?>

                <div class="card" id="cards">
                  <!-- Button trigger modal -->
                  <div id="modal">
                    <div>
                      <img class="card-text" src="<?php echo $row['images']; ?>">
                    </div>
                    <div id="infoModal">
                      <h5 class="modal-title" id="exampleModalLabel"><span>Titre :</span> <?php echo $row['titre']; ?></h5>
                      <p class="card-text"><span>Description :</span> <?php echo $row['description']; ?></p>
                      <p class="card-text"><span>Montant :</span> <?php echo $row['montant']; ?> <span>DH</span></p>
                      <p class="card-text"><span>Type d'annonce :</span> <?php echo $row['type_annonce']; ?></p>
                      <button type="button" class="modbuttons" class="btn btn-primary" id="<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Voir plus
                      </button>
                    </div>
                  </div>
                </div>
          <?php
              }
            }
          }
          ?>


        </div>
      </div>
    </section>

    <?php
    if (isset($_POST['edit'])) {
      $con = mysqli_connect('localhost', 'Root', '', 'agence');
      $ids = $_POST['ids'];
      $titres = $_POST['titre'];
      $descriptions = $_POST['description'];
      $superficies = $_POST['superficie'];
      $adresses = $_POST['adresse'];
      $montants = $_POST['montant'];
      $dates = $_POST['date'];
      $type_annonces = $_POST['type_annonce'];

      $images = $_FILES['image']['name'];
      $tmp_name = $_FILES['image']['tmp_name'];
      $folder = "assets/img/" . $images;
      move_uploaded_file($tmp_name, $folder);

      $sql = "UPDATE annonces SET titre='$titres', images='$folder' , description='$descriptions', superficie='$superficies', adresse='$adresses', montant='$montants', date='$dates', type_annonce='$type_annonces'
                  WHERE id=$ids";
      if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
        header("Refresh:0");
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
      mysqli_close($con);
    }
    ?>

    </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>
    <footer id="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Arsha</h3>
              <p>
                Revenue Calefornia<br>
                Tanger, 90000<br>
                Morrocco <br><br>
                <strong>Phone:</strong> +212800012121<br>
                <strong>Email:</strong> Luxior@gmail.com<br>
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Vendre</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Location</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>Luxior</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script>
      const buttons = document.querySelectorAll('.modbuttons');

      buttons.forEach(button => {
        button.addEventListener('click', event => {
          const id = event.target.id;
          const data = <?php echo json_encode($data); ?>;
          const selectedData = data.find(row => row.id == id);
          console.log(selectedData);
          console.log(data);

          const modalContainer = document.querySelector('#exampleModal');
          modalContainer.innerHTML = "";
          const modal = document.createElement('div');
          modal.innerHTML = `
                                
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><span>Titre :</span> ${selectedData.titre}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" id="bodyCard">
                                        <div id="modalBody">
                                        <img class="card-text" src="${selectedData.images}">
                                        <p class="card-text"><span>Description :</span>${selectedData.description}</p>
                                        <p class="card-text"><span>Superficie :</span>${selectedData.superficie} <span>m2</span></p>
                                        <p class="card-text"><span>Adresse :</span>${selectedData.adresse}</p>
                                        <p class="card-text"><span>Montant :</span>${selectedData.montant} <span>DH</span></p>
                                        <p class="card-text"><span>Date :</span>${selectedData.date}</p>
                                        <p class="card-text"><span>Type d'annonce :</span>${selectedData.type_annonce}</p>
                                        <div id="modBtn">
                                            <form>
                                            <input type="button" onclick="verficationDelete()" value="Supprimer">
                                            <input type="button" onclick="editRow()" value="Modifier">
                                            </form>
                                        </div>
                                        <form class="px-md-2" action="index.php" method="post" style="display:none;" id="forms" enctype="multipart/form-data">
                                            <input type="hidden" name="ids" value="${selectedData.id}">
                                            <label for="titre">Titre:</label>
                                            <input type="text" class="form-control" id="titre" name="titre" value="${selectedData.titre}"><br><br>
                                            <label for="image">images:</label>
                                            <input type="file" class="form-control" id="image" name="image" value="${selectedData.images}"><br><br>
                                            <label for="description">Descriptions:</label>
                                            <input type="text" class="form-control" id="description" name="description" value="${selectedData.description}"><br><br>
                                            <label for="superficie">Superficie:</label>
                                            <input type="number" class="form-control" id="superficie" name="superficie" value="${selectedData.superficie}"><br><br>
                                            <label for="adresse">Adresse:</label>
                                            <input type="text" class="form-control" id="adresse" name="adresse" value="${selectedData.adresse}"><br><br>
                                            <label for="montant">Montant:</label>
                                            <input type="number" class="form-control" id="montant" name="montant" value="${selectedData.montant}"><br><br>
                                            <label for="date">Date:</label>
                                            <input type="date" class="form-control" id="date" name="date" value="${selectedData.date}"><br><br>
                                            <label for="types">Type d'annonce:</label>
                                            <input type="text" id="types" class="form-control" name="type_annonce" value="${selectedData.type_annonce}"><br><br>
                                            <input type="submit" class="form-control" name="edit" value="Update" id="update">
                                        </form>
                                        </div>
                                        <div id="warning">
                                          <img src="assets/img/icon.png" alt="warning" style="width: 8vw;height:12vh;margin-left:38%;">
                                          <h5>Voulez-vous vraiment  supprimer cette annonce ?</h5>
                                          <form action="index.php" method="post">
                                            <input type="hidden" name="id" value="${selectedData.id}">
                                            <input type="submit" name="delete" value="OUI">
                                            <input type="button" value="NON" onclick="showModal()">
                                          </form>
                                       </div>
                                    </div>
                                    <div class="modal-footer" id="close">
                                        <button type="button" class="btn btn-secondary" id="close-button" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                
                            `;
          modalContainer.appendChild(modal);

          const closeButton = modal.querySelector('#close-button');
          closeButton.addEventListener('click', event => {
            modalContainer.removeChild(modal);
            location.reload();
          });
        });
      });
    </script>


    <script>
      function editRow() {
        document.getElementById("forms").style.display = 'block';
      }

      function verficationDelete() {
        document.getElementById("modalBody").style.display = 'none';
        document.getElementById("warning").style.display = 'block';
      }

      function showModal() {
        document.getElementById("modalBody").style.display = 'block';
        document.getElementById("warning").style.display = 'none';
      }
      //   $.ajax({
      //     type: "POST",
      //     url: "index.php",
      //     data: {
      //       data: formData
      //     },
      //     success: function(response) {
      //       if (response == "success") {
      //         location.reload();
      //       }
      //     }
      //   });
    </script>
    <script src="jquery-3.6.3.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>