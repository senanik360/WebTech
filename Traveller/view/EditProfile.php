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

    <body style = "background: url('Login01.jpg');background-size:  100%;"></body>
    

    <center><h1><u>Edit your profile</u></h1></center>


    <form action="../controller/SignUpController.php" method="post">
      
       <center><table>
      
       
      <label for="img">Upload profile picture:</label>
      <input type="file" id="img" name="img" accept="image/*">

      
         
         <tr>
          <td>First Name :</td>
          <td><input type="text" name="first_name"></td>
         </tr>
      
         <tr>
          <td>Last Name :</td>
          <td><input type="text" name="last_name"></td>
         </tr>
      
         <tr>
          <td>Date of Birth :</td>
          <td><input type="date" name="date_of_birth"></td>
         </tr>
         <tr>
      
         <tr>
          <td>Email :</td>
          <td><input type="email" name="email" required></td>
         </tr>

         <tr>
          <td>Mobile Number :</td>
          <td><input type="number" name="mobile_no"></td>
         </tr>

         <tr>
          <td>NID :</td>
          <td><input type="number" name="nid"></td>
         </tr>

         <tr>
            <td>Address :</td>
            <td><textarea name="address" id="" cols="20" rows="5"></textarea></td>
           </tr>
      
         <tr>
          <td>New Password :</td>
          <td><input type="password" name="password"></td>
         </tr>

         <tr>
            <td>Confirm new Password :</td>
            <td><input type="password" name="Conirm_Password"></td>
           </tr>
      
        <!--Need a space here-->
      
     
    
          
      
        </table><br>
        <input type="submit" name="submit" value="Save" id="submit">
        <input type="reset">
      </center> 
       </form>


</body>
</html>