<?php
require '../db/DbConnection.php';

$vehicle_type = isset($_POST['vehicle_type']) ? $_POST['vehicle_type'] : '';
$from_location = isset($_POST['from_location']) ? $_POST['from_location'] : '';

$con = connectDB();
$sql ="select * from transports where vehicle_type='".$vehicle_type."' and from_location='".$from_location."'";
$result = $con->query($sql);
if($result){
    $count = mysqli_num_rows($result);
    if($count==0){
        echo "<center><h3>There is no such type vehicle. Please select a different type of vehicle</h3></center>";
        return;
    }
    
    $htmlTableOutput = '';
    $htmlTableOutput .= "<table style='border: 1px solid black;'>";
    $htmlTableOutput .= "<th style='border: 1px solid'>Vehicle Name</th><th style='border: 1px solid'>From Location</th><th style='border: 1px solid'>To Destination</th><th style='border: 1px solid'>Rent (per seat)</th><th style='border: 1px solid'>Contact</th>";
    while($row = $result->fetch_assoc()){
        $htmlTableOutput .= "<tr>";
        
        $htmlTableOutput .= "<td style='border: 1px solid'>";
        $htmlTableOutput .= $row['vehicle_name'];
        $htmlTableOutput .= "</td>";
        
        $htmlTableOutput .= "<td style='border: 1px solid'>";
        $htmlTableOutput .= $row['from_location'];
        $htmlTableOutput .= "</td>";
        
        $htmlTableOutput .= "<td style='border: 1px solid'>";
        $htmlTableOutput .= $row['to_destination'];
        $htmlTableOutput .= "</td>";
        
        $htmlTableOutput .= "<td style='border: 1px solid'>";
        $htmlTableOutput .= $row['rent_per_seat'];
        $htmlTableOutput .= "</td>";
        
        $htmlTableOutput .= "<td style='border: 1px solid'>";
        $htmlTableOutput .= $row['contact_no'];
        $htmlTableOutput .= "</td>";
        
        $htmlTableOutput .= "</tr>";
    }
    $htmlTableOutput .= "<table>";
    echo $htmlTableOutput;
}
$con->close();
