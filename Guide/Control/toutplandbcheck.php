<?php
include '../Model/tourplandb.php';
$tname = $tcontact = $date = $member = $payment = '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('tourplan', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $tname = $row['tname'];
            $tcontact = $row['tcontact'];
            $date = $row['date'];
            $member = $row['member'];
            $payment = $row['payment'];

        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $tname = $_POST['tname'];
    $tcontact = $_POST['tcontact'];
    $date = $_POST['date'];
    $member = $_POST['member'];
    $payment = $_POST['payment'];
    if (empty($tname) || empty($tcontact) || empty($date) || empty($member) || empty($payment) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $tname, $tcontact, $date, $member, $payment, 'tourplan', $conobj );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('tourplan', $conobj, $_POST['tname']);
}
if (isset($_POST['update'])) {
    $tname = $_POST['tname'];
    $tcontact = $_POST['contact'];
    $date = $_POST['date'];
    $member = $_POST['member'];
    $payment = $_POST['payment'];
    if (empty($tname) || empty($tcontact) || empty($date) || empty($member) || empty($payment) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $tname, $tcontact, $date, $member, $payment, 'tourplan', $conobj );
        $mydb->opencon($conobj);
    }
    }

?>