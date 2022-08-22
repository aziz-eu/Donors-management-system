<?php 
include_once 'includes/function.php';
include_once 'includes/session.php';
include_once 'config/db.php';


if(isset($_POST['regForm'])){
    $fristname =  trim($_POST['fristname']);
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
    $username = trim( $_POST['username']);
    $password =  md5(trim($_POST['password']));

    $sql = "INSERT INTO registration (first_name, last_name, blood_group, gender, age, weight, email, phone, address, division, city, upazila, username, password) VALUES('$fristname', '$lastname', '$blood_group', '$gender', '$age', '$weight', '$email', '$phone', '$address', '$division', '$city', '$upazila', '$username', '$password' )";

    if($con->query($sql) == true  ){
      redirect('login.php', 'Registraion successfully');
    }
    else{
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" href="icon-x.svg" type="image/x-icon" />
    <title>SaveLife</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="utils.css" />
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container-fluid">
      <header>
        <?php include_once 'partials/navbar.php' ?>
      </header>
      <main class="non-root">
        <div id="donor-reg">
          <div class="container-lg">
            <div class="text-center pt-5">
              <h2 class="text-white font-weight-bolder">
                Donar Registration Form
              </h2>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-lg-6 mb-5 form-content py-2">
                <form action="registration.php" method="post">
                  <label for="fristname" class="form-lable">Frist Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="fristname"
                    id="fristName"
                    required
                    placeholder="e.g. Jack"
                  />
                  <label for="lastname" class="form-lable">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="lastname"
                    id="lastName"
                    required
                    placeholder="e.g. Sparow"
                  />
                  <label for="blood-group" class="form-lable"
                    >Blood Group</label
                  >
                  <select
                    class="form-select"
                    name="blood_group"
                    id="blood-group"
                  >
                    <option value="A-Positive" selected>A+</option>
                    <option value="A-Neagtive">A-</option>
                    <option value="B-Positive">B+</option>
                    <option value="B-Neagtive">B-</option>
                    <option value="AB-Positive">AB+</option>
                    <option value="AB-Neagtive">AB-</option>
                    <option value="O-Positive">O+</option>
                    <option value="O-Neagtive">O-</option>
                  </select>
                  <label for="gender" class="form-lable">Gender</label>
                  <select class="form-select" name="gender" id="gender">
                    <option value="male" selected>Male</option>
                    <option value="flmale">Female</option>
                    <option value="other">Other</option>
                  </select>
                  <label for="Age" class="form-lable">Age</label>
                  <input
                    type="text"
                    class="form-control"
                    name="age"
                    id="age"
                    placeholder="e.g. 20"
                    required
                  />
                  <label for="weight" class="form-lable">Weight</label>
                  <input
                    type="text"
                    class="form-control"
                    name="weight"
                    id="weight"
                    placeholder="e.g. 80"
                    required
                  />
                  <label for="email" class="form-lable">E-mail</label>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    required
                    placeholder="e.g. captain@emaxple.com"
                  />
                  <label for="phone" class="form-lable">Phone</label>
                  <input
                    type="tel"
                    class="form-control"
                    name="phone"
                    id="phone"
                    required
                    placeholder="e.g 01555566677"
                  />
                  <label for="address" class="form-lable">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    name="address"
                    id="address"
                    required
                    placeholder="e.g. post office: New P.O"
                  />
                  
                  <label for="division" class="form-lable">Division</label>
                  <select class="form-select" name="division" id="division">
                    <option value="select-message" selected>
                      Plese Select Your Division
                    </option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barishal">Barishal</option>
                  </select>

                  <label for="city" class="form-lable">City</label>
                  <select class="form-select" name="city" id="city">
                    <option value="select-message" selected>
                      Plese Select Your City
                    </option>
                    <option value="noakhali">Noakhali</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="cumilla">Cumilla</option>
                    <option value="bola">Bola</option>
                  </select>
                  <label for="upazila" class="form-lable">Upazila</label>
                  <select class="form-select" name="upazila" id="upazila">
                    <option value="select-message" selected>
                      Plese Select Your Upazila
                    </option>
                    <option value="noakhali">Sadar</option>
                    <option value="dhaka">Senbag</option>
                    <option value="cumilla">Kobirahat</option>
                    <option value="bola">Suborno Chor</option>
                  </select>
                  <label for="user-name" class="form-lable"
                    >Set Your UserName:</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                    id="user-Name"
                    required
                    placeholder="e.g. jack2022"
                  />
                  <label for="password" class="form-lable"
                    >Set Your Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="Your password"
                    required
                  />
                  <div class="text-center my-3">
                    <input  type="submit" class="btn btn-dark" value="Submit" name="regForm">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer>
        <?php include_once 'partials/footer.php' ?>
      </footer>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
