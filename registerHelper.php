<?php
  $servername = "localhost";
  $usernameDB = "root";
  $passwordDB = "mig39525G";
  $dbname = "issDB";

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  $pagenext = "login.html";

  $passwordEncrypt = md5($password);
  // Create connection
  $conn = mysqli_connect($servername, $usernameDB, $passwordDB, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO users (firstname, lastname, email, username, password)
  VALUES ('$firstname', '$lastname', '$email', '$username', '$passwordEncrypt')";

  if (mysqli_query($conn, $sql)) {
      echo "Register successfully";
  } else {
      echo "Register Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  echo "<br><a href='$pagenext'><h1> Login </h1></a>";

  mysqli_close($conn);
?>
