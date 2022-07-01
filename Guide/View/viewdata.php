<?php
include ("../control/viewdatahandle.php");
?>

<html>
<head>
        <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>
    <body>

<form action="" method="post">
<input type="submit" name="fetch" class="button submitbutton" value="Fetch Data">
</form>


<form action="" method="post">

<input type="text" name="searchdata" id="fname" onkeyup="fetchuser()">
<p id="message"></p>
<input type="submit" name="search" value="Search">
<input type="submit" name="delete" value="Delete">
</form>

<form action="" method="post">

<input type="text" name="fname" value="<?php echo $fname; ?>">
<input type="text" name="lname" value="<?php echo $lname; ?>">
<input type="text" name="age" value="<?php echo $age; ?>">
<input type="text" name="salary" value="<?php echo $salary; ?>">

<input type="submit" name="update" value="Update">
</form>

<script src="../js/myjs.js"></script>
</body>
</html>