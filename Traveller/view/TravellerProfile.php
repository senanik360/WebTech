<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
if($email == ''){
    header('Location: ../view/TravellerLogin.php');
}

include '../json/JsonController.php';
$userArr = jsonGet('../json/user.json');
foreach($userArr as $user){
    if($user['email'] == $email){
        $name = $user['first_name'];
        $mobile_no = $user['mobile_no'];
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MyStyle.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Document</title>
</head>
<body>


<style>
body {
  background-image: url("../images/ppbg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<header>
        <h2>LOGO</h2>
        <div class="nav">
            <a href="">Main</a>
            <a href="..//view/ReportIssue.php">Report an Issue</a>
            <a href="..//view/update_info.php">Update_Information</a>
            <a href="../controller/LogoutController.php">Log Out</a>
           
</div>
</header> 
<br><br><br><br>  <br><br>     



    
    
        <img src="../images/pp01.jpg" width="200px" height="200px">
    
    <form>
        <table>
          <tr>
           <h3>Name: <?php echo $name?></h3>
           <tr>
           <h3>Mail: <?php echo $email?></h3>
           <tr>
            <h3>Mobile No: <?php echo $mobile_no?></h3>
           </tr>
          </tr>
          
          </tr>

        </table>


    

        <center><h1><u> Start your journey from here</u></h1><br><br>
        <table>
            <tr>
                <td>
                    <a href="../view/sylhet.php"><img src="../images/sylhet_up.jpg" width="350" height="200" class="img-border"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <center><h3>Sylhet</h3></center>
                </td>
                <td>
                    <a href="../view/cox.php"><img src="../images/cox_bazar.jpg" width="350" height="200" class="img-border"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <center><h3>Cox's Bazar</h3></center>
                </td>
                <td>
                    <a href="../view/sajek.php"><img src="../images/sajek.jpg" width="350" height="200"  class="img-border"></a>
                    <center><h3>Sajek</h3></center>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="../view/kuakata.php"><img src="../images/kuakata.jpg" width="350" height="200"  class="img-border"></a>
                    <center><h3>Kuakata</h3></center>
                </td>
                <td>
                    <a href="../view/martin.php"><img src="../images/saint_martin.jpg" width="350" height="200"  class="img-border"></a>
                    <center><h3>Saint Martin</h3></center>
                </td>
                <td>
                    <a href="../view/bandarban.php"><img src="../images/bandarban.jpg" width="350" height="200"  class="img-border"></a>
                    <center><h3>Bandarban</h3></center>
                </td>
            </tr>
        </table></center>


        <footer>
<center><h3><a href="#">Privacy Policy</a></h3></center>
<center><h3><a href="#">Map</a></h3></center>
<center><h3><a href="#">Emergency</a></h3></center>
</footer>

        

   



</body>
</html>