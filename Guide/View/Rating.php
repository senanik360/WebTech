

<!DOCTYPE html>

<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../Css/mystyle.css">
    </head>
    <body background="ra.jpg">
        <br><br><br><br>
        <br><br>
        <div id="static">
    <marquee width="100%" direction="left" height="100px">Enjoy Your Tour &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Stay safe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Enjoy Your Tour &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Stay safe
    </marquee>
</div>
    <center><h1> Rating Of Guide </h1>
    <br><br><br>
    </center>

    <center>
        <p>
        <form action="" method="post">

            <table>
                <tr>
                    <td>
                        Feedback of Guide :
                    </td>
                    <td><input type="text" name="FoG"</td>
                </tr>
                <tr>
                    <td>
                       Rating of Tourist Behavior:
                    </td>
                    <td>
                    <input type="checkbox" name="checkboxB1"> Cooperative
                    <input type="checkbox" name="checkboxB2"> Uncooperative
                    </td>
                </tr>
                <tr> 
                    <td>
                        <input type="Submit" class="submit-button"> 
                    </td>
                </tr>
        </p>
    </center>
            </table>
        </form>
    </body>
</html>
<?php
include '../Control/ratingcheck.php';
?>