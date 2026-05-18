<?php
session_start();
include 'includes/db.php';

$message = "";

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)) {

        $message = "All fields are required";

    } else {

        $sql = "SELECT * FROM users
                WHERE email='$email'
                AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

   	 $row = mysqli_fetch_assoc($result);

 	 $_SESSION['email'] = $email;

  	 $_SESSION['user_id'] = $row['id'];
	 $_SESSION['name'] = $row['name'];

   	 header("Location: dashboard.php");
	 } else {

            $message = "Wrong email or password";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h1>Login</h1>
	<?php
	if($message != ""){
  	  echo "<p>$message</p>";
	}
	?>

    <form method="POST">

        <input type="email"
               name="email"
               placeholder="Enter Email">

        <input type="password"
               name="password"
               placeholder="Enter Password">

        <button type="submit" name="login">
            Login
        </button>

    </form>

    <div class="links">
        <a href="register.php">
            Create new account
        </a>
    </div>

</div>

</body>
</html>