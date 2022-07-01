

<?php
setcookie("user_detect","visited", time()+ 86400*7,"/");

if(isset($_COOKIE["user_detect"])){
   echo "You have visited me before. <br>";
}
else{
   echo "You are visited me first time. <br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>

<h2 align="center">
        <font face+"Lato" size="6">Tour Guide-Bd</font>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;
        <!--Here &nbsp add spaces-->
        <font>
            <a href="file:///C:/xampp/htdocs/Project/View/home.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">Edit Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">Report an Issue</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Control/logout.php">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </font>
    </h2>


    <div id="static">
<marquee width="100%" direction="left" height="100px">Welcome to Tour Guide-BD  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp   Welcome to Tour Guide-BD  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp   Welcome to Tour Guide-BD &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp   Welcome to Tour Guide-BD
</marquee>
</div>   



    <br><br><br><br><br>
<center><h1><u> Welcome to Hotel Grand park</u></h1>
        <table>
            <tr>
                <td>
                    <a href="Bookhotel.php"><img src="room.jpg" width="350" height="200"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <center><h3>Book room</h3></center>
                </td>
                <td>
                    <a href="Hiretransportation.php"><img src="bus.jpg" width="350" height="200"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <center><h3>Hire Transportation</h3></center>
                </td>
                <td>
                    <a href="Accommodation.php"><img src="buffee.jpg" width="350" height="200"></a>
                    <center><h3>Accomodation</h3></center>
                </td>
            </tr>
            <tr>
            <td>
                    <a href="Package.php"><img src="package.jpg" width="350" height="200"></a>
                    <center><h3>Package</h3></center>
                </td>
                <td>
                    <a href="employeeinfo.php"><img src="emp.jpeg" width="350" height="200"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <center><h3>Employee Info</h3></center>
                </td>    

                </tr>
        </table></center>



</body>
</html>