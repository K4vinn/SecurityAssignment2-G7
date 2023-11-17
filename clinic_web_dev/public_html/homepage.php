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
        .carousel-inner{
            width:75%;
            height: 450px;
            margin-left: auto;
            margin-right: auto;
        }
        .carousel-caption{
            margin-bottom: 370px;
        }
        .carousel-caption h3{
            margin-bottom: 20px;
        }
        .btn{
            margin-top: 70px;
            width:400px;
            height: 60px;
            font-family: Georgia; 
            font-size: 20px;
        }
        .btn:hover{
            background-color: #475993;;
            border: none;       
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon{
            background-color:#475993; 
            width:40px; 
            height: 40px;
        }
        #services{
           margin-bottom: 20px;
        }
        #services h1{
             text-align: center;
            margin-top: 50px;
            margin-bottom: 40px;
        }
        #services td{
            padding-left: 20px;
            border : 1px solid black;
            width: 33%;
            background-color: white;
            line-height: 30px;
        }
        #aboutUs{
            padding: 20px 50px 20px 50px;
            text-align: justify;
            line-height: 40px;
            vertical-align: top;
        }
        #aboutUs h1{
            text-align: center;
            margin-bottom: 40px;
        }
        .mapouter{
            position:relative;
            text-align:right;
            height:500px;
            width:700px;
        }
        .gmap_canvas{
            overflow:hidden;
            background:none !important;
            height:500px;
            width:700px;
        }
        #contact{
            padding: 20px 100px 20px 100px;
            line-height: 30px;   
            vertical-align: top;
        }
        #contact h1{
            margin-bottom: 50px;
            text-align: left;
        }
        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
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
       .col{
            border: 2px solid #475993;
            padding: 0px 30px 0px 30px;
            padding-bottom: 30px;
            margin-left : 10px;
       }
       .icon1{
           margin-left: 110px;
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
            #services h1{
                margin-top: 30px;
                margin-bottom: 40px;
            }
            #services{
                margin: 0px 50px 50px 50px;
            }
            .icon1{
                margin-left: 20px;
            }
            #aboutUs{
                text-align: justify;
                line-height: 40px;
                padding: 0px 0px 0px 0px;             
            } 
            #aboutUs h1{
                margin-top: 50px;
            }
            #aboutUs img{
                width: 280px;
                height: 300px;
                margin-left: auto;
                margin-right: auto;
            }
            #contact{
                padding: 0px 0px 0px 0px;
                line-height: 30px;   
            }
            #contact h1{
                text-align: center;
                margin-top: 50px;
            }
            .col{
                padding: 0px 50px 50px 50px;
            }
            /*carousel*/
            .carousel-inner{
                width:90%;
                height: 300px;
                margin-left: auto;
                margin-right: auto;
            }
            .d-block{
                width:100%;
                height: 300px;
            }
            .carousel-caption{
                margin-bottom: 0px;
            }
            .carousel-caption h1{
                font-size: 30px;
            }
            .carousel-caption h3{
                margin-top: 100px;
                font-size: 18px;
            }
            .btn{
                margin-top: 20px;
                margin-bottom: 10px;
                width:250px;
                height: 50px;
                font-family: Georgia; 
                font-size: 15px;
            }
            .btn:hover{
                background-color: #475993;;
                border: none;       
            }
            .carousel-control-prev-icon,
            .carousel-control-next-icon{
                background-color:#475993; 
                width:30px; 
                height: 30px;
                
            }
            
            .mapouter{
                position: relative;
                text-align:right;
                height:400px;
                width:320px;
            }
            .gmap_canvas{
                overflow:hidden;
                background:none !important;
                margin-left: auto;
                margin-right: auto;
                height:400px;
                width:320px;
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
                            <a class="nav-link" aria-current="page" href="homepage.php" style="background-color: #475993; color: white; border-radius: .5rem;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
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
        
        <div id="mm" class="carousel carousel " class="carousel carousel-dark slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
                
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="Images/slide.jpg" class="d-block w-100" alt="court1" style="filter: brightness(75%);">
                    <div class="carousel-caption">
                        <h3 style="color: white;">Medical services that you can trust. </h3>
                        <h1 style="color: #FFFF8F;">Welcome to Clinic Harmony</h1>
                        <button type="button" class="btn btn-danger"><a href="login.php" style="text-decoration:none;color: white;">BOOK AN APPOINTMENT NOW</a></button>
                   </div>
                </div>
                
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="Images/slide2.jpg" class="d-block w-100" alt="court2" style="filter: brightness(70%);">
                    <div class="carousel-caption">
                        <h3 style="color: white;">Medical services that you can trust. </h3>
                        <h1 style="color: #FFFF8F">Welcome to Clinic Harmony</h1>
                        <button type="button" class="btn btn-danger"><a href="login.php" style="text-decoration:none;color: white;">BOOK AN APPOINTMENT NOW</a></button>
                    </div>
                </div>
                  
                <div class="carousel-item">
                    <img src="Images/slide3.jpg" class="d-block w-100" alt="court3" style="filter: brightness(65%);">
                    <div class="carousel-caption">
                        <h3 style="color: white;">Medical services that you can trust. </h3>
                        <h1 style="color: #FFFF8F;">Join Us As A Member Now! </h1>
                         <button type="button" class="btn btn-danger"><a href="register.php" style="text-decoration:none;color: white;">REGISTER</a></button>
                    </div>
                </div>
                
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#mm" data-bs-slide="prev" style="width: 30%;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
                
            <button class="carousel-control-next" type="button" data-bs-target="#mm" data-bs-slide="next" style="width: 30%;">
                <span class="carousel-control-next-icon" aria-hidden="true" ></span>
                <span class="visually-hidden"></span>
            </button>
            
        </div>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div id="services">
            
            <h1>Our services</h1>

            <div class="container px-4">  
                <div class="row gx-5">
                  <div class="col">
                    <ul>
                        <img src="Images/Dermatology.png" width="100" height="120" style="margin-top: 20px; margin-bottom: 10px;" class="icon1">
                        <li style="display: inline;" class="dermatology"><h3 align="center">Dermatology</h3></li>
                        <li>Acne and Allergy</li>
                        <li>Hair Loss Treatment</li>
                  </div>
                  <div class="col">
                        <center><br/><img src="Images/Paediatrics.png" width="100" height="90"></center>
                        <br/><li style="display: inline;"><h3 align="center">Paediatrics</h3></li>
                        <li>Children Skin Problem</li>
                        <li>Common Childhood Disease</li>
                  </div>
                  <div class="col">
                        <center><img src="Images/Family Medicine.png" width="150" height="150"></center>
                        <li style="display: inline;"><h3 align="center">Family Medicine</h3></li>
                        <li>Blood Test and Health Screening</li>
                        <li>Blood Pressure and Diabetes</li>
                        </ul>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="line-1" style="margin-top: 70px;"></div>
    
        <div id="aboutUs">
            <h1>About Us</h1>
            
                <div class="container px-4"> 
                    <div class="row" >
                      <div class="col" style="border: 0px solid;">
                          <img src="Images/aboutUs.jpg"  height="550" width="100%" class="img">
                      </div>
                      <div class="col" style=" border: 0px solid;">
                            Welcome to CLINIC HARMONY, is a medical clinic that provides medical assistance to the patients that need medical attention. We are aim to 
                            provide urgent medical attention to patient and the services offered by us are affortable and valueable. Plus, our clinic has experienced medical
                            staff on board which are doctors, nurses and others. They are responsible to their own job and provide the exceptional primary car services to 
                            all the patients. The services provided by us are : 

                        <br/><ul>
                                <li>Dermatology</li>
                                <li>Paediatrics</li>
                                <li>Family Medicine</li>
                            </ul>
                      </div>
                    </div>
                </div>
        </div>

        <div class="line-1"></div>
        
        <div id="contact">
           
                <div class="row">
                    <div class="col" style=" border: 0px solid;">
                      <h1>Contact Us</h1>
                            <h3>Contact Number</h3>
                            <p>012-34567890</p>

                            <br/><h3>Operation Time</h3>
                            <p>Monday - Friday 09.00a.m. - 08.00p.m.
                            <br/>Saturday & Sunday 09.00a.m. - 01.00p.m.
                            <br/>Closed on Public Holiday</p>

                            <br/><h3>Address</h3>
                            <p>18, Jalan Putih, 11500 Jelutong, Pulau  Pinang</p>
                    </div>

                    
                        <div class="col" style=" border: 0px solid;">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="700" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=georgetown&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
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
