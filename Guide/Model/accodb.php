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
    function searchData($tablename, $conn, $s_see)
    {
        $sqlstr = "SELECT * FROM $tablename WHERE s_see='$s_see'";
        $results = $conn->query($sqlstr);
        return $results;
    }
    function InsertData($s_see,$localfood, $tablename, $conn) 
        {
        $sqlstr = "INSERT INTO $tablename (s_see,localfood) VALUES ($s_see, $localfood)";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function deleteData($tablename, $conn, $s_see)
    {
        $sqlstr = "DELETE FROM $tablename WHERE s_see = '$s_see'";
        if ($conn->query($sqlstr) == true) {
            echo 'deleted successfuly';
        } else {
            echo "can't delete";
        }
    }

    function updateData($s_see,$localfood, $tablename, $conn) 
    {
        $sqlstr = "UPDATE $tablename SET s_see=$s_see, localfood=$localfood,  WHERE s_see = '$s_see'";
        if ($conn->query($sqlstr) == true) {
            echo 'Updated successfuly';
        } else {
            echo "can't update";
        }
    }
}

?>