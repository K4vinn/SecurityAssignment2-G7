<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST['save'])){ 
    
    session_start();
    $dbc = mysqli_connect("localhost","root","");
    mysqli_select_db($dbc, "clinic_reservation");
    
    echo'<script>
        function submissionAlert() {
            alert("The item has been updated.");
        }
        </script>';
    
        $allday = isset($allday);
        $bookingID = $_POST['id'];
        $user_name = $_POST['userName'];
        $user_gender = $_POST['sex'];
        $user_email = $_POST['email'];
        $user_phoneNo = $_POST['phoneNo'];
        $start = $_POST['start_datetime'];
        $end = $_POST['end_datetime'];
        $doctorName = $_POST['doctorName'];
        $status = $_POST['status'];
                    
        $query1 = "UPDATE booking_table SET user_name=?, user_gender=?, user_email=?, user_phoneNo=?, `start`=?, `end`=?, `status`=?, doctor_name=? WHERE booking_id=?";
        $stmt1 = mysqli_prepare($dbc, $query1);
        
        mysqli_stmt_bind_param($stmt1, "sssssssss", $user_name, $user_gender, $user_email, $user_phoneNo, $start, $end, $status, $doctorName, $bookingID);
        mysqli_stmt_execute($stmt1);
        
        // Close the statement
        mysqli_stmt_close($stmt1);   

        $mail = new PHPMailer(true);

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

        $mail->Subject = 'Clinic Reservation';
        $mail->Body = 'Dear Customer, your booking status have been updated to '.$status.', thank you for choosing Clinic Harmony!';

        $mail->send();
        
         echo "<script> alert('Information updated');window.location= \"admintimetable.php\"; </script>";


}
?>              
