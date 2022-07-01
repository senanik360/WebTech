<?php
include '../Model/accobd.php';
$s_see = $localfood = '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('dbacco', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $s_see = $row['s_see'];
            $localfood = $row['localfood'];
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $s_see = $_POST['s_see'];
    $localfood = $_POST['localfood'];
    if (empty($s_see) || empty($localfood) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $s_see, $localfood, 'dbacco', $conobj );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('dbacco', $conobj, $_POST['s_see']);
}
if (isset($_POST['update'])) {
    $s_see = $_POST['s_see'];
    $localfood = $_POST['localfood'];
    if (empty($s_see) || empty($localfood) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $s_see, $localfood, 'dbacco', $conobj );
        $mydb->opencon($conobj);
    }
    }

?>