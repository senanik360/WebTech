<?php
require '../db/DbConnection.php';

function getAllBusList($from_loc){

    $con = connectDB();
    $sql ='select * from transports where vehicle_type="bus" and from_location="'.$from_loc.'"';
    $result = $con->query($sql);
    if($result){
        if(mysqli_num_rows($result) == 0){
                echo"<center>No Data for this transport!</center>";
                exit();
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
}

if(isset($_POST['insert_transport_info'])){
    // var_dump($_POST);
    // exit;
    $error = 0;
    if(isset($_POST['vehicle_type']) && !empty($_POST['vehicle_type'])){
        $vehicle_type = $_POST['vehicle_type'];
    }else{
        $error += 1;
    }
    
    $vehicle_name = $_POST['vehicle_name'];

   
    if(isset($_POST['from_location']) && !empty($_POST['from_location'])){
        $from_location = $_POST['from_location'];
    }else{
        $error += 1;
    }
   
    if(isset($_POST['to_destination']) && !empty($_POST['to_destination'])){
        $to_destination = $_POST['to_destination'];
    }else{
        $error += 1;
    }
   
    if(isset($_POST['rent_per_seat']) && !empty($_POST['rent_per_seat'])){
        $rent_per_seat = $_POST['rent_per_seat'];
    }else{
        $error += 1;
    }
   
        $contact_no = isset($_POST['contact_no']) ? $_POST['contact_no'] : null;

    if($error>0){
        header('Location: ../view/Transport.php?error=data_not_insert_error');
    }

    $con = connectDB();
    $sql = "INSERT INTO `transports` (`vehicle_type`, `vehicle_name`, `from_location`, `to_destination`, `rent_per_seat`, `contact_no`) VALUES (?,?,?,?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssssds',$vehicle_type,$vehicle_name,$from_location,$to_destination,$rent_per_seat,$contact_no);
    $result = $stmt->execute();
    $con->close();
    if($result){
        header('Location: ../view/Transport.php?success=data_insert_success');
    }



}


#####################################################################################################################

function getAllPlaneList($from_loc){

    $con = connectDB();
    $sql ="select * from transports where vehicle_type='plane' and from_location='".$from_loc."'";
    $result = $con->query($sql);
    if($result){
        if(mysqli_num_rows($result) == 0){
            echo"<center>No Data for this transport!</center>";
            exit();
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
}



#################################################################################################################

function getAllTrainList($from_loc){
    
    $con = connectDB();
    $sql ="select * from transports where vehicle_type='train' and from_location='".$from_loc."'";
    $result = $con->query($sql);
    if($result){
        if(mysqli_num_rows($result) == 0){
            echo"<center>No Data for this transport!</center>";
            exit();
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
}


###################################################################################################################

function getAllLonchList($from_loc){

    $con = connectDB();
    $sql ="select * from transports where vehicle_type='lonch' and from_location='".$from_loc."'";
    $result = $con->query($sql);
    if($result){
        if(mysqli_num_rows($result) == 0){
            echo"<center>No Data for this transport!</center>";
            exit();
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
}


############################################################################################################





if(isset($_POST["submit"])){

    echo "<u>Call here for booking ticket</u><br><br>";
    if(isset($_POST["transport"]) && $_POST["transport"] =='bus'){
        $from_loc = $_POST['from_location'];
        echo "<center><h2><u>Bus List</u></h2></center>";
        getAllBusList($from_loc);
    }


    elseif(isset($_POST["transport"]) && $_POST["transport"] =='train'){
        $from_loc = $_POST['from_location'];
        echo "<center><h2><u>Train List</u></h2></center>";
        getAllTrainList($from_loc);
    }

    elseif(isset($_POST["transport"]) && $_POST["transport"] =='plane'){
        $from_loc = $_POST['from_location'];
        echo "<center><h2><u>Plane List</u></h2></center>";
        getAllPlaneList($from_loc);
    }

    else if(isset($_POST["transport"]) && $_POST["transport"] =='lonch'){
        $from_loc = $_POST['from_location'];
        echo "<center><h2><u>Lonch List</u></h2></center>";
        getAllLonchList($from_loc);
    }
        
    
}


if(isset($_POST["clear_data"])){
    $conn=connectDB();
    $clear = "DELETE FROM transports";
    $result = $conn->query($clear);
    $con->close();
    if($result){
        header('Location: ../view/Transport.php?success=data_clear_success');
    }
    else{
        header('Location: ../view/Transport.php?error=data_clear_fail');
    }
    
}

?>