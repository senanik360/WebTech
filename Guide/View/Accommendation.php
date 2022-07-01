<?php
include '../Control/accodbcheck.php';
?>

<!DOCTYPE html>

<html>
    <head> 
    <link rel="stylesheet" type="text/css" href="../Css/mystyle.css">
    </head>
    <body>
        <br>
        <br>
        <br><br><br><br><br>
        <br>
        <br>
        <div class="body">
    <center><h1> Accommendation </h1>
    </center>
    <center>
        <p>
        <form>
           <table>

           <form action="" method="post"><br>
               <input type="text" name="searchData" placeholder="Sight Seeing">
               <input type="submit" name="search" value="Search"><br><br>

           </form>
           <tr>
               <td>
                   <form action="" method="post">
                       <p  id="labels"> Sight Seeing :
                           <input type="text" name="s_see" value="<?php echo $s_see; ?>"><br><br>
                           Rest place
                           <input type="checkbox" name="checkboxB1"> Hotel
                           <input type="checkbox" name="checkboxB2"> Restaurant
                           <input type="checkbox" name="checkboxB2"> Tea Stall <br>
                           Local Food :
                           <input type="text" name="localfood" value="<?php echo $localfood; ?>"><br><br>
                          
                           <input type="submit" class="button submitbutton" name="insert" value="Insert">
                           <input type="submit" class="button resetbutton" name="delete" value="Delete">
                           <input type="submit" class="button updatebutton" name="update" value="Update"><br>

                   </form>
        </p>
    </center>
        </div>
            </table>
        </form>
    </body>
</html>