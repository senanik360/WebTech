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
    function searchData($tablename, $conn, $cin)
    {
        $sqlstr = "SELECT * FROM $tablename WHERE cin='$cin'";
        $results = $conn->query($sqlstr);
        return $results;
    }
    function InsertData($cin,$cout,$ydetails, $tablename, $conn) 
        {
        $sqlstr = "INSERT INTO $tablename (cin,cout,ydetails) VALUES ($cin, $cout, '$ydetails')";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function deleteData($tablename, $conn, $cin)
    {
        $sqlstr = "DELETE FROM $tablename WHERE cin = '$cin'";
        if ($conn->query($sqlstr) == true) {
            echo 'deleted successfuly';
        } else {
            echo "can't delete";
        }
    }

    function updateData($cin,$cout,$ydetails, $tablename, $conn) 
    {
        $sqlstr = "UPDATE $tablename SET cin=$cin, cout=$cout, ydetails=$ydetails  WHERE cin = '$cin'";
        if ($conn->query($sqlstr) == true) {
            echo 'Updated successfuly';
        } else {
            echo "can't update";
        }
    }
}

?>