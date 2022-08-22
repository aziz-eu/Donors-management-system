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
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="/"> SaveLife</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span
                ><i
                  class="fa fa-bars nav-responsive-icon"
                  aria-hidden="true"
                ></i
              ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="request.php">Request Blood</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registration.php"
                    >Donor Registration</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
              </ul>
              <div class="text-sm-center">
                <a href="login.php"
                  ><button type="button" class="btn btn-outline-light ms-5">
                    <b>Login</b>
                  </button></a
                >
              </div>
            </div>
          </div>
        </nav>
      </header>
      <main class="non-root">
        <div id="donor-reg">
          <div class="container-lg">
            <div class="text-center pt-5">
              <h2 class="text-white font-weight-bolder">Blood Request Form</h2>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-lg-6 mb-5 form-content py-2">
                <form>
                  <label for="patient-name" class="form-lable"
                    >Patient Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="fristname"
                    id="fristName"
                    required
                    placeholder="e.g. Jack Sparow"
                  />
                  <label for="blood-group" class="form-lable"
                    >Blood Group</label
                  >
                  <select
                    class="form-select"
                    name="blood-group"
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
                  <label for="required-unit" class="form-lable"
                    >Required Unit</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="required-unit"
                    id="required-unit"
                    required
                    placeholder="e.g. 3"
                  />
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
                  <label for="hospital-name" class="form-lable"
                    >Hospital Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="hospital-name"
                    id="hospital-name"
                    placeholder="e.g. Labaid Hospital "
                    required
                  />
                  <label for="address" class="form-lable"
                    >Hospital Address</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="address"
                    id="address"
                    required
                    placeholder="e.g. Dhanmondi, Road-04 "
                  />
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
                  <label for="thana" class="form-lable">Upazila</label>
                  <select class="form-select" name="thana" id="thana">
                    <option value="select-message" selected>
                      Plese Select Your City
                    </option>
                    <option value="noakhali">Sadar</option>
                    <option value="dhaka">Senbag</option>
                    <option value="cumilla">Kobirahat</option>
                    <option value="bola">Suborno Chor</option>
                  </select>
                  <label for="contact-person-name" class="form-lable"
                    >Contact Person Name:</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="fristname"
                    id="fristName"
                    required
                    placeholder="e.g.Elizabeth Swann"
                  />
                  <label for="phone" class="form-lable"
                    >Contact Person Phone:</label
                  >
                  <input
                    type="tel"
                    class="form-control"
                    name="phone"
                    id="phone"
                    required
                    placeholder="e.g 01555566677"
                  />
                  <label for="patient-info" class="form-lable"
                    >Patient History</label
                  >
                  <textarea
                    name="patient-info"
                    class="form-control"
                    id=""
                    cols="30"
                    rows="5"
                    placeholder="why need blood?"
                  ></textarea>
                  <div class="text-center my-3">
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer>
        <div class="footer-container bg-dark">
          <div class="row footer-content">
            <div
              class="col-lg-6 col-md-12 text-lg-start text-md-center text-sm-center"
            >
              <div>
                <p class="text-white footer-title">
                  SaveLife | &copy;Copyright2022
                </p>
              </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
              <div
                class="social-icon d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center align-items-lg-center"
              >
                <i class="fa-brands fa-facebook fb-icon fa-2x"></i>
                <a href="https://facebook.com"
                  ><i class="fa-brands fa-youtube youtube-icon fa-2x"></i
                ></a>
                <i class="fa-brands fa-twitter twitter-icon fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
