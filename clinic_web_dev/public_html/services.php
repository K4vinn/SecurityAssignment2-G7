<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
        <head>
        <title>Clinic Harmony</title>
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
            margin-top: 30px;
            margin-bottom: 30px;
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
        footer{
            width:100%;
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
        #service{
           margin-bottom: 50px;
        }
        #service h1{
            text-align: center;
            margin-top: 50px;
            margin-bottom: 40px;
        }
        #service h3{
            margin-bottom: 30px;
        }
        .icon1{
           margin-left: 110px;
       }
       .dermatology{
           text-align: center;
           margin-right: 35px;   
       }
       
       /*mobile size CSS*/
       @media only screen and (max-width: 600px) {
            h1{
                font-family: Georgia;
                font-size :33px;
                color: #475993;
                font-weight: bold;
            }
                        .navbar-toggler.collapsed .toggler-icon {
                margin-left: 350px;
            }
            .toggler-icon {
                margin-left: 350px;
            }
            .navbar-brand{
                margin-right: 0px;
                width : 50px;
                height: 80px;
            }
            .navbar-brand .title{
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
            .navbar-light .navbar-nav .nav-link{
                color: black;
            }
            .navbar-light .navbar-nav .nav-link:visited {
                color: black;
            }
            .navbar-light .navbar-nav .nav-link:hover{
                background-color: #475993;
                color: white;
            }
            .image2{
                display: none;
            }
            .col{
                padding: 0px 50px 50px 50px;
            }
            #service h1{
                margin-top: 50px;
                margin-bottom: 40px; 
            }
            h2{
                margin: 20px 30px 30px 30px;
            }
            #service{
                margin: 0px 20px 20px 20px;
            }
            .icon1{
                margin-left: 50px;
            }
            .img{
                width: 350px;
                height: 280px;
                margin-right: 30px;
            }
        }
        
    </style>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="homepage.php"> <img src="Images/Logo.png" width="110" height="100" align="center"></a><h1>Clinic Harmony </h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
                
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="homepage.php" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php" style="background-color: #475993; color: white; border-radius: .5rem;">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php">Contact Us</a>
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
            
            <h1 style="margin-top: 40px; margin-bottom: 40px;"><center>Services</center></h1>
            
            <table width="100%" height="200px">
                <tr>
                    <td><img src="Images/service.jpg" width="600px" height="400" align="right" class="img"></td>
                    <td><img src="Images/service2.jpg" width="600px" height="400" align="left" class="image2"></td>
                </tr>
            </table>
            
            <br/><h2 align="center">Services provided by us are :</h2>
            
        <div id="service">
            
            <div class="container px-4">  
                <div class="row gx-5">
                  <div class="col">
                    <ul>
                        <img src="Images/Dermatology.png" width="100" height="120" style="margin-top: 20px; margin-bottom: 10px;" class="icon1">
                        <li style="display: inline;"><h3 class="dermatology">Dermatology</h3></li>
                        <li>Acne and Allergy</li>
                        <li>Hair Loss Treatment</li>
                        <li>Skin Cancer Check</li>
                        <li>Pigmentation</li>
                        <li>Skin Infection</li>
                        <li>Eczema & Dry Skin</li>
                  </div>
                  <div class="col">
                        <center><br/><img src="Images/Paediatrics.png" width="100" height="90"></center>
                        <br/><li style="display: inline;"><h3 align="center">Paediatrics</h3></li>
                        <li>Children Skin Problem</li>
                        <li>Common Childhood Disease</li>
                        <li>Child Wellness Clinic & Immunization</li>
                  </div>
                  <div class="col">
                        <center><img src="Images/Family Medicine.png" width="150" height="150"></center>
                        <li style="display: inline;"><h3 align="center">Family Medicine</h3></li>
                        <li>Blood Test and Health Screening</li>
                        <li>Blood Pressure and Diabetes</li>
                        <li>Men's Health Problems</li>
                        <li>Injuries and Emergencies</li>
                        <li>Contraception</li>
                        </ul>
                  </div>
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
       
        <script src="script.js"></script>
    </body>
</html>
