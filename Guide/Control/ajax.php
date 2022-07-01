<?php
include ("../Model/tourplandb.php");
if($_POST["tname"]=="")
{
    echo "empty input";
}
else{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchUser($conobj, "tourplan",$_POST["tname"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
          echo $row["tname"];
           
        }


    }
    else{
        echo "no data found";
    }
    

}


?>