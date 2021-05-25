<?php
include'include/functions.php';
include'include/connection.php';
$error = " ";

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    $stmt = $database->prepare("SELECT * FROM login");
    $stmt->execute();

    $result = $stmt->get_result();

    do{
        $row1 = $result->fetch_assoc();
        if($row1['username'] == $username && $row1['password'] == $password)
        { 
            $error = "success" . $row1['username'] . $username ;
        } else { 
            $error = "error". $row1['username'] . $username;
        }
    }
    while ($row = $result->fetch_assoc());
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>jobone</title>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!--googlefonts -->
        <link rel="stylesheet" href="main.css"> <!-- #links css -->
        <link rel="icon" href="img/jobonelogo.png"> <!-- #icon chrome -->
    </head>
    <script>


    </script>

    <body>
        <form method="POST">
            <br>
            <br>
            <style>
                .center {
                    margin: auto;
                    width: 50%;
                    border: 4px solid transparent;
                    padding: 10px;
                }
                .form {
                    width: 350px;
                    box-sizing: border-box;
                }
            </style>
            <div class="form-col align-items-center center">
                <div class="col-auto my-1 form">
                    <label for="exampleDropdownFormEmail1">Email address</label>
                    <input name="username" type="text" id="username"  class="form-control" placeholder="Your Username" required>
                </div>
                <div class="col-auto my-1 form">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input name="password" type="password" id="password"  class="form-control" placeholder="Your Password" required>
                </div>
                <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Remember my details</label>
                    </div>
                </div>
                <div class="col-auto my-1">
                    <button  type="submit"  class="btn btn-primary" name="submit" value="submit">Submit</button> <br> <br>
                    <label id="error" name="error"><?php        error_reporting(0); 
                        echo $error ?></label>
                </div>
            </div>
        </form>

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
        <footer class="navbar navbar-dark bg-dark navbar-expand-md py-0 fixed-bottom align-items">
            <a href="https://twitter.com/JobOneTweets" class="fa fa-twitter"></a>
            <a href="https://www.linkedin.com/company/jobone1" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/joboneinsta/" class="fa fa-instagram"></a>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
