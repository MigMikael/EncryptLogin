<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    body {
      background: #f2f2f2;
    }

    .btn {
      border-radius: 0px;
    }

    tr:hover, th:hover {
      background: rgb(57, 152, 118);
      color: #ffffff;
    }

    table {
      background: #ffffff;
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="row col-sm-12">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">
      <?php
        $servername = "localhost";
        $usernameDB = "root";
        $passwordDB = "mig39525G";
        $dbname = "issDB";

        $objConnect = mysql_connect($servername,$usernameDB,$passwordDB) or die("Error Connect to Database");
        $objDB = mysql_select_db($dbname);
        $sql = "SELECT * FROM users";
        $objQuery = mysql_query($sql) or die ("Error Query [".$strSQL."]");
      ?>
      <table class="table table-bordered">
        <thead>
          <th>Username</th>
          <th>Password</th>
        </thead>
        <tbody>
          <?php while ($objResult = mysql_fetch_array($objQuery)) { ?>
          <tr>
            <td><?php echo $objResult["username"] ?></td>
            <td><?php echo $objResult["password"] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php mysql_close($objConnect); ?>
    </div>
    <div class="col-sm-2">

    </div>
  </div>
  <hr>
  <div class="row col-sm-12 text-center">
    <div class="col-sm-6">
      <a href="login.html">
        <button type="button" class="btn btn-success" name="button">Login</button>
      </a>
    </div>
    <div class="col-sm-6">
      <a href="register.html">
        <button type="button" class="btn btn-success" name="button">Register</button>
      </a>
    </div>
  </div>
  <hr>
</body>
</html>
