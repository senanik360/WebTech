<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/s1.jpg">
    <div class="heading">

        <form action="" method="post" enctype="multipart/form-data">
            <h3> <a href="../Control/admininfocheck.php"> About Admins </a><br>

                <br><br><br>
                <table border="1" align="center" width="400">
                    <tr>
                        <td>
                            <img src="admindp.jpg" width="400px" height="300px">
                            <center>
                                <?php
                                session_start();
                                if (isset($_SESSION['email'])) {
                                    $data = file_get_contents(
                                        '../View/data.json'
                                    );
                                    $mydata = json_decode($data);
                                    foreach ($mydata as $myobject) {
                                        if (
                                            $myobject->email ==
                                            $_SESSION['email']
                                        ) {
                                            echo '<br>';
                                            echo ' ';
                                            echo 'Name : ' .
                                                $myobject->first_name;
                                            echo ' ' . $myobject->Last_name;
                                            echo '<br>';
                                            echo 'Phone : ' .
                                                $myobject->mobile_no;

                                            echo '<br>';
                                            echo 'Email : ' . $myobject->email;
                                            echo '<br>';
                                            echo 'Date of Birth : ' .
                                                $myobject->date_of_birth;
                                            echo '<br>-------------------------------<br> <br> <br>';
                                            break;
                                        }
                                    }
                                }
                                ?>
                            </center>
                        </td>
                    </tr>
                </table>

</body>

</html>