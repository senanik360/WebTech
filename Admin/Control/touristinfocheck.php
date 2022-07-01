<?php
include '../model/touristdb.php';
$fname = $lname = $phone = $dob = $email = $nid = $address = '';

if (isset($_POST['search'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->searchData('tourist', $conobj, $_POST['searchData']);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            $fname = $row['fname'];
            $lname = $row['lname'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $email = $row['email'];
            $address = $row['address'];
            $nid = $row['nid'];
        }
    } else {
        echo 'no data found';
    }
}
if (isset($_POST['insert'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $nid = $_POST['nid'];
    $address = $_POST['address'];
    if (
        empty($fname) ||
        empty($lname) ||
        empty($phone) ||
        empty($dob) ||
        empty($email) ||
        empty($nid) ||
        empty($address)
    ) {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $mydb->InsertData(
            $fname,
            $lname,
            $phone,
            $dob,
            $email,
            $nid,
            $address,
            'tourist',
            $conobj
        );
        $mydb->opencon($conobj);
    }
}
if (isset($_POST['delete'])) {
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $results = $mydb->deleteData('tourist', $conobj, $_POST['nid']);
}
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $nid = $_POST['nid'];
    $address = $_POST['address'];
    if (
        empty($fname) ||
        empty($lname) ||
        empty($phone) ||
        empty($dob) ||
        empty($email) ||
        empty($nid) ||
        empty($address)
    ) {
        echo 'please insert all field';
    } else {
        $mydb = new DB();
        $conobj = $mydb->opencon();
        $results = $mydb->updateData(
            $fname,
            $lname,
            $phone,
            $dob,
            $email,
            $nid,
            $address,
            'tourist',
            $conobj
        );
    }
}
?>