<?php
include '../Model/model.php';
$e_id = $r_cat = $acco = $ac= $rent = '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('employee', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $e_eid = $row['e_id'];
            $r_cat = $row['r_cat'];
            $acco = $row['acco'];
            $ac = $row['ac'];
            $rent = $row['rent'];
           
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $e_eid = $row['e_id'];
    $r_cat = $row['r_cat'];
    $acco = $row['acco'];
    $ac = $row['ac'];
    $rent = $row['rent'];
    if (
        empty($e_id) ||
        empty($r_cat) ||
        empty($acco) ||
        empty($ac) ||
        empty($rent)
    ) {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData(
            $e_id,
            $r_cat,
            $acco,
            $ac,
            $rent,
            'employee',
            $conobj
        );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('employee', $conobj, $_POST['e_id']);
}
if (isset($_POST['update'])) {
    $e_id = $_POST['e_id'];
    $r_cat = $_POST['r_cat'];
    $acco = $_POST['acco'];
    $ac = $_POST['ac'];
    $rent = $_POST['rent'];
    
    if (
        empty($e_id) ||
        empty($r_cat) ||
        empty($acco) ||
        empty($ac) ||
        empty($rent)
    ) {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $results = $mydb->updateData(
            $e_eid,
            $r_cat,
            $acco,
            $ac,
            $rent,
            'employee',
            $conobj
        );
    }
}
?>