<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
include("sessionexpirationmodule/session_expiration.php"); 

if (isset($_POST['save'])) {
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        // Invalid CSRF Token
        echo "<script>alert('CSRF Token invalid.'); window.location = 'adminTimetable.php';</script>";
    } else {
        $dbc = mysqli_connect("localhost", "root", "");
        mysqli_select_db($dbc, "clinic_reservation");

        $allday = isset($allday);
        $user_name = $_POST['userName'];
        $user_gender = $_POST['sex'];
        $user_email = $_POST['email'];
        $user_phoneNo = $_POST['phoneNo'];
        $start = $_POST['start_datetime'];
        $end = $_POST['end_datetime'];
        $doctorName = $_POST['doctorName'];

        $email = $_SESSION['identifier'];

        $query1 = "SELECT * FROM user_table WHERE user_email = ?";
        $stmt1 = mysqli_prepare($dbc, $query1);
        mysqli_stmt_bind_param($stmt1, "s", $email);
        mysqli_stmt_execute($stmt1);
        $result1 = mysqli_stmt_get_result($stmt1);

        while ($row = mysqli_fetch_array($result1)) {
            $user_id = $row['user_id'];
        }

        $query2 = "INSERT INTO booking_table (user_id, user_name, user_gender, user_email, user_phoneNo, start, end, status, doctor_name) "
            . "VALUES (?, ?, ?, ?, ?, ?, ?, 'Pending', ?)";

        $stmt2 = mysqli_prepare($dbc, $query2);
        mysqli_stmt_bind_param($stmt2, "ssssssss", $user_id, $user_name, $user_gender, $user_email, $user_phoneNo, $start, $end, $doctorName);
        mysqli_stmt_execute($stmt2);

        echo "<script> alert('You have booked a slot, please wait for the approval email!');</script>";

        mysqli_stmt_close($stmt1);
        mysqli_stmt_close($stmt2);


        // email
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        $fromEmail = 'tengteng8132002@gmail.com';

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'tengteng8132002@gmail.com';
            $mail->Password = 'zzvmemdazozxzadq';
            $mail->SMTPSecure = 'tls';  // or 'ssl' for port 465
            $mail->Port = 587;  // or 465 for SSL

            $mail->setFrom('tengteng8132002@gmail.com');
            $mail->addAddress($user_email);
            $mail->isHTML(true);

            // Content
            $mail->Subject = 'Your reservation is successfully made!';
            $mail->Body = 'Your reservation is made! Please wait for the approval email.';

            $mail->send();
            echo '<script>alert("Email sent successfully !"); window.location= "timetable.php";</script>';
        } catch (Exception $e) {
            echo '<script>alert("Email failed to send. Error: ' . $mail->ErrorInfo . '"); window.location= "timetable.php";</script>';
            error_log('Email failed to send. Error: ' . $mail->ErrorInfo);
        }
    }
}
