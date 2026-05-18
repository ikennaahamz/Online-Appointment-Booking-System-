<?php
include 'includes/db.php';

session_start();

if(!isset($_SESSION['email'])) {
    header("Location: login.php");
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM appointments
        WHERE user_id='$user_id'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Appointments</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="container" style="width:700px;">

    <h1>Appointments</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Service</th>
            <th>Status</th>
	    <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['appointment_date']; ?></td>

            <td><?php echo $row['appointment_time']; ?></td>

            <td><?php echo $row['service']; ?></td>

            <td><?php echo $row['status']; ?></td>
	    <td>
    	     <a href="cancel.php?id=<?php echo $row['id']; ?>">Cancel</a></td>

        </tr>

        <?php } ?>

    </table>

    <div class="links">
        <a href="dashboard.php">
            Back to Dashboard
        </a>
    </div>

</div>

</body>
</html>
