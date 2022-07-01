<?php
    include '../Control/htransdbcheck.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center><h1><u>Hire Transportation</u></h1>

   <form action="" method="post"><br>
               <input type="text" name="searchData" placeholder="From">
               <input type="submit" name="search" value="Search"><br><br>

           </form>

   <label for="From">From:</label>
   <input type="Text" name="from" value="<?php echo $from; ?>"><br><br>
    <br><br>
   <label for="To">To:</label>
   <input type="Text" name="to" value="<?php echo $to; ?>"><br><br>
   <br><br>
   <label for="Time of Journey">Time of Journey:</label>
   <input type="time" name="toj" value="<?php echo $toj; ?>"><br><br>
    <br><br>
   <label for="Time of Return">Time of Return:</label>
   <input type="time" name="tor" value="<?php echo $tor; ?>"><br><br>
   <br><br>
   <label for="Bus">Bus 1h (1000/-):</label>
   <input type="checkbox" name="Bus">
    <br><br>
   <label for="Bus">Bus 2h (2000/-):</label>
   <input type="checkbox" name="Bus">
   <br><br>
   <label for="Car">Car 1h (500/-):</label>
   <input type="checkbox" name="Car">
   <br><br>
   <label for="Car">Car 2h (1000/-):</label>
   <input type="checkbox" name="Car">
   <br><br>
   <label for="Micro Bus">Micro Bus 1h (1500/-):</label>
   <input type="checkbox" name="Micro bus">
   <br><br>
   <label for="Micro Bus">Micro Bus 2h (2500/-):</label>
   <input type="checkbox" name="Micro bus">
   <br><br>
  
   <input type="submit" class="button submitbutton" name="insert" value="Insert">
   <input type="submit" class="button resetbutton" name="delete" value="Delete">
   <input type="submit" class="button updatebutton" name="update" value="Update"><br>
   </center>

</body>
</html>