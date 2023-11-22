<?php
session_start();

$dbc = mysqli_connect("localhost", "root", "");
mysqli_select_db($dbc, "clinic_reservation");

$bookingID = $_SESSION['identifier'];

// CSRF token handling
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}


?>
<!DOCTYPE html>

<html>

<head>
    <title>Clinic Harmony</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
</head>

<style>
    html,
    body {
        height: 100%;
        width: 100%;
        overflow-x: hidden
    }

    /*timetable*/
    .btn-info.text-light:hover,
    .btn-info.text-light:focus {
        background: #000;
    }

    .button {
        background-color: #475993;
        color: white;
        margin-top: 10px;
        margin-bottom: 10px;
        border-color: white !important;
        border-style: solid;
        border-width: 1px !important;
    }

    .button:hover,
    .button:focus {
        background-color: white;
        color: #475993;
        border-color: #475993 !important;
        border-style: solid;
        border-width: 1px !important;
    }

    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: #ededed !important;
        border-style: solid;
        border-width: 1px !important;
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
        margin-bottom: 10px;
    }

    footer {
        width: 100%;
        text-align: center;
        background-color: #475993;
        color: white;
        padding: 10px 0px 10px 0px;
    }

    form {
        padding-top: 20px;
        padding-bottom: 20px;
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

    footer {
        width: 100%;
        text-align: center;
        background-color: #475993;
        color: white;
        padding: 10px 0px 10px 0px;
    }

    form {
        padding-top: 20px;
        padding-bottom: 20px;
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
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="homepage.php"> <img src="Images/Logo.png" width="110" height="100" align="center"></a>
            <h1 class="title">Clinic Harmony </h1>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="timetable.php">Book An Appointment</a>
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


    <h1 class="title">
        <center>Timetable</center>
    </h1>

    <div class="container py-5 bg-light" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>

            <?php
            echo '<div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h3 class="card-title" style="padding: 20px 10px 20px 10px;">Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" class="needs-validation" method="post" id="schedule-form" novalidate>
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="validationCustom02" class="form-label">Name : </label>
                                    <input name="userName" type="text" class="form-control form-control-sm rounded-0" id="validationCustom02" placeholder="Enter your name" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                     <label for="validationDefault02" class="form-label">Gender</label>
                                     
                                     <select name="sex" class="form-select form-control form-control-sm rounded-0" id="validationDefault02" required>
                                         <option value="Male">Male</option>
                                         <option value="Female">Female</option>
                                     </select>
                                     <div class="invalid-feedback">
                                        Please select your gender</div>
                                </div>
                       
                                    
                                <div class="form-group mb-2">
                                    <label for="validationCustom05" class="form-label">Email : </label>
                                    <input name="email" type="text" value=' . $bookingID . ' class="form-control form-control-sm rounded-0" id="validationCustom05" placeholder="Enter your email" required readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                          Please enter your email.
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="validationCustom11" class="form-label">Phone Number : </label>
                                    <input name="phoneNo" type="text" class="form-control form-control-sm rounded-0" id="validationCustom11" placeholder="Enter your phone number" required>
                                    <div class="invalid-feedback">
                                          Please enter your phone number.
                                    </div>
                               </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>
                                    
                                <div class="form-group mb-2">
                                    <label for="doctorName" class="control-label">Doctor Name</label>
                                    <select name="doctorName" class="form-select form-control form-control-sm rounded-0" id="validationDefault01" required>'; ?>

            <?php
            $stmt = mysqli_prepare($dbc, "SELECT doctor_name FROM doctor_table");
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $numRows = mysqli_num_rows($result);

            if ($numRows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <option value="<?php echo $row['doctor_name'] ?>"><?php echo $row['doctor_name'] ?></option>
            <?php
                }
            } else {
                echo '<p style="color: white; font-size: 38px; font-weight: 700; text-align:center;">No results found!</p>';
            }

            mysqli_stmt_close($stmt);

            ?>
            <?php echo '</select>
                                </div>
                                
                            </div>  

                            <input type="hidden" name="csrf_token" value="' . $_SESSION['csrf_token'] . '">
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <input class="button" value="Save" type="submit" name="save" form="schedule-form">
                            <input class="button" type="reset">   
                        </div>
                    </div>
            </div>'; ?>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Name</dt>
                            <dd id="name"></dd>
                            <dt class="text-muted">Doctor</dt>
                            <dd id="doctor" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Details Modal -->
    <?php
    $email = $_SESSION['identifier'];
    $schedules = mysqli_query($dbc, "SELECT * FROM booking_table WHERE user_email='$email'");

    $sched_res = [];
    foreach ($schedules->fetch_all(MYSQLI_ASSOC) as $row) {
        $row['sdate'] = date("F d, Y h:i a", strtotime($row['start']));
        $row['edate'] = date("F d, Y h:i a", strtotime($row['end']));
        $sched_res[$row['booking_id']] = $row;
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
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    </script>
    <script src="./js/script.js"></script>

    <!-- validation -->
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</body>

</html>