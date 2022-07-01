<?php
session_start();
if (empty($_SESSION['email'])) {
    header('Location: ../control/login.php');
}
?>
<?php include '../Control/touristinfocheck.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body background="../file/s1.jpg">
    <div class="body">
        <div id="sticky">
            <marquee>
                <h1><i>Traveller's Info.</i>
                </h1>
            </marquee>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <center>
            <table>

                <form action="" method="post"><br>
                    <input type="text" name="searchData" placeholder="Type NID">
                    <input type="submit" name="search" class="button searchbutton" value="Search"><br><br>

                </form>
                <tr>
                    <td>
                        <form action="" method="post">
                            <p class="p3" id="labels"> First Name :
                                <input type="text" name="fname" value="<?php echo $fname; ?>"><br><br>
                                Last Name :
                                <input type="text" name="lname" value="<?php echo $lname; ?>"><br><br>
                                Phone :
                                <input type="number" name="phone" value="<?php echo $phone; ?>"><br><br>
                                Date of Birth :
                                <input type="date" name="dob" value="<?php echo $dob; ?>"><br><br>
                                Email :
                                <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
                                NID :
                                <input type="text" name="nid" value="<?php echo $nid; ?>"><br><br>
                                Address :
                                <input type="text" name="address" value="<?php echo $address; ?>"><br><br>
                                <input type="submit" class="button submitbutton" name="insert" value="Insert">

                                <input type="submit" class="button resetbutton" name="delete" value="Delete">
                                <input type="submit" class="button updatebutton" name="update" value="Update"><br>

                        </form>
                        <?php  ?>
                    </td>
                </tr>
        </center>
</body>

</html>