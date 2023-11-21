<?php
session_start();

$dbc=mysqli_connect("localhost","root","");
mysqli_select_db($dbc, "clinic_reservation"); 
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>My Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <style>
        html, body {
            overflow-x:hidden 
        } 
         
        h1{
            font-family: Georgia;
            font-size :45px;
            color: #475993;
            font-weight: bold;
        }  
        h2{
            font-family: Georgia;
            font-size :30px;
            color: #475993;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        h3{
            font-family: Georgia;
            font-size :25px;
            font-weight: bold;
        }
        p{
            font-size: 20px;
            font-family: Garamond; 
        }
        body{
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
        .title{
            margin-top: 40px;
            margin-bottom: 10px;
        }
        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
        }

        /*content CSS*/
        .container{
            padding: 10px 100px 150px 100px;
        }
        .col{
            height: 450px;
            line-height: 40px;
        }
        .col img{
            width: 250px;
            height: 250px;
            border-radius: 50%;
        }
        .word1{
            color: #475993;
            font-weight: bold;
        }
        .word2{
            font-weight: normal;
            color: black;
        }
       
         /*mobile size CSS*/
       @media only screen and (max-width: 600px) {
            h1{
                font-family: Georgia;
                font-size :33px;
                color: #475993;
                font-weight: bold;    
            }
            .title{
                margin-bottom: 10px;
            }
            .container{
                padding: 0px 30px 250px 20px;
            }
            .col{
                height: 400px;
                line-height: 40px;
            }
        }
        .navbar-nav a:link {
            font-family: Georgia;
            font-size: 22px;
            text-decoration: none;
            text-align: center;
        }
        .navbar-light .navbar-nav .nav-link{
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:visited {
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:hover{
            background-color: #475993;
            color: white;
            border-radius: .5rem;
        }
        @media screen and (min-width: 992px){
            .navbar-brand img{
                width: 100px;
            }
            .navbar .container-fluid{
                flex-direction: column;
            }
            .navbar .navbar-nav .nav-item{
                padding: .5em 1em;
            }
        }
        .navbar-brand{
            margin-right: 0px;
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
       .toggler-icon{
           width: 30px;
           height: 3px;
           background-color: #e74c3c;
           display: block;
           transition: all 0.2s;
       }

       /* Adds Space between the lines */
       .middle-bar{
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

        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
        }
        form{
            padding-top: 20px;
            padding-bottom: 20px;
        }
       
       
         /*mobile size CSS*/
        @media only screen and (max-width: 600px) {
                h1{
                    font-family: Georgia;
                    font-size :33px;
                    color: #475993;
                    font-weight: bold;    
                }
                .title{
                    margin-bottom: 10px;
                }
        }
        
        </style>
        
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <div class="container-fluid">
                        <a class="navbar-brand" href="homepage.php"> <img src="Images/Logo.png" width="110" height="100" align="center"></a><h1 class="title">Clinic Harmony </h1>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon top-bar"></span>
                            <span class="toggler-icon middle-bar"></span>
                            <span class="toggler-icon bottom-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="timetable_doctor.php">Appointment Schedule</a>
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
                   
            <div class="line-1"></div>'

        <h1 class="title"><center>My Profile</center></h1>
            
            
            <div class="container">
                <div class="row justify-content-md-center">
                                           
                    <div class="col col-md-3" style="background-color: white;">
                        <span class="word1" ><p style="margin-top: 30px;">Name :  </span>
                        <span class="word1" ><p>Username  :  </span>
                        <span class="word1"><p>Gender  :  </span>
                        <span class="word1"><p>Date of Birth :  </span>
                        <span class="word1"><p>Phone Number  : </span>
                        <span class="word1"><p> E-mail :  </span>
                        <span class="word1"><p>Address :  </span>
                        <span class="word1"><p>ZIP or Postal Code :  </span>
                        <span class="word1"><p>City :  </span>
                        <span class="word1"><p>State :  </span>
                    </div>
                        
                    <div class="col col-md-6" style="background-color: white;">
                        
                        <?php
                            $email = $_SESSION['identifier'];
                                                                      
                            $query1 = "SELECT * FROM doctor_table WHERE doctor_email= ? ";
                            $stmt1 = mysqli_prepare($dbc, $query1);
                            mysqli_stmt_bind_param($stmt1,"s",$email); 

                            mysqli_stmt_execute($stmt1);
                            $result1 = mysqli_stmt_get_result($stmt1);

                            if(mysqli_num_rows($result1) > 0){
                                while($row1 = mysqli_fetch_assoc($result1)){

                                    echo'<span class="word2"><p style="margin-top: 30px;">' . $row1['doctor_name'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_id'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_gender'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_dob'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_phoneNo'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_email'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_address'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_zip'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_city'] . '</p></span>' .
                                        '<span class="word2">' . $row1['doctor_state'] . '</p></span>';
                                } 
                            }
                        ?> 
                    </div>

                </div>
            </div>
        
        
         <footer>
            
            <P>Address : 18, Jalan Putih, 11500 Jelutong, Pulau Pinang</P>

            <P>Email : clinicharmony@gmail.com</p>

            <p>Phone number : 012-34567890</p>

            <a href="#"><img src="Images/facebookIcon.png" width="40" height="40"></a>
            &nbsp; &nbsp;<a href="#"><img src="Images/instagram.png" width="40" height="40"></a>
            &nbsp;<a href="#"><img src="Images/whatsapp.png" width="42" height="42"></a></td>

        </footer>
        
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>    
    </body>
</html>
