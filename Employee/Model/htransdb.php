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
    function searchData($tablename, $conn, $from)
    {
        $sqlstr = "SELECT * FROM $tablename WHERE tname='$from'";
        $results = $conn->query($sqlstr);
        return $results;
    }
    function InsertData($from,$to,$toj, $tor, $tablename, $conn) 
        {
        $sqlstr = "INSERT INTO $tablename (from,to,toj, tor) VALUES ('$from', '$to', $toj, $tor)";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function deleteData($tablename, $conn, $from)
    {
        $sqlstr = "DELETE FROM $tablename WHERE from = '$from'";
        if ($conn->query($sqlstr) == true) {
            echo 'deleted successfuly';
        } else {
            echo "can't delete";
        }
    }

    function updateData($from,$to,$toj, $tor, $tablename, $conn) 
    {
        $sqlstr = "UPDATE $tablename SET from='$from', to=$to, toj=$toj, tor=$tor  WHERE from = '$from' ";
        if ($conn->query($sqlstr) == true) {
            echo 'Updated successfuly';
        } else {
            echo "can't update";
        }
    }
}

?>