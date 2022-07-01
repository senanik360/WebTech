<html>

<head>
<link rel="stylesheet" type="text/css" href="../Css/mystyle.css">
</head>

<body background="image.jpg">
    <br>
    <h1 align="center">
        <font color="black" size="" face="cursive"> Welcome </font> <br>

        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
            <a href="login.php"> Log In </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br><br>
            <form action="" method="post" enctype="multipart/form-data"
            onsubmit="return validateForm()">

                <center>
                    <h1><i>Sign up</i></h1>
                </center>


                <form>
                    <center>
                        <table>

                            <tr>
                                <td> Name :</td>
                                <td><input type="text" name="first_name" placeholder="Valid Name"
                                        required>
                                       
                                    </td>
                            </tr>

                            <tr>
                                <td>Date of Birth :</td>
                                <td><input type="date" name="date_of_birth" required></td>
                            </tr>
                            <tr>

                            <tr>
                                <td>Email :</td>
                                <td><input type="text" name="email" id="email" placeholder="ex: abc1@gmail.com" required>
                                
                            </td>
                            </tr>

                            <tr>
                                <td>Mobile Number :</td>
                                <td><input type="number" name="mobile_no" placeholder="01...." required></td>
                                
                            </tr>

                            <tr>
                                <td>NID :</td>
                                <td><input type="number" name="nid" id="nid" placeholder="Enter your valid NID number" required></td>
                               
                            </tr>
                            <tr>
                                <td>Location :</td>
                                <td><input type="text" name="location" required></td>
                            </tr>

                            <tr>
                                <td>Password :</td>
                                <td><input type="password" name="password" placeholder="With Special Character"
                                        required>
                                        
                                    </td>
                            </tr>

                            <tr>
                                <td>Confirm Password :</td>
                                <td><input type="password" name="confirm_password" placeholder="Retype password" required>
                                
                            </td>
                            </tr>


                        </table><br>
                        <input type="submit" class="submit-button" name="submit" value="Submit">
                        <input type="reset" class="resetbutton">
                    </center>
                </form>
                <script src="../Js/myjs.js"></script>
</body>

</html>
<?php include '../Control/signupcheck.php';
?>