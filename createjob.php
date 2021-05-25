<?php 
error_reporting(0);
$error = " ";
?> 
<?php
$id = $_POST['id'];
$fullname = $_POST['name'];
$address = $_POST['address'];
$cellphone = $_POST['cellphone'];
$email = $_POST['emailaddress'];
$jr = $_POST['jobrequest'];
$hire = $_POST['hire'];
$startdate = $_POST['startdate'];
$enddate = $_POST['finishdate'];
$hours = $_POST['hours'];
$location = $_POST['location'];

if (isset($_POST['submit'])) {
    $result = "Message sent from: " .$fullname."\n"."\n"."\n".
        "ID" .$id. "\n" .
        "Full name: " .$fullname. "\n" .
        "Email Address: " . $email . "\n" .
        "Address: " . $address . "\n" .
        "CellPhone: " . $cellphone . "\n" .
        "Job Request: " . $jr . "\n" .
        "Start Date: " . $startdate . "\n" .
        "End Date: " . $enddate . "\n" .
        "Hours:" . $hours . "\n" .
        "Location:" . $location . "\n" .
        "Hired Before?" . $hire ."\n";

    mail("contact@gojobone.co" ,'HIRE MESSAGE ARRIVED' , $result, "From:" . $email);
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0">
        <title>jobone</title>
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> <!--googlefonts -->
        <link rel="stylesheet" href="main.css"> <!-- #links css -->
        <link rel="icon" href="img/logo-nobackground.png"> <!-- #icon chrome -->

    </head>
    <script>


    </script>

    <body>

        <div class="contact-box">
            <br>
            <div><h4 class="contactformheader">Hire High School Apply</h4></div>
            <div><h5>Please fill in the form to get in touch with us for further assessment</h5></div>

            <form method="POST">
                <input name="id" type="text" class="input" value="<?php echo $_GET['cid'] ?>" hidden required>

                <input name="name" type="text" class="input" placeholder="Your Full name" required>
                <input name="address" type="text" class="input" placeholder="Your Address name" required>
                <input name="cellphone" type="text" class="input" placeholder="Your Cell Phone" required>
                <input name="emailaddress" type="email" name="email" class="input" placeholder="Your Email" required>
                <input name="jobrequest" type="text" name="jobrequest" class="input" placeholder="Your Job Request" required>
                <input name="startdate" type="text" name="startdate" class="input" placeholder="Your Start Date" required>
                <input name="finishdate" type="text" name="finishdate" class="input" placeholder="Your End Date" required>
                <input name="hours" type="text" name="hours" class="input" placeholder="Hours" required>
                <input name="location" type="text" name="location" class="input" placeholder="Job Location" required>
                <h4>Have you hired from us before?</h4>
                <input name="hire" type="hire"  class="input" placeholder="Please state yes or no" required>
                <br>
                <button  type="submit"  class="btn" name="submit" value="submit">Subnit</button> <br> <br>
                <label id="error" name="error"><?php        error_reporting(0); 
                       echo $error ?></label>
            </form>
            <br>
        </div>

        <footer class="footer">
            <label style="font-family: 'Oswald', sans-serif">Follow us on all of our platforms:</label>
            <br>
            <a href="https://www.instagram.com/joboneinsta/"><img class="instagramlogo" src="img/instagramlogo.png" alt="jobone"></a>
            <a href="#"><img class="facebooklogo" src="img/facebooklogo.png" alt="jobone"></a>
            <a href="https://www.linkedin.com/company/jobone1"><img class="instagramlogo" src="img/linkedin.png" alt="jobone"></a>
            <a href="https://twitter.com/JobOneTweets"><img class="twitterlogo" src="img/twitterlogo.png" alt="jobone"></a>

        </footer>
    </body>
</html>
