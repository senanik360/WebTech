<?php
    include '../Control/broomdbcheck.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="hroom.jpg">

   <center><h1><u>Book Hotel</u></h1>

   <form action="" method="post"><br>
               <input type="text" name="searchData" placeholder="Check in">
               <input type="submit" name="search" value="Search"><br><br>

           </form>
   <label for="Check In">Check In:</label>
   <input type="date" name="cin" value="<?php echo $cin; ?>"><br><br>
    <br><br>
   <label for="Check Out">Check Out:</label>
   <input type="date" name="cout" value="<?php echo $cout; ?>"><br><br>
   <br><br>
   <label for="Your details">Your Detailt:</label>
   <input type="text" neme=ydetails" value="<?php echo $ydetails; ?>"><br><br>
   <br><br>
   <tr>
                          
                           <input type="submit" class="button submitbutton" name="insert" value="Insert">
                           <input type="submit" class="button resetbutton" name="delete" value="Delete">
                           <input type="submit" class="button updatebutton" name="update" value="Update"><br>
   </center>

</body>
</html>