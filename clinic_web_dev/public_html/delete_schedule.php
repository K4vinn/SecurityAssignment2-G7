<?php 
session_start();

$dbc = mysqli_connect("localhost", "root", "");
mysqli_select_db($dbc, "clinic_reservation");

// Check if 'id' is set and is a number
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    exit;
}

// Use prepared statement for the DELETE query
$query = "DELETE FROM booking_table WHERE booking_id = ?";
$stmt = mysqli_prepare($dbc, $query);
mysqli_stmt_bind_param($stmt, "i", $_GET['id']);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "<script> alert('Event has been deleted successfully.'); window.location = \"timetable.php\"; </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: " . mysqli_stmt_error($stmt) . "<br>";
    echo "SQL: " . $query . "<br>";
    echo "</pre>";
}

// Close the statement
mysqli_stmt_close($stmt);
?>