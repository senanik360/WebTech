<?php

?>
<?php include '../control/employeeinfocheck.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    <script differ src'../js/myjs.js"></script>
</head>

<body background="../file/s1.jpg">
    <div class="body">
        <div class="sticky">
            <marquee>
                <h1><i>Employee's Info.</i>
                </h1>
            </marquee>
        </div>
        <center>
            <table>

                <form action="" method="post"><br>
                    <input type="text" name="searchData" placeholder="Type NID">
                    <input type="submit" class="button searchbutton" name="search" value="Search"><br><br>

                </form>
                <tr>
                    <td>
                        <div id="error"></div>
                        <form action="" method="post">
                            <form id="form" action="/" method="GET">                           
                            <div>
                                
                            <p class="p3" id="labels">
                                <label for="fname"> First Name : </label>
                                <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>"><br><br></div>
                               <div>
                               <label for="lname"> Last Name : </label>
                                <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>"><br><br></div>
                                <div>
                                <label for="phone"> Phone : </label>
                                <input type="number" id="phone" name="phone" value="<?php echo $phone; ?>"><br><br></div>
                                <div>
                                <label for="address"> Address : </label>
                                <input type="text" id="adderss" name="address" value="<?php echo $address; ?>"><br><br></div>
                                <div>
                                <label for="salary"> Salary : </label>
                                <input type="text" id="salary" name="salary" value="<?php echo $salary; ?>"><br><br></div>
                                <div>
                                <label for="NID"> NID : </label>
                                <input type="number" id="NID" name="NID" value="<?php echo $nid; ?>"><br><br></div>

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