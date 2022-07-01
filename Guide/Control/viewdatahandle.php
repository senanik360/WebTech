<?php 
include ("../model/model.php");
$fname=$lname=$age=$salary="";

if(isset($_POST["fetch"]))
{
$mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->fetchData($conobj, "person");
if($mydata->num_rows > 0)
{
echo "<table>";

    while($row=$mydata->fetch_assoc())
    {
    echo "<tr>";
        echo "<td>".$row["fname"]."</td>";
        echo "<td>".$row["lname"]."</td>";
        echo "<td>".$row["age"]."</td>";
        echo "<td>".$row["salary"]."</td>";
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
    
    $mydata=$mydb->searchUser($conobj, "person",$_POST["searchdata"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
           $fname=$row["fname"];
            $lname=$row["lname"];
            $age=$row["age"];
            $salary=$row["salary"];
         
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
    $mydb->updateData("person",$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["salary"],$conobj);

}

if(isset($_POST["delete"]))
{

    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->deleteData("person",$_POST["searchdata"],$conobj);

}

?>