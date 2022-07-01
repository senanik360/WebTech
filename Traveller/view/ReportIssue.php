<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
if($email == ''){
    header('Location: ../view/TravellerLogin.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../controller/IssueController.php" method="post">
<tr><center>
            <td>Write your issue here :</td><br><br>
            <td><textarea name="address" id="" cols="50" rows="10"></textarea></td>
           </tr><br><br><br><br>

           <input type="submit"></center>



</body>
</html>