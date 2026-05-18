<?php
session_start();

if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h1>
    Welcome,
    <?php echo $_SESSION['name']; ?>
</h1>

    <div class="dashboard-links">

        <a href="book.php">
            Book Appointment
        </a>

        <a href="appointments.php">
            View Appointments
        </a>

        <a href="logout.php">
            Logout
        </a>

    </div>

</div>

</body>
</html>