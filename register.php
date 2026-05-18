<?php
include 'includes/db.php';

if(isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h1>Register</h1>

    <form method="POST" onsubmit="return validateForm()" name="myForm">

        <input type="text" name="name" placeholder="Enter Name">

        <input type="email" name="email" placeholder="Enter Email">

        <input type="password" name="password" placeholder="Enter Password">

        <button type="submit" name="register">
            Register
        </button>

    </form>

    <div class="links">
        <a href="login.php">Already have account?</a>
    </div>

</div>

	<script src="js/validation.js"></script>
</body>
</html>