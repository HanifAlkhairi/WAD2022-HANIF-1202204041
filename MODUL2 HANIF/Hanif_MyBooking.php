<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD Rent Car</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>

    <!---PHP--->
    <?php
    $date = $_POST['date'];
    $time = $_POST['time'];
    $car = $_POST['car'];
    $duration = $_POST['duration'];
    $phone = $_POST['phone'];
    $health = $_POST['health'];
    $driver = $_POST['driver'];
    $fuel = $_POST['fuel'];

    if ($car == "Toyota Rush") {
        $price = 200000;
    } else {
        $price = 150000;
    }

    if (isset($_POST['health'])) {
        $total += 25000;
    }

    if (isset($_POST['driver'])) {
        $total += 100000;
    }

    if (isset($_POST['fuel'])) {
        $total += 250000;
    }

    $total += $price * $duration;

    ?>

    <!---Navbar--->

    <nav class="navbar bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="logo-ead.png" alt="logo-ead" width="100" height="24">
          </a>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Hanif_Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Hanif_MyBooking.php">Booking</a>
            </li>
          </ul>
        </div>
    </nav>

    <!---Content--->

    <div class="content-container">
        <div class="content">
            <h2>Thankyou Hanif_1202204041 for Reserving</h2>
            <p>Please double check your reservation details</p>
        </div>

        <div class="table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">Duration (days)</th>
                        <th scope="col">Car</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> Hanif_1202204041 </td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $time ?></td>
                        <td><?php echo $duration ?></td>
                        <td><?php echo $car ?></td>
                        <td><?php echo $phone ?></td>
                        <td>
                            <ul>
                                <li><?php echo $health ?></li>
                                <li><?php echo $driver ?></li>
                                <li><?php echo $fuel ?></li>
                            </ul>
                        </td>
                        <td>Rp<?php echo $total ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="footer">
                <h5>©️ Hanif_1202204041</h5>
            </div>

        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
