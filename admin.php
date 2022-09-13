<?php 
  include_once 'includes/function.php';
  include_once 'includes/session_admin.php';
  include_once 'config/db.php';


  if(isset($_POST['adminLogin'])){
    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password']));

   
    
    if( login($username, $password) ){
      redirect('admin_dashboard.php', 'Your logged in');
    }
    else{
      $_GET['msg'] = "Username or password does not match";
      $_GET['type'] = 'danger';
    }
    
   

  }
  else{
   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="icon-x.svg" type="image/x-icon">
  <title>SaveLife</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="utils.css">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                <a class="nav-link" href="about.php">About</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
    </header>
    <main class="non-root">
    <?php include_once 'partials/msg.php' ?>
      <section id="connect">
        <div class="container-lg">
        
          <div class="text-center pt-5">
            <h2 class="text-white font-weight-bolder">Admin Login</h2>
          </div>
         
          <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-8 col-sm-10 mb-5 form-content py-2">

              <form action="admin.php" method="post">
                <label for="username" class="form-lable">Username</label>
                <input type="username" class="form-control" name="username" id="username" required
                  placeholder="e.g. captain@emaxple.com">
                <label for="password" class="form-lable">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="your password" required>
                <div class="text-center mt-5 mb 3">
                  <input type="submit" class="btn btn-dark" value="Login" name="adminLogin">
                </div>
              </form>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <?php include_once 'partials/footer.php' ?>
    </footer>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>