<?php
session_start();
if (empty($_SESSION['email'])) {
    header('Location: ../control/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/s1.jpg">
    <center>

        <div class="body">
            <div class="heading">
                <h1><i>Reviews</i>
                </h1>
                <table>

                    <img src="../../review.jpg" width="200px" height="200px">
                    <tr>
                        <td> <?php
                        $data = file_get_contents('../../reviewdata.json');
                        $mydata = json_decode($data);
                        foreach ($mydata as $myobject) {
                            echo 'Name : Anonymous.<br>';
                            echo 'Review : ' . $myobject->review;
                            echo '<br>';
                            echo '<br>-------------------------------<br> <br> <br>';
                        }
                        ?></td>
                    </tr>
    </center>
</body>

</html>