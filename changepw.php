
<?php
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"food") or die("Couldn't find database");
if(isset($_POST['changepw'])) {
  $email = $_POST['email'];
  $cpw = $_POST['cpw'];
  $npw = $_POST['npw'];
  $query = "SELECT * FROM php_users_login WHERE email = '$email'";
  $sql1 = mysqli_query($connect,$query);
  $numrows = mysqli_num_rows($sql1);
  if($numrows != 0) {
    while($row = mysqli_fetch_assoc($sql1)) {
      $dbemail = $row['email'];
      $dbpassword = $row['password'];
    }
    if($dbemail == $email && $dbpassword == $cpw) {
      $sql2 = "UPDATE php_users_login SET password = '$npw' WHERE email = '$dbemail'";
      if(mysqli_query($connect,$sql2)) {
        echo "<script type='text/javascript'>alert('Password changed successfully');</script>";
      }
      else {
        echo "<script type='text/javascript'>alert('Error');</script>";
      }
    }
  else {
    echo "<script type='text/javascript'>alert('Incorrect password');</script>";
  }
}
else {
  echo "<script type='text/javascript'>alert('User does not exist');</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css" type="text/css"/>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <title>Change password</title>
  </head>
  <body>
    <form class="login-form" id="login-form" name="form1" action="changepw.php" method="post">
      <div id="form-content">
        <div class="welcome">
          Do you want to change your password?<br />
          Email: <input type="text" name="email"><br />
          Current password: <input type="password" name="cpw"><br />
          New password: <input type="password" name="npw"><br />
          <center><input type="submit" name="changepw" value="Change password"></center>
        </div>
      </div>

    </form>
    <?php include("main.php"); ?>
  </body>
</html>
