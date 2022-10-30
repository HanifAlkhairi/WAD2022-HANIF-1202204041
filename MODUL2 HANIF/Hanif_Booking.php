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
            <h2>Rent Your Car Now!!</h2>
        </div>

        <div class="form-booking">
            <form action="Hanif_MyBooking.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Hanif_1202204041" aria-label="Disabled" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label">Book Date</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="mb-3">
                    <label class="form-label">Start Time</label>
                    <input type="time" class="form-control" name="time">
                </div>
                <div class="mb-3">
                    <label class="form-label">Duration (Days)</label>
                    <input type="number" class="form-control" name="duration">
                </div>
                <div class="mb-3">
                <label for="car">Car Type</label> <br>    
                    <select class="form-select" name="car">
                        <option>Toyota Rush</option>
                        <option>Daihatsu Ayla</option>
                        <option>Honda Brio</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone">
                </div>
                <div>
                    <h5 style="font-size: 15px;"> Add Service(s) </h5>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="health" value="Health Protocol">
                    <label class="form-check-label" for="exampleCheck1">Health Protocol / Rp25.000</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="driver" value="Driver">
                    <label class="form-check-label" for="exampleCheck1">Driver / Rp100.000</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="fuel" value="Fuel Filled">
                    <label class="form-check-label" for="exampleCheck1">Fuel Filled / Rp250.000</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="OK" id="book-button" style="margin-top: 10px">Book Now!!</button>
            </form>
        </div>
        
        <div class="footer">
            <h5>©️ Hanif_1202204041</h5>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>