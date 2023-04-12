<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "form";


$conn = mysqli_connect($host, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
 
  $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
  
    session_start();
    $_SESSION['username'] = $username;

    header("location: dashboard.php");
    exit();
  } else {
   
    $error = "Your Login Name or Password is invalid";
    header("location: login.php?error=$error");
    exit();
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Account</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h2 {
      text-align: center;
      margin-top: 190px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      margin-top: 30px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 3px;
      background-color: #f2f2f2;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: dodgerblue;
      color: #fff;
      border: none;
      border-radius: 3px;
      padding: 10px;
      cursor: pointer;
      width: 100%;
    }

    input[type="submit"]:hover {
      background-color: black;
    }
  </style>
</head>
<body>
  <h2>Sign-in Account</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter password">
    <input type="submit" value="Login">
  </form>
</body>
</html>

