<?php
include '../Model/budgetbd.php';
$bft = $cot = $cou = '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('dbplan', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $bft = $row['bft'];
            $cot = $row['cot'];
            $cou = $row['cou'];
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $bft = $_POST['bft'];
    $cot = $_POST['cot'];
    $cou = $_POST['cou'];
    if (empty($bft) || empty($cot) || empty($cou) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $bft, $cot, $cou, 'dbplan', $conobj );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('dbplan', $conobj, $_POST['bft']);
}
if (isset($_POST['update'])) {
    $bft = $_POST['bft'];
    $cot = $_POST['cot'];
    $cou = $_POST['cou'];
    if (empty($bft) || empty($cot) || empty($cou) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $bft, $cot, $cou, 'dbplan', $conobj );
        $mydb->opencon($conobj);
    }
    }

?>