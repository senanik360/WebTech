<?php 
include ("../Model/model.php");
$e_id=$r_cat=$acco=$ac=$rent="";

if(isset($_POST["fetch"]))
{
$mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->fetchData($conobj, "edb");
if($mydata->num_rows > 0)
{
echo "<table>";

    while($row=$mydata->fetch_assoc())
    {
    echo "<tr>";
        echo "<td>".$row["e_id"]."</td>";
        echo "<td>".$row["r_cat"]."</td>";
        echo "<td>".$row["acco"]."</td>";
        echo "<td>".$row["ac"]."</td>";
        echo "<td>".$row["rent"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "no data found";
}

}
if(isset($_POST["search"]))
{


    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchUser($conobj, "edb",$_POST["searchdata"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
           $e_id=$row["e_id"];
            $r_cat=$row["r_cat"];
            $acco=$row["acco"];
            $ac=$row["ac"];
            $rent=$row["rent"];
         
        }
    

    }
    else{
        echo "no data found";
    }
    


}



if(isset($_POST["update"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->updateData("edb",$_POST["e_id"],$_POST["r_cat"],$_POST["acco"],$_POST["ac"],$_POST["rent"],$conobj);

}

if(isset($_POST["delete"]))
{

    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->deleteData("edb",$_POST["searchdata"],$conobj);

}

?>