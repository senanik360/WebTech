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
    function searchData($tablename, $conn, $tname)
    {
        $sqlstr = "SELECT * FROM $tablename WHERE tname='$tname'";
        $results = $conn->query($sqlstr);
        return $results;
    }
    function InsertData($tname,$tcontact, $date, $member, $payment, $tablename, $conn) 
        {
        $sqlstr = "INSERT INTO $tablename (tname,tcontact,date,member,payment) VALUES ('$tname', $tcontact, $date, $member, $payment)";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function deleteData($tablename, $conn, $tname)
    {
        $sqlstr = "DELETE FROM $tablename WHERE tname = '$tname'";
        if ($conn->query($sqlstr) == true) {
            echo 'deleted successfuly';
        } else {
            echo "can't delete";
        }
    }

    function updateData($tname,$tcontact, $date, $member, $payment, $tablename, $conn) 
    {
        $sqlstr = "UPDATE $tablename SET tname='$tname', tcontract=$tcontact, date=$date, member=$member, payment=$payment WHERE tname = '$tname'";
        if ($conn->query($sqlstr) == true) {
            echo 'Updated successfuly';
        } else {
            echo "can't update";
        }
    }
}

?>