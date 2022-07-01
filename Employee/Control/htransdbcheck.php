<?php
include '../Model/htransdb.php';
$from = $to = $toj = $tor=  '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('htransdb', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $from = $row['from'];
            $to = $row['to'];
            $toj = $row['toj'];
            $tor = $row['tor'];
            
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $from = $_POST['from'];
            $to = $_POST['to'];
            $toj = $_POST['toj'];
            $tor = $_POST['tor'];

    if (empty($from) || empty($to) || empty($toj) || empty($tor) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $from, $to, $toj, $tor, 'htransdb', $conobj );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('from', $conobj, $_POST['from']);
}
if (isset($_POST['update'])) {
    $from = $_POST['from'];
            $to = $_POST['to'];
            $toj = $_POST['toj'];
            $tor = $_POST['tor'];
    if(empty($from) || empty($to) || empty($toj) || empty($tor) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $from, $to, $toj, $tor, 'htransdb', $conobj );
        $mydb->opencon($conobj);
    }
    }

?>