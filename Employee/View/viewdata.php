<?php
include ("../Control/viewdatahandle.php");
?>

<html>
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

<input type="text" name="e_id" value="<?php echo $e_id; ?>">
<input type="text" name="r_cat" value="<?php echo $r_cat; ?>">
<input type="text" name="acco" value="<?php echo $acco; ?>">
<input type="text" name="ac" value="<?php echo $ac; ?>">
<input type="text" name="rent" value="<?php echo $rent; ?>">

<input type="submit" name="update" value="Update">
</form>

</body>
</html>