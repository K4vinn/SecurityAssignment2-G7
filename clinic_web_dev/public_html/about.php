<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Clinic Harmony</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        #aboutUs{
            padding: 30px 70px 10px 70px;
            text-align: justify;
            line-height: 30px;
        }
        #aboutUs_part2{
            padding: 0px 70px 30px 70px;
            text-align: justify;
            line-height: 30px;
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
            #aboutUs{
                line-height: 40px;
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
                            <a class="nav-link " aria-current="page" href="homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="background-color: #475993; color: white; border-radius: .5rem;">About Us</a>
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
        
        <h1 align="center" style="margin-top: 40px; margin-bottom: 40px;" >About Us</h1>
            
            <table width="100%" height="200px">
                <tr>
                    <td><img src="Images/AboutUs.jpg" width="600px" height="400" align="right" class="img"></td>
                    <td><img src="Images/AboutUs2.jpg" width="600px" height="400" align="left" class="image2"></td>
            </table>
  
        <div id="aboutUs">
            <h2>Why choose Clinic Harmony? </h2>
            <p>We are a medical clinic that provides medical assistance to the patients that need medical attention. 
                We are aim to provide urgent medical attention to patient and the services offered by us are affortable and valueable. Plus, 
                our clinic has experienced medical staff on board which are doctors, nurses and others. They are responsible to their own job
                 and provide the exceptional primary car services to all the patients. The services provided by us are </p>
            <br/>
        </div>
        
        <div class="line-1"></div>
        
        <div id="aboutUs_part2">
            
            <h2>Frequently Asked Questions ( FAQ ) </h2>
            
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <b>1. What are the clinic’s operating hours?</b>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" >
                      <div class="accordion-body">
                          Monday - Friday 09.00a.m. - 08.00p.m.
                          <br/> Saturday & Sunday 09.00a.m. - 01.00p.m.
                          <br/> Closed on Public Holiday 
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <b>2. What are the services that we offer? </b>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" >
                    <div class="accordion-body">
                        <ul>
                            <li>Dermatology</li>
                            <li>Acne and Allergy</li>
                            <li>Hair Loss Treatment</li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <b>3. What is considered an emergency?</b>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" >
                    <div class="accordion-body">
                        If anyone is unconscious, not breathing, convulsing; or if it involves babies/children with fever of more than 38.5 degrees constitute an emergency, 
                        and should be referred directly to the emergency department. 
                    </div>
                  </div>
                    
                </div>
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <b>4. Can I phone directly to make an appointment?</b>
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" >
                    <div class="accordion-body">
                        Yes, you can phone our main line at 04-9876543 to speak to a Receptionist to make your appointment. Please understand that phones 
                        are very busy and your time on hold will vary depending on call volumes at any given time. For a more convenient method please use our Online Booking option 
                        available on our website. It is very user-friendly and will provide you with confirmation of your appointment.
                    </div>
                  </div>
                    
                </div>
                
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <b>5. What is the rescheduling / cancellation policy?</b>
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" >
                    <div class="accordion-body">
                        Appointments are made with the clinic online, based on the service provider’s availability. Should you would like to reschedule/cancel your session, you may do so by clicking on the 
                        Reschedule / Cancellation features on our online booking website. You will need to make the changes to the scheduled appointment at least 3-hours before.
                    </div>
                  </div>
                    
                </div>
              </div>
            
        </div>
        
         <footer>
            
            <P>Address : 18, Jalan Putih, 11500 Jelutong, Pulau Pinang</P>

            <P>Email : clinicharmony@gmail.com</p>

            <p>Phone number : 012-34567890</p>

            <a href="#"><img src="Images/facebookIcon.png" width="40" height="40"></a>
            &nbsp; &nbsp; <a href="#"><img src="Images/instagram.png" width="40" height="40"></a>
            &nbsp; &nbsp;<a href="#"><img src="Images/whatsapp.png" width="42" height="42"></a></td>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>    
        
    </body>
</html>
