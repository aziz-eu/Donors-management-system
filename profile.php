<?php
include_once 'includes/function.php';
include_once 'includes/session.php';
include_once 'config/db.php';
guard('login.php', 'You must login first');
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="icon-x.svg" type="image/x-icon" />
  <title>SaveLife</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="utils.css">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"> SaveLife</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars nav-responsive-icon" aria-hidden="true"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>
    <main>
      <section id="main-container" class="container-fluid">

        <div class="container profile">
          <div class="picture">
            <img class="profile-pic img-fluid" src="img/aben-tefra-2VBD0EP4Xtc-unsplash.jpg" alt="profile Picture" width="200px">
          </div>
          <div class="propertiys">
            <ul>
              <li>Name : <?php echo getUserSession('frist_name') . ' ' . getUserSession('last_name') ?></li>
              <li>Blood Group : <?php echo getUserSession('blood_group')  ?></li>
              <li>Age : <?php echo getUserSession('age')  ?></li>
              <li>Weight : <?php echo getUserSession('weight')  ?></li>
              <li>Phone : <?php echo getUserSession('phone')  ?></li>
              <li>Email : <?php echo getUserSession('email')  ?></li>
              <li>Address : <?php echo getUserSession('city')  ?>, Division: <?php echo getUserSession('division')  ?></li>
              <li>Date of Last Donation: 2-12-2021</li>
            </ul>
            <button class="btn btn-dark mb-3">Edit Profile</button>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer-container bg-dark ">
        <div class="row footer-content">
          <div class="col-lg-6 col-md-12 text-lg-start text-md-center text-sm-center">
            <div>

              <p class="text-white footer-title">
                SaveLife | &copy;Copyright2022
              </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="social-icon d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center align-items-lg-center">
              <i class="fa-brands fa-facebook fb-icon fa-2x"></i>
              <a href="https://facebook.com"><i class="fa-brands fa-youtube youtube-icon fa-2x"></i></a>
              <i class="fa-brands fa-twitter twitter-icon fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>