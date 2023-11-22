<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//csrf token implementationd
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if (isset($_POST["send"])) {
    if (!empty($_POST['csrf_token']) && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        if (isset($_POST["send"])) {

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'tengteng8132002@gmail.com';
            $mail->Password = 'zzvmemdazozxzadq';
            $mail->SMTPSecure = 'tls';  // or 'ssl' for port 465
            $mail->Port = 587;  // or 465 for SSL

            $mail->setFrom('tengteng8132002@gmail.com');
            $mail->addAddress($email);
            $mail->isHTML(true);

            $mail->Subject = 'Message from Clinic Harmony';
            $mail->Body = 'Dear ' . $_POST["name"] . ', thank you for inquiring with us!';

            try {
                $mail->send();
                echo "<script>alert('Email sent successfully!');</script>";
            } catch (Exception $e) {
                echo "<script>alert('Email could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>Clinic Harmony</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<style>
    html,
    body {
        overflow-x: hidden
    }

    h1 {
        font-family: Georgia;
        font-size: 45px;
        color: #475993;
        font-weight: bold;
    }

    h2 {
        font-family: Georgia;
        font-size: 30px;
        color: #475993;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    h3 {
        font-family: Georgia;
        font-size: 25px;
        font-weight: bold;
    }

    p {
        font-size: 20px;
        font-family: Garamond;
    }

    body {
        font-size: 20px;
        font-family: Garamond;
        background-image: url("Images/wallpaper1.jpg");
        background-size: auto;
        background-size: contain;
    }

    .line-1 {
        height: 2px;
        background: #475993;
        margin-bottom: 20px;
    }

    .title {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .title2 {
        margin-top: -25px;
    }

    .navbar-nav a:link {
        font-family: Georgia;
        font-size: 22px;
        text-decoration: none;
        text-align: center;
    }

    .navbar-light .navbar-nav .nav-link {
        color: black;
    }

    .navbar-light .navbar-nav .nav-link:visited {
        color: black;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        background-color: #475993;
        color: white;
        border-radius: .5rem;
    }

    @media screen and (min-width: 992px) {
        .navbar-brand img {
            width: 100px;
        }

        .navbar .container-fluid {
            flex-direction: column;
        }

        .navbar .navbar-nav .nav-item {
            padding: .5em 1em;
        }
    }

    .navbar-brand {
        margin-right: 0px;
    }

    footer {
        width: 100%;
        text-align: center;
        background-color: #475993;
        color: white;
        padding: 10px 0px 10px 0px;
    }

    .navbar-toggler {
        border: 0 !important;
    }

    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
        outline: none !important;
        box-shadow: none !important;
        border: 0 !important;
        align-content: right;
    }

    /* Lines of the Toggler */
    .toggler-icon {
        width: 30px;
        height: 3px;
        background-color: #e74c3c;
        display: block;
        transition: all 0.2s;
    }

    /* Adds Space between the lines */
    .middle-bar {
        margin: 5px auto;
    }

    /* State when navbar is opened (START) */
    .navbar-toggler .top-bar {
        transform: rotate(45deg);
        transform-origin: 10% 10%;
    }

    .navbar-toggler .middle-bar {
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .navbar-toggler .bottom-bar {
        transform: rotate(-45deg);
        transform-origin: 10% 90%;
    }

    /* State when navbar is opened (END) */

    /* State when navbar is collapsed (START) */
    .navbar-toggler.collapsed .top-bar {
        transform: rotate(0);
    }

    .navbar-toggler.collapsed .middle-bar {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .navbar-toggler.collapsed .bottom-bar {
        transform: rotate(0);
    }

    /* State when navbar is collapsed (END) */

    /* Color of Toggler when collapsed */
    .navbar-toggler.collapsed .toggler-icon {
        background-color: #777777;
    }

    .mapouter {
        position: relative;
        text-align: right;
        height: 500px;
        width: 660px;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 500px;
        width: 660px;
    }

    input[type=submit] {
        font-family: Georgia;
        font-size: 20px;
        background-color: #475993;
        border: 3px solid #475993;
        color: white;
        padding: 16px 32px;
        text-decoration: bold;
        cursor: pointer;
        margin-bottom: 30px;
        margin-top: 20px;
    }

    input[type=submit]:hover {
        font-family: Georgia;
        font-size: 20px;
        background-color: white;
        border: 3px solid #475993;
        color: #475993;
        padding: 16px 32px;
        text-decoration: bold;
        cursor: pointer;
        margin-bottom: 30px;
        margin-top: 20px;
    }

    .col {
        vertical-align: top;
        line-height: 40px;
    }

    .img {
        width: 100%;
        height: 430px;
        margin-right: 30px;
    }

    /*contact us form*/
    .contact form {
        padding: 20px 200px 50px 200px;
        border-radius: .5rem;
    }

    .contact form .flex {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
    }

    .contact form .flex.inputBox span {
        display: block;
        margin-bottom: 0px;
    }

    .contact form .flex .inputBox input {
        width: 100%;
        padding: 15px 15px 15px 15px;
        border: #475993 solid;
        border-radius: .5rem;
        background: white;
    }

    .contact form .flex .inputBox textarea {
        width: 100%;
        padding: 15px 15px 15px 15px;
        border: #475993 solid;
        border-radius: .5rem;
        font-size: 1.6rem;
        background: white;
    }


    /*mobile size CSS*/
    @media only screen and (max-width: 600px) {
        h1 {
            font-family: Georgia;
            font-size: 33px;
            color: #475993;
            font-weight: bold;
        }

        .title {
            margin-bottom: 10px;
        }

        .title2 {
            margin-top: 25px;
        }

        .mapouter {
            position: relative;
            text-align: right;
            height: 400px;
            width: 320px;
            padding-right: 50px !important;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 400px;
            width: 320px;
            margin-right: 50px !important;
        }

        .navbar-toggler.collapsed .toggler-icon {
            margin-left: 350px;
        }

        .toggler-icon {
            margin-left: 350px;
        }

        .navbar-brand {
            margin-right: 0px;
            width: 50px;
            height: 80px;
        }

        .navbar-brand .title {
            font-size: 30px;
            margin-left: auto;
            margin-right: auto;
        }

        .navbar-nav a:link {
            font-family: Georgia;
            font-size: 22px;
            text-decoration: none;
            text-align: center;
        }

        .navbar-light .navbar-nav .nav-link {
            color: black;
        }

        .navbar-light .navbar-nav .nav-link:visited {
            color: black;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            background-color: #475993;
            color: white;
        }

        .col {
            padding: 0px 55px 30px 55px;
            line-height: 50px;
        }

        .img {
            width: 320px;
            height: 280px;
            margin-right: 30px;
        }

        /*contact us form*/
        .contact form {
            padding: 20px 50px 50px 50px;
            border-radius: .5rem;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="homepage.php"> <img src="Images/Logo.png" width="110" height="100" align="center"></a>
            <h1>Clinic Harmony </h1>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php" style="background-color: #475993; color: white; border-radius: .5rem;">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="line-1"></div>


    <h1 class="title">
        <center>Contact Us</center>
    </h1>

    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <h2>Contact Details</h2>
                <p><b>Clinic harmony is a medical clinic based in Jelutong, Penang.</b></p>
                <h3>&#9743; Contact No </h3> 012-34567890
                <h3><br />&#9993; Email </h3>clinicHarmony@gmail.com
                <h3><br />&#9750; Address</h3> 18, Jalan Putih, 11500 Jelutong, Pulau Pinang
            </div>
            <div class="col">
                <img src="Images/contactUs.jpg" class="img">
            </div>
        </div>

        <div class="row gx-5">
            <div class="col">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="700" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=georgetown&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                </div>
            </div>
            <div class="col">
                <h2>Our Location</h2>
                <a href="#"><img src="Images/waze.png" width="40" height="40" /></a><a href="#"><img src="Images/googleMap.png" width="70" height="40" /></a>
                <br /><br />
                <h3>Our Address </h3>18, Jalan Putih, 11500 Jelutong, Pulau Pinang
                <br /><br />
                <h3>Opening Hours</h3>
                Monday - Friday 09.00a.m. - 08.00p.m.
                <br />Saturday & Sunday 09.00a.m. - 01.00p.m.
                <br />Closed on Public Holiday
            </div>
        </div>
    </div>

    <section class="contact">
        <h1 class="title" align="center">Contact Us</h1>
        <h3 align="center" class="title2">Send us a message now!</h3>
        <form action="contactUs.php" method="post">
            <div class="flex">
                <div class="inputBox" style="flex: 1 1 70rem">
                    <span style="text-align: left;">Your Name : </span>
                    <input type="text" placeholder="Enter Your Name" name="name" required>
                </div>

                <div class="inputBox" style="flex: 1 1 70rem">
                    <span>Your Email : </span>
                    <input type="email" placeholder="Enter Your Email" name="email" required>
                </div>

                <div class="inputBox" style="flex: 1 1 70rem">
                    <span>Subject : </span>
                    <input type="text" placeholder="Enter Subject" name="subject" required>
                </div>

                <div class="inputBox" style="flex: 1 1 70rem">
                    <span>Your Message : </span>
                    <textarea name="message" placeholder="Enter Your Message" required cols="30" rows="7"></textarea>
                </div>

            </div>

            <input type="hidden" name="csrf_token" value="123123">

            <center><input type="submit" value="Send Message" name="send"></center>

        </form>
    </section>

    <footer>

        <P>Address : 18, Jalan Putih, 11500 Jelutong, Pulau Pinang</P>

        <P>Email : clinicharmony@gmail.com</p>

        <p>Phone number : 012-34567890</p>

        <a href="#"><img src="Images/facebookIcon.png" width="40" height="40"></a>
        &nbsp; &nbsp;<a href="#"><img src="Images/instagram.png" width="40" height="40"></a>
        &nbsp;<a href="#"><img src="Images/whatsapp.png" width="42" height="42"></a></td>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>