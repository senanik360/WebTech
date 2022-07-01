<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
if ($email == '') {
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
    <link rel="stylesheet" href="../css/MyStyle.css">
</head>

<style>
    body {
        background-image: url("../images/bg02.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>



<center><u>
        <h1>Welcome to Cox's Bazar!</h1>
    </u></center>

<div id="relative">
    <marquee width="100%" direction="left" height="100px">Enjoy Your Tour &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Stay safe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Enjoy Your Tour &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Stay safe
    </marquee>
</div>

<h3>Book your Ticket here</h3>
<form action="../controller/TransportController.php" method="post">
    <label for="transport">Select transportaion system:</label>
    <select name="transport" id="transport">
        <option value="bus">Bus</option>
        <option value="train">Train</option>
        <option value="plane">Plane</option>
        <option value="lonch">Lonch</option>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <input type="hidden" name="from_location" id="from_location" value="cox's bazar">
    <label for="date_time">Select your travel date and time:</label>
    <input type="datetime-local" id="date_time" name="date_time">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Search" id="submit" name="submit"><br><br><br><br><br><br>
</form>


    <h3>Book your Hotel here</h3>
    <label for="Hotels">Select Hotel:</label>
    <select id="list">
        <option value="Hotel Rodela">Hotel Rodela</option>
        <option value="GrandPark">Grank Park</option>
        <option value="ChinaPalace">China Palace</option>
        <option value="ShikdarVilla">Shikdar Villa</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Visit"><br><br><br><br><br><br>





    <center>
        <h2><u>Availavle Guide in this area</u></h2>
        <table>
            <tr>
                <td>
                    <a href=""><img src="../images/guide01.jpg" width="200" height="200" class="img-border"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <center>
                        <h3>Abdulla Noman</h3>
                    </center>
                </td>

                <td>
                    <a href=""><img src="../images/guide02.jpg" width="200" height="200" class="img-border"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <center>
                        <h3>Anik Sen</h3>
                    </center>
                </td>

                <td>
                    <a href=""><img src="../images/guide01.jpg" width="200" height="200" class="img-border"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <center>
                        <h3>Imtiaz Nakib</h3>
                    </center>
                </td>

                <td>
                    <a href=""><img src="../images/guide04.jpg" width="200" height="150" class="img-border"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <center>
                        <h3>Nazifa Hridy</h3>
                    </center>
                </td>

            </tr>

        </table>
    </center><br><br><br>



    <center><a href="https://en.wikipedia.org/wiki/Sylhet">Know more about Sylhet</a></center>







    </body>

</html>