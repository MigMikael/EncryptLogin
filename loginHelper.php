<?php
  $servername = "localhost";
  $usernameDB = "root";
  $passwordDB = "mig39525G";
  $dbname = "issDB";
  $username = $_POST["username"];
  $password = $_POST["password"];
  $pagenext = "register.html";

  $passwordEncrypt = md5($password);
  $conn = mysqli_connect($servername, $usernameDB, $passwordDB, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      //echo $row["password"]. " | " .$passwordEncrypt."<br>";
      if ($row["username"] == $username && $row["password"] == $passwordEncrypt) {
        header("Location: result.php");
        die();
      }
    }
    echo "username: " . $username. " is not register";
    echo "<br><a href='$pagenext'><h1> Register </h1></a>";
  }
  mysqli_close($conn);
?>
