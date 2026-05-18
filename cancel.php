<?php

include 'includes/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM appointments WHERE id='$id'";

mysqli_query($conn, $sql);

header("Location: appointments.php");

?>
