<?php
include_once 'includes/function.php';
include_once 'includes/session.php';
include_once 'config/db.php';
guard('login.php', 'You must login first');

$id = $_SESSION['user']['id'];


$newfilename = "user_id_{$id}_" . time();


if (isset($_FILES['image'])) {

  if (!file_exists('uploads/bdonners/profile-picture'))
    mkdir('uploads/bdonners/profile-picture', 0777, true);



  $errors = array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_ext = explode('.', $_FILES['image']['name']);
  $file_ext = strtolower(end($file_ext));

  $expensions = array("jpeg", "jpg", "png");
  if (file_exists($file_name)) {
    echo "Sorry, file already exists.";
  }
  if (in_array($file_ext, $expensions) === false) {
    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
  }

  if ($file_size > 2097152) {
    $errors[] = 'File size must be excately 2 MB';
  }

  if (empty($errors) == true) {
    $path = "uploads/bdonners/profile-picture/" . $newfilename . "." . $file_ext;
    move_uploaded_file($file_tmp, $path);

    $sql = "UPDATE  `registration` SET image = '$path' WHERE id = '$id' ";
    if ($con->query($sql)) {
      $sql = "SELECT * FROM `registration` WHERE id = '$id' LIMIT 1";
      $result = $con->query($sql);
      $_SESSION['user']  = $result->fetch_assoc();
    }
  } else {
    print_r($errors);
  }
}



if (isset($_POST['edit_donor_profile'])) {
  //pr($_POST, true);
  $firstname =  trim($_POST['firstname']);
  $lastname =  trim($_POST['lastname']);
  $blood_group =  trim($_POST['blood_group']);
  $gender = trim($_POST['gender']);
  $age =  trim($_POST['age']);
  $weight =  trim($_POST['weight']);
  $email =  trim($_POST['email']);
  $phone =  trim($_POST['phone']);
  $address =  trim($_POST['address']);
  $division =  trim($_POST['division']);
  $city =  trim($_POST['city']);
  $upazila =  trim($_POST['upazila']);

  $sql = "UPDATE `registration` SET `first_name`='$firstname',`last_name`='$lastname',`blood_group`='$blood_group',`gender`='$gender',`age`='$age',`weight`='$weight',`email`='$email',`phone`='$phone',`address`='$address',`division`='$division',`city`='$city',`upazila`='$upazila'  WHERE `id` ='$id' ";

  if ($con->query($sql) == true) {
    $sql = "SELECT * FROM `registration` WHERE id = '$id' LIMIT 1";
    $result = $con->query($sql);
    $_SESSION['user']  = $result->fetch_assoc();
    // redirect('login.php', 'Information Successfullay Updated. Please login Again to see Save Change');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}

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
          <a class="navbar-brand" href="./index.php"> SaveLife</a>
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
      <section id="main-container-fluid" class="py-4">

        <div class="container profile">
          <div class="picture">
          <?php
        $path = isset($_SESSION['user']['image']) ?  $_SESSION['user']['image'] : 'uploads/profile.png';

        ?>
            <img class="profile-pic" id="pic" src="<?php echo $path ?>" alt="profile Picture">
            
           
          </div>
          <form id="profile_picture_chage_form" action="profile.php" method="POST" enctype="multipart/form-data">
          <div class="profile-pic-btn pt-2">
            <input type="file" style="display: none" id="image" name="image" />
            <label for="image" class="btn change-profile-btn btn-outline-dark">Change Profile picture</label>
          </div>
        </form>


          <div class="propertiys">
            <ul>
              <li>Name : <?php echo getUserSession('first_name') . ' ' . getUserSession('last_name') ?></li>
              <li>Blood Group : <?php echo getUserSession('blood_group')  ?></li>
              <li>Age : <?php echo getUserSession('age')  ?></li>
              <li>Weight : <?php echo getUserSession('weight')  ?></li>
              <li>Phone : <?php echo getUserSession('phone')  ?></li>
              <li>Email : <?php echo getUserSession('email')  ?></li>
              <li>Address : <?php echo getUserSession('address')  ?>, <?php echo getUserSession('upazila')  ?>, <?php echo getUserSession('city')  ?>.</li>
            </ul>
            <button type="submit" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#editDonarInfo">
          Edit Profile
        </button>

        <!-- modal -->
        <div class="modal fade" id="editDonarInfo" tabindex="-1" aria-labelledby="editDonarInfoLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editDonarInfoLabel">Edit Your Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <!-- <--Form in Modal-->


            <form action="./profile.php" method="post">
              <div class="row">
                <div class="col-6">
                  <label for="firstname" class="form-lable">First Name</label>
                  <input type="text" class="form-control" value="<?php echo getUserSession('first_name') ?>" name="firstname" id="firstname" required placeholder="e.g. " />
                </div>
                <div class="col-6">
                  <label for="lastname" class="form-lable">Last Name</label>
                  <input type="text" class="form-control" name="lastname" id="lastName" value=" <?php echo getUserSession('last_name') ?>" required placeholder="e.g. Sparow" />
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label for="blood-group" class="form-lable">Blood Group</label>
                  <select class="form-select" name="blood_group" id="blood-group">
                    <option value="<?php echo getUserSession('blood_group')  ?>" selected><?php echo getUserSession('blood_group')  ?></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select>
                </div>
                <div class="col-6">
                  <label for="gender" class="form-lable">Gender</label>
                  <select class="form-select" name="gender" id="gender">
                    <option value=" <?php echo getUserSession('gender')  ?>"> <?php echo getUserSession('gender')  ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label for="Age" class="form-lable">Age</label>
                  <input type="text" class="form-control" name="age" id="age" value="<?php echo getUserSession('age')  ?>" placeholder="e.g. 20" required />
                </div>
                <div class="col-6">
                  <label for="weight" class="form-lable">Weight</label>
                  <input type="text" class="form-control" name="weight" id="weight" value="<?php echo getUserSession('weight')  ?>" placeholder="e.g. 80" required />
                </div>
              </div>

              <label for="email" class="form-lable">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" value="<?php echo getUserSession('email')  ?>" required placeholder="e.g. captain@emaxple.com" />
              <label for="phone" class="form-lable">Phone</label>
              <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo getUserSession('phone')  ?>" required placeholder="e.g 01555566677" />
              <label for="address" class="form-lable">Address</label>
              <input type="text" class="form-control" name="address" id="address" value="<?php echo getUserSession('address')  ?>" required placeholder="e.g. post office: New P.O" />
              <label for="division" class="form-lable">Devision</label>
              <select class="form-select" name="division" id="division">
                <option value="<?php echo getUserSession('division')  ?>" selected>
                  <?php echo getUserSession('division')  ?>
                </option>
              </select>
              <div class="row">
                <div class="col-6">
                  <label for="city" class="form-lable">City</label>
                  <select class="form-select" name="city" id="city">
                    <option value="<?php echo getUserSession('city')  ?>" selected>
                      <?php echo getUserSession('city')  ?>
                    </option>

                  </select>
                </div>
                <div class="col-6">
                  <label for="upazila" class="form-lable">Upazila</label>
                  <select class="form-select" name="upazila" id="upazila">
                    <option value="<?php echo getUserSession('upazila')  ?>" selected>
                      <?php echo getUserSession('upazila')  ?>
                    </option>
                  </select>
                </div>
              </div>

              <div class="text-center my-3">
                <input type="submit" value="Save" name="edit_donor_profile" class="btn btn-dark">
              </div>
            </form>



          </div>

        </div>
      </div>
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
  <script>
    let img = document.getElementById("image")
    img.addEventListener("change", function() {
      document.getElementById('profile_picture_chage_form').submit()
    })
  </script>
  <script src="./js/main.js"></script>
</body>

</html>