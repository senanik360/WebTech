<?php
include '../Model/bookroomdb.php';
$cin = $cout = $ydetails =  '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('bookroomdb', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $cin = $row['cin'];
            $cout = $row['cout'];
            $ydetails = $row['ydetails'];
            
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $cin = $_POST['cin'];
    $cout = $_POST['cout'];
    $ydetails = $_POST['ydetails'];

    if (empty($cin) || empty($cout) || empty($ydetails) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $cin, $cout, $ydetails, 'bookroomdb', $conobj );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('cin', $conobj, $_POST['cin']);
}
if (isset($_POST['update'])) {
    $cin = $_POST['cin'];
    $cout = $_POST['cout'];
    $ydetails = $_POST['details'];

    if (empty($cin) || empty($cout) || empty($ydetails) )
    {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData( $cin, $cout, $ydetails, 'bookroomdb', $conobj );
        $mydb->opencon($conobj);
    }
    }

?>