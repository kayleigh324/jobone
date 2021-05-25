<?php
include'include/functions.php';
include'include/connection.php';
$error = " ";

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$address = $_POST['inputAddress'] . " " . $_POST['inputAddress2'] .  " " .  $_POST['inputCity'] .  " " . $_POST['inputState'] . " " .  $_POST['inputZip'];
$cellphone = $_POST['cellphone'];
$jobrequest = $_POST['jobrequest'];
$hired = $_POST['hire'];


    if (isset($_POST['submit'])) {
        $stmt = $database->prepare("INSERT INTO hireteens (firstname, surname, address, cellphone, jobrequest, hired) 
			VALUES (?, ? ,?, ?, ?, ?)");
        $stmt->bind_param('ssssss', $firstname, $surname, $address, $cellphone, $jobrequest, $hired);
        $stmt->execute();           
        $error = "success"; 

    }
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jobone</title>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> <!--googlefonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css"> <!-- #links css -->
        <link rel="icon" href="img/logo-nobackground.png"> <!-- #icon chrome -->
    </head>
    <body>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0">

        <nav id="mainNavbar" class="navbar navbar-dark bg-dark navbar-expand-md py-0 fixed-top">
            <a href="index.php" class="navbar-brand">
                <img  class="navLogo"src="img/logo-nobackground.png" style="max-width:60px; max-height:60px">
            </a>
            <!--<a href="main.php">
<img class="icons" src="img/logo-nobackground.png" alt="jobone">
</a>-->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="teensapply.php" class="nav-link">TEENS:APPLY</a>
                    </li>
                    <li class="nav-item">
                        <a href="hireteens.php" class="nav-link">HIRE:TEENS</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">REGISTER</a>
                    </li>
                </ul>
            </div>
        </nav>

        <img class="jobone" src="img/newbanner.jpg" alt="jobone">

        <section class="container-fluid">
            <section class="row justify-content-center">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-sm-6 col-md-6">
                            <label for="inputName">First Name</label>
                            <input name="firstname" type="text" id="firstname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSurname">Surname</label>
                            <input name="surname" type="text" id="surname" class="form-control" placeholder="Surname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input  name="inputAddress"  type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input  name="inputAddress2"  type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input   id="inputCity" type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select  id="inputState" id="inputState" class="form-control">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input name="inputZip" type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCell">Cell Number</label>
                        <input name="cellphone" type="number" class="form-control" placeholder="Your Cell Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="inputJobRequest">Your Job Request</label>
                        <input name="jobrequest" type="text" name="jobrequest" class="form-control" placeholder="Your Job Request" required>           
                    </div>
                    <div class="form-group">
                        <label for="inputHiredBefore">Have you hired from us before?</label>
                        <input name="hire" type="hire"  class="form-control" placeholder="Please state yes or no" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Submit</button>
                    <label id="error" name="error" class="font"><?php        error_reporting(0); 
                        echo $error ?></label>
                </form>
            </section>
        </section>
        <br>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            footer {
                bottom: 0;
                left: 0;
                right: 0; #positions to the botttom
                box-sizing: border-box;
                text-transform: uppercase;
                text-align: center;
            }
            .fa {
                bottom: 0;
                left: 0;
                right: 0; #positions to the botttom
                padding: 10px;
                font-size: 30px;
                width: 30px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 50%;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-twitter {
                background: #55ACEE;
                color: white;
            }


            .fa-linkedin {
                background: #007bb5;
                color: white;
            }

            .fa-instagram {
                background: #125688;
                color: white;
            }
        </style>
        <footer class="navbar navbar-dark bg-dark navbar-expand-md py-0 bottom align-items">
            <a href="https://twitter.com/JobOneTweets" class="fa fa-twitter"></a>
            <a href="https://www.linkedin.com/company/jobone1" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/joboneinsta/" class="fa fa-instagram"></a>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>