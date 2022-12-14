<?php
include_once 'includes/function.php';
include_once 'includes/session.php';
include_once 'config/db.php';


if (isset($_POST['contactForm'])) {
  //pr($_POST, true);
  $client_name =  trim($_POST['client_name']);
  $email =  trim($_POST['email']);
  $phone =  trim($_POST['phone']);
  $message = trim($_POST['message']);

  $sql = "INSERT INTO `contact` (name, email, phone, message) VALUES('$client_name', '$email', '$phone', '$message' )";

  if ($con->query($sql) == true) {
    redirect('contact.php', 'Thanks for messageing us. ');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="icon-x.svg" type="image/x-icon">
  <title>SaveLife</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="utils.css">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php">
            SaveLife</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars nav-responsive-icon" aria-hidden="true"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="request.php">Request Blood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registration.php">Donor Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>

            </ul>
            <div class="text-sm-center ">
              <a href="login.php"><button type="button" class="btn btn-outline-light ms-5"><b>Login</b></button></a>
            </div>

          </div>
        </div>
      </nav>
    </header>
    <main class="non-root">
      <section id="connect">
        <div class="container-lg">
          <?php include_once 'partials/msg.php' ?>
          <div class="text-center pt-5">
            <h2 class="text-white font-weight-bolder">Contact Us </h2>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-6 mb-5 form-content py-2">

              <form method="POST" action="./contact.php">
                <label for="client_name" class="form-lable">Your Name:</label>
                <input type="text" class="form-control" name="client_name" id="client_name" required placeholder="e.g. Jack">
                <label for="email" class="form-lable">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" required placeholder="e.g. captain@emaxple.com">
                <label for="phone" class="form-lable">Phone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required placeholder="e.g 01555566677">
                <label for="message" class="form-lable">Your Message</label>
                <textarea name="message" class="form-control" id="" cols="30" rows="8" placeholder=""></textarea>
                <div class="text-center my-3">

                  <button type="submit" name="contactForm" class="btn btn-dark">Send</button>
                </div>

              </form>
            </div>
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