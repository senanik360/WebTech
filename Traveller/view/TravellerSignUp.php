<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="../css/MyStyle.css">

</head>


<body background="../images/signup.jpg">

    
    

    <center><h1><u>Sign up your account</u></h1></center>


    <form action="../controller/SignUpController.php" method="post">
      
       <center><table>
         
         <tr>
          <td>First Name :</td>
          <td><input type="text" name="first_name" placeholder="Greater than 2 character" required></td>
         </tr>
      
         <tr>
          <td>Last Name :</td>
          <td><input type="text" name="last_name" placeholder="Greater than 2 character"></td>
         </tr>
      
         <tr>
          <td>Date of Birth :</td>
          <td><input type="date" name="date_of_birth" required></td>
         </tr>
         <tr>
      
         <tr>
          <td>Email :</td>
          <td><input type="email" name="email" required></td>
         </tr>

         <tr>
          <td>Mobile Number :</td>
          <td><input type="number" name="mobile_no" required></td>
         </tr>

         <tr>
          <td>NID :</td>
          <td><input type="number" name="nid" required></td>
         </tr>

         <tr>
            <td>Address :</td>
            <td><textarea name="address" id="" cols="20" rows="5"></textarea></td>
           </tr>
      
         <tr>
          <td>Password :</td>
          <td><input type="password" name="password" placeholder="With Special Character"required></td>
         </tr>

         <tr>
            <td>Confirm Password :</td>
            <td><input type="password" name="confirm_password" required></td>
           </tr>
      
        
      
     
    
          
      
        </table><br>
        <input class="submit-button" class="button" type="submit" name="submit" value="Save" id="submit">
        <input  class="resetbutton" class="button" type="reset">
      </center> 
       </form>


</body>
</html>