<?php
 include '../Control/toutplandbcheck.php';

?>

<!DOCTYPE html>

<html>
<head> 
    <link rel="stylesheet" type="text/css" href="../Css/mystyle.css">
    <script defer src="../js/myjs.js"></script>
    </head>
    <body background="tp.jpg">
        <br><br>
         
     
        <div id="relative">
    <marquee width="100%" direction="left" height="100px">Enjoy Your Tour &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Stay safe &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Enjoy Your Tour &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp Stay safe
    </marquee>
</div>
<div class="body1">
    <br><br><br>
    <center><h1> Tour Plan </h1>
<br><br><br><br><br>

    </center>
    <center>
        <p>
           <form>
           <table>

           <form action="" method="post"><br>
               <input type="text" name="searchData" placeholder="Tourist Name">
               <input type="submit" name="search" value="Search"><br><br>

           </form>
           <tr>
               <td>
                   <form action="" method="post">
                       <div id="error"></div>
                       <form id="form" action="" method="GET">
                           <div>
                           <lable for="tname"> Tourist Name :</lable>
                           <input id="tname" type="text" name="tname" value="<?php echo $tname; ?>"><br><br></div>
                           <div>
                           <lable for="tcontact"> Tourist Contact :</lable>
                           <input id="tcontact" type="number" name="tcontact" value="<?php echo $tcontact; ?>"><br><br></div>
                           <div>
                           <lable for="date"> Date : </lable>
                           <input id="date" type="date" name="date" value="<?php echo $date; ?>"><br><br></div>
                           <div> 
                           <lable for="member"> Member : </lable>
                           <input id="member" type="number" name="member" value="<?php echo $member; ?>"><br><br></div>
                           <div>
                           <lable for="payment"> Payment :
                           <input id="payment" type="number" name="payment" value="<?php echo $payment; ?>"><br><br></lable>
                          
                           <input type="submit" class="button submitbutton" name="insert" value="Insert">
                           <input type="submit" class="button resetbutton" name="delete" value="Delete">
                           <input type="submit" class="button updatebutton" name="update" value="Update"><br>

                   </form>
                   
               </td>
           </tr>
   </center>

</body>

</html>