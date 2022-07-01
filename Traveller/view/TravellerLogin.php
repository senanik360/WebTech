<?php
if (isset($_REQUEST['error']) && !empty($_REQUEST['error'])) {
  $error = $_REQUEST['error'];
  if ($error == 'login_error') {
    echo "<center>User email or password is incorrect.</center>"; //loginController;
  }
}

$email = isset($_COOKIE['user_mail']) ? $_COOKIE['user_mail'] : '';
$password = isset($_COOKIE['user_ps']) ? base64_decode($_COOKIE['user_ps']) : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/MyStyle.css">
</head>

<body background="../images/login.jpg">

  <center>
    <h1><u>Login your account</u></h1>
    <form action="../controller/LoginController.php" method="post">

      <table>

        <tr>
          <td>User Email :</td>
          <td><input type="email" name="email" id="email" placeholder="Enter your Email" value="<?php echo $email ?>" autocomplete="off"></td>
        </tr>
        <div class="error_message" id="error_message_mail"></div>
        <div class="success_message" id="success_message_mail"></div>

        <tr>
          <td>Password :</td>
          <td><input type="password" name="password" id="password" placeholder="Enter your password" value="<?php echo $password ?>" autocomplete="off"></td>
        </tr>
        <div class="error_message" id="error_message_pass"></div>
        <div class="success_message" id="success_message_pass"></div>
      </table>


      Remember me<input type="checkbox" name="remember_me"> <br>
      <button class="loginbutton" class="button" type="submit" name="submit">Login</button><br><br>
    </form>
    <a href="../view/TravellerSignUp.php"><button class="signinbutton" class="button" name="signin">Sign Up</button></a>
  </center>

  <script src="../js/jquery-v3.6.0.js"></script>
  <script src="../js/login-validation.js"></script>
</body>

</html>