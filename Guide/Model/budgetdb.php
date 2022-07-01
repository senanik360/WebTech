<?php
class DB
{
    function opencon()
    {
        $DBHostname = 'localhost';
        $DBUsername = 'root';
        $DBpass = '';
        $DBName = 'project';

        $conn = new mysqli($DBHostname, $DBUsername, $DBpass, $DBName);
        if ($conn->connect_error) {
            echo "can't connection object" . $conn->connect_error . '<br>';
        }
        return $conn;
    }

    function closecon($conn)
    {
        $conn->close();
    }
    function searchData($tablename, $conn, $bft)
    {
        $sqlstr = "SELECT * FROM $tablename WHERE bft='$bft'";
        $results = $conn->query($sqlstr);
        return $results;
    }
    function InsertData($bft,$cot, $cou, $tablename, $conn) 
        {
        $sqlstr = "INSERT INTO $tablename (bft,cot,cou) VALUES ($bft, $cot, $cou)";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function deleteData($tablename, $conn, $bft)
    {
        $sqlstr = "DELETE FROM $tablename WHERE bft = '$bft'";
        if ($conn->query($sqlstr) == true) {
            echo 'deleted successfuly';
        } else {
            echo "can't delete";
        }
    }

    function updateData($bft,$cot, $cou, $tablename, $conn) 
    {
        $sqlstr = "UPDATE $tablename SET bft=$bft, cot=$cot, cou=$cou  WHERE bft= '$bft'";
        if ($conn->query($sqlstr) == true) {
            echo 'Updated successfuly';
        } else {
            echo "can't update";
        }
    }
}

?>