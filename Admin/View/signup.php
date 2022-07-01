<?php
include '../control/signupcheck.php'; ?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="11.jpg">
    <br>
    <h1 align="center">
        <font color="white" size="" face="cursive"> Welcome Admin.</font> <br>
        <h3>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="login.php"> Log in </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br><br>
            <div class="bodynocolor">

                <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                    <center>
                        <h1>Sign up</h1>
                    </center>


                    <center>
                        <table>
                            <tr>
                                <td>
                                    <p class="p2" id="labels">First Name :
                                </td>
                                <td><input type="text" name="first_name" id="first_name"
                                        placeholder="Enter your first name." required>
                                    <p id="errorfname"></p><?php echo $fnamerr; ?>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Last Name :
                                </td>
                                <td><input type="text" name="last_name" id="last_name"
                                        placeholder="Enter your last name">
                                    <p id="errorlname"></p><?php echo $lnamerr; ?>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Date of Birth :
                                </td>
                                <td><input type="date" name="date_of_birth" required></td>
                            </tr>
                            <tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Email :
                                </td>
                                <td><input type="text" name="email" id="email" placeholder="ex: abc1@gmail.com"
                                        required>
                                    <p id="erroremail"></p>
                                    <?php echo $emailerr; ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Mobile Number :
                                </td>
                                <td><input type="number" name="mobile_no" id="mobile_no" placeholder="01...." required>
                                    <p id="errorphone"></p><?php echo $phonerr; ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">NID :
                                </td>
                                <td><input type="number" name="nid" id="nid" placeholder="Enter your valid NID number"
                                        required>
                                    <p id="errornid"></p><?php echo $niderr; ?>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Password :
                                </td>
                                <td><input type="password" name="password" placeholder="Enter a strong password"
                                        required><?php echo $passerr; ?></td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Confirm Password :
                                </td>
                                <td><input type="password" name="confirm_password" placeholder="Retype password"
                                        required><?php echo $conpasserr; ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="p2" id="labels">Admin Code :
                                </td>
                                <td><input type="text" name="admin_code" id="admin_code" placeholder="*****" required>
                                    <p id="erroradmincode"></p><?php echo $admincodeerr; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="p2" id="labels">Upload your picture :
                                </td>
                                <td><input type="file" name="myfile">
                                </td>
                            </tr>
                        </table><br>
                        <input type="submit" name="submit" class="button submitbutton" value="Submit"
                            onclick="validateForm()">
                        <input type="reset" class="button searchtbutton" name="Reset">
                    </center>
                </form>
                <script src="../myjs.js"></script>

</body>

</html>
<?php include '../Control/signupcheck.php';
?>