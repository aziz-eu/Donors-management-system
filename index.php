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
          <a class="navbar-brand" href="./index.php"> SaveLife</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars nav-responsive-icon" aria-hidden="true"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="request.php">Request Blood</a>
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
      <section id="banner">
        <div class="banner-container d-flex justify-content-center align-items-center">
          <div class="banner-content text-center text-white">
            <h1 class="heading-banner">Donate Blood Save Life</h1>
            <p class="p-4 heading-text text-white">
              If You Are A Blood Donor, That Is Great. But If You Are A Blood
              Donor Who Also Encourages Other People To Donate Blood, You Are
              The Best!
            </p>
          </div>
        </div>
      </section>
    </header>
    <main>
      <section id="main-container">
        <h1 class="text-center main-container-heading ">About Blood and Blood Donation</h1>
        <div class="row mt-5">
          <div class="col-lg-6 d-block d-lg-flex justify-content-center quarybox">
            <div class="main-container-content">
              <h3 class="text-center font-weight-bolder main-query">Who can Donate Blood</h3>
              <div class="icon-center text-center">
                <i class="fal fa-question fa-5x quary-icon mt-1 mb-2"></i>
              </div>
              <ul class="main-container-ul">
              <li><a href="QnA/QnA1.php" target="_blank">What age do I need to be to donate?</a></li>
                <li><a href="QnA/QnA2.php" target="_blank">What weight do I need to be to donate?</a></li>
                <li><a href="QnA/QnA3.php" target="_blank">Can i give blood after travelling?</a></li>
                <li><a href="QnA/QnA4.php" target="_blank">Can I donate if I have high blood pressure?</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 d-block d-lg-flex justify-content-center quarybox">
            <div class="main-container-content">
              <h3 class="text-center ">Frequently Ask Question</h3>
              <div class="icon-center text-center">
                <i class="fal fa-question fa-5x quary-icon mt-1 mb-2"></i>
              </div>
              <ul class="main-container-ul">
              <li><a href="QnA/QnA5.php" target="_blank">What happens when I give blood?</a></li>
                <li><a href="QnA/QnA6.php" target="_blank">Is giving blood safe? </a></li>
                <li><a href="QnA/QnA7.php" target="_blank">How will I feel after giving blood?</a></li>
                <li><a href="QnA/QnA8.php" target="_blank">How much blood will be taken? Will I have enough? </a></li>
              </ul>
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
              <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook fb-icon fa-2x"></i></a>
              <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube youtube-icon fa-2x"></i></a>
              <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter twitter-icon fa-2x"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>