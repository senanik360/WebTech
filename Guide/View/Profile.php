<?php

setcookie("user_detect","visited", time()+ 86400*7,"/");

if(isset($_COOKIE["user_detect"])){
   echo "You have visited before. <br>";
}
else{
   echo "You are visited for the first time. <br>";
}

?>

<!DOCTYPE html>
<html>

<body background="image.jpg">
<header>
        <h2>LOGO</h2>
        <div class="nav">
            <a href="">Main</a>
           
           
</div>
</header> 
<head> 

    <center>
    <link rel="stylesheet" type="text/css" href="../Css/mystyle.css">
    </head>
    <br>
    <h1 align="center">
        <font color="black" size="" > Guide </font> <br>

        <h3>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <table border="1" align="center" width="150">
                <tr>
                    <td>
                        <h3> <a href="Tourplan.php"><img src="tourplan.jpg" width="350" height="200" class="img-border"></a>
                        <center> <h3> Tour Plan </h3> </center> 

                    </td>
                
                    <td>
                        <h3> <a href="Budget.php"><img src="budget.jpg" width="350" height="200" class="img-border"></a>
                        <center> <h3> Budget </h3> </center> 

                             
                    </td>
                </tr>
                <tr>
                <td>
                    <h3> <a href="Accommendation.php"> <img src="acco.jpg" width="350" height="200" class="img-border"></a>
                        <center> <h3> Accommendation </h3> </center>
                        
                </td>
                <td>
                    <a href="guideinfo.php"><img src="gui.jpeg" width="350" height="200"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <center><h3>Guide Info</h3></center>
                </td>
                
                <td>
                    <h3> <a href="Rating.php"> <img src="rating.jpg" width="350" height="200" class="img-border"></a>
                        <center> <h3> Rating </h3> </center>
                </td>
                
                </tr> 
            </h3>
                <tr>
                        <h3> <a href="../Control/logout.php"> Log out </a> <br>
                    

                </tr>
                
</center>

</body>

</html>
