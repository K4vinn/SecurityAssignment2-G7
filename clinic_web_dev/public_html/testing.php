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
       .col{
           vertical-align: top;
           line-height: 40px;
       }
       .img{
            width: 100%;
            height: 430px;
            margin-right: 30px;
        }
        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
        }
        
        /*login form*/
        form{
            padding: 0px 200px 0px 200px;
        }
        .form-label{
            margin-top: 30px;
            font-weight: bold;
        }
       
        .btn {
            font-family: Georgia;
            font-size: 20px;
            background-color: #475993;
            border: 3px solid #475993;
            color: white;
            padding: 15px 100px 15px 100px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 30px;
            margin-top: 30px;
        }
        .btn:hover{
            font-family: Georgia;
            font-size: 20px;
            background-color: white;
            border: 3px solid #475993;
            color: #475993;
            padding: 15px 100px 15px 100px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 30px;
            margin-top: 30px;
       }
       .form-control{
            border-radius: .5rem;
            border:#33485d solid;
            padding : 15px 15px 15px 15px;
       }
       ::placeholder{
            font-size: 20px;
            font-family: Garamond; 
       }
       
       /*register button*/
       #register p{
           text-align: center;
        }
        #register a:link {
            display:inline-block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            background-color: #e6f6ff; 
            border: 2px solid #475993;
            border-radius: .5rem;
            text-align: center;
            padding: 15px 15px 15px 15px;
            align-content: center;
            font-family: Georgia;
            font-size: 20px;
            text-decoration: none;
            color: #475993;
            font-family: Georgia;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
        }
        #register a:hover{
            color: white;
            background-color: #475993;
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
            .col{
                padding: 0px 55px 30px 55px;
                line-height: 50px;
            }
            .img{
                width: 320px;
                height: 280px;
                margin-right: 30px;
            }
            form{
                padding: 0px 20px 0px 20px;
            }
        
    </style>
    
    <body>       
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="homepage.html"> <img src="Images/Logo.png" width="110" height="100" align="center"></a><h1>Clinic Harmony </h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.html">Book An Apppointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="history.html">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>

                </div>
        </div>
    </nav>-->
        
         <?php
            ini_set('display_errors', 0);
            error_reporting(E_ERROR | E_WARNING | E_PARSE); 
        
        echo'<div class="line-1"></div>

            <h1 class="title"><center>Login</center></h1>
            
            <form action="#" method="post" class="row g-3 needs-validation justify-content-md-center" novalidate>
 
                <div class="col-md-8">
                    <label for="validationCustom01" class="form-label">Username : </label>
                    <input name="username" type="text" class="form-control" id="validationCustom01" placeholder="Enter your username" required>
                    <div class="invalid-feedback">
                        Please enter your username.
                    </div>
                </div>

               <div class="col-md-8">
                    <label for="inputPassword" class="form-label">Password :</label>
                    <div class="col-auto">
                      <input name="password" type="password" id="inputPassword6" class="form-control" placeholder="Enter your password" aria-describedby="passwordHelpInline">
                    </div>
                    <div class="invalid-feedback">
                          Please enter your password.
                    </div>
               </div>


                <div class="col-md-8">
                    <center><input name="signin" type="submit" value="Login"></center>
                </div>
            </form>
            
         <div id="register">
            <p><a href="#">Create an account now!</a> </p>
        </div>';
        
            if(isset($_POST['signin'])){
				
            $id = $_POST['username'];
            $password = $_POST['password'];

            $dbc=mysqli_connect("localhost","root","");
            mysqli_select_db($dbc, "clinic_reservation");

            if(substr($id, 0, 1)=="U"){

                    $result=mysqli_query($dbc, "Select * from user_table where user_id = '$id'")
                    or 
                    die("User ID is Not Found" .mysqli_error($dbc));

                    $row=mysqli_fetch_array($result);
                    if ($row['user_id']== $id && $row['user_password'] == $password){
                            header('Location:homepage.html');

                            session_start();	
                            $_SESSION['identifier']=$_POST['user_id'];

                    }
                    else{
                            echo"<h1 style='text-align: center'>ID or Password Incorrect</h1>";
                    }
            }
            else if(substr($uid, 0, 1)=="D"){

                    $result=mysqli_query($dbc, "Select * from doctor_table where doctor_id = '$id' and doctor_password = '$password'")
                    or 
                    die("Failed to query the database canteen" .mysqli_error($dbc));

                    $row=mysqli_fetch_array($result);
                    if ($row['doctor_id']== $id && $row['doctor_password'] == $password){
                            header('Location:homepage.html');

                            session_start();	
                            $_SESSION['identifier']=$_POST['doctor_id'];

                    }
                    else{
                            echo"<h1 style='text-align: center'>ID or Password Incorrect</h1>";
                    }
            }
            else{
                    echo"<h1 style='text-align: center'>ID Not Found</h1>";
            }
            }
	?>
            
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
        
        <script>
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                  .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                      if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                      }

                      form.classList.add('was-validated')
                    }, false)
                  })
              })()
        </script>           
        
    </body>
</html>
