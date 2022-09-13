<?php
include_once 'includes/function.php';
include_once 'includes/session_admin.php';
include_once 'config/db.php';
guard('login.php', 'You must login first');

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $sql = "DELETE FROM `registration` WHERE `id` = '$id'";
  // $result = mysqli_query($conn, $sql);
  if ($con->query($sql) == true) {
    //   $sql = "SELECT * FROM `blood_bank` WHERE id = '$id' LIMIT 1";
    //   $result = $con->query($sql);
    //   $_SESSION['user']  = $result->fetch_assoc();
    redirect('donors_info.php', 'Successfullay Deleted.');
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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
                <a class="nav-link" href="donors_info.php">Donors Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="request_info.php">Request Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_dashboard.php">Dashboard </a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-outline-light" href="logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>
    <main>
      <section id="main-container-fluid">
        <?php include_once 'partials/msg.php' ?>
        <?php
        $user = $_SESSION['user'];

        $sql = "SELECT * FROM registration ORDER BY id DESC LIMIT 20";
        $results = $con->query($sql);
        // var_dump($results);
        ?>
        <div class="dashboard mt-3">
          <table class="table table-striped table-dark pt-4" id="myTable">
            <h3 class="py-3">Donors Info:</h3>
            <thead>
              <tr>
                <th scope="col">Sl no</th>
                <th scope="col">Name</th>
                <th scope="col">Blood Group</th>
                <th scope="col">email</th>
                <th scope="col">Phone</th>
                <th scope="col">District</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
              while ($row = $results->fetch_assoc()) :
                $i = $i + 1;
              ?>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <th scope="row"><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></th>
                  <th scope="row"><?php echo $row['blood_group'] ?></th>
                  <th scope="row"><?php echo $row['email'] ?></th>
                  <th scope="row"><?php echo $row['phone'] ?></th>
                  <th scope="row"><?php echo $row['city'] ?></th>
                  <td>

                    <button class='delete btn btn-sm btn-danger' id="<?php echo $row['id'] ?>">Delete</button>
                  </td>
                </tr>

              <?php endwhile; ?>
            </tbody>
          </table>

          <?php
          while ($row = $results->fetch_assoc()) {
            // pr($row);
            echo "<tr>";
            echo "<td> " . $row['patient_name'] . " </td>";
            echo "<td> " . $row['blood_group'] . " </td>";
            echo "<td> " . $row['contact_number'] . " </td>";
            echo "<td> " . $row['city'] . " </td>";
            echo "</tr>";
          }

          ?>
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
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <script>
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        let delId = e.target.id;
        console.log(delId)

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `donors_info.php?delete=${delId}`;

        } else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>