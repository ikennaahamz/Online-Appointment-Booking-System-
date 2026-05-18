<?php
include 'includes/db.php';
session_start();

$message = "";

if(isset($_POST['book'])) {
    $user_id = $_SESSION['user_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $service = $_POST['service'];

    if(empty($date) || empty($time) || empty($service)) {

        $message = "All fields are required";

    } else {

        $sql = "INSERT INTO appointments
        (user_id,appointment_date, appointment_time, service)

        VALUES($user_id,'$date', '$time', '$service')";

        mysqli_query($conn, $sql);

        $message = "Appointment booked successfully";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Book Appointment</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/validation.js"></script>
</head>

<body>

<div class="container">

    <h1>Book Appointment</h1>

    <?php
    if($message != ""){
        echo "<p>$message</p>";
    }
    ?>

    <form method="POST"
          name="bookForm"
          onsubmit="return validateBookForm()">

        <input type="date" name="date">

        <input type="time" name="time">

        <select name="service">
            <option value="">Select Service</option>
            <option value="Medical Consultation">Medical Consultation</option>
            <option value="Dental Checkup">Dental Checkup</option>
            <option value="Legal Consultation">Legal Consultation</option>
            <option value="Financial Advisory">Financial Advisory</option>
            <option value="Career Counseling">Career Counseling</option>
            <option value="Therapy Session">Therapy Session</option>
            <option value="Fitness Coaching">Fitness Coaching</option>
            <option value="Beauty & Self-Care">Beauty & Self-Care</option>
            <option value="Technical Support">Technical Support</option>
            <option value="Academic Advising">Academic Advising</option>
        </select>

        <button type="submit" name="book">
            Book Now
        </button>

    </form>

    <div class="links">

        <a href="dashboard.php">
            Back to Dashboard
        </a>

    </div>

</div>

</body>
</html>
