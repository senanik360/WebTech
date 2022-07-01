<?php
include '../Control/budgetdbcheck.php';
?>


<!DOCTYPE html>

<html>
    <head> 
    <link rel="stylesheet" type="text/css" href="../Css/mystyle.css">
    </head>
    <body background ="bu.jpg">
        <br><br><br>
        <br><br><br><br>
        <div class="body2">
    <center><h1> Budget Plan </h1>
    </center>
           <center>
               <p>
               <form action="" method="post"><br>
               <input type="text" name="searchData" placeholder="Budget for transportation">
               <input type="submit" name="search" value="Search"><br><br>

           </form>
           <tr>
               <td>
                   <form action="" method="post">
                       <p  id="labels"> Budget for transportation :
                           <input type="number" name="bft" value="<?php echo $bft; ?>"><br><br>
                           Cost of Food :
                           <input type="number" name="cot" value="<?php echo $cot; ?>"><br><br>
                           Cost Of Utlities :
                           <input type="number" name="cou" value="<?php echo $cou; ?>"><br><br>
                          
                           <input type="submit" class="button submitbutton" name="insert" value="Insert">
                           <input type="submit" class="button resetbutton" name="delete" value="Delete">
                           <input type="submit" class="button updatebutton" name="update" value="Update"><br>

                   </form>
</p> </div>
</center>
    </body>
</html>