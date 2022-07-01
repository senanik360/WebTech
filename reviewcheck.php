<?php
$thank = '';
if (isset($_POST['submit'])) {
    $formdata = [
        'review' => $_POST['review'],
    ];
    $existingdata = file_get_contents('reviewdata.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $formdata;
    //Convert updated array to JSON
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    //write json data into data.json file
    if (file_put_contents('reviewdata.json', $jsondata)) {
        $thank = 'Thank You.! <br>';
        header('location: review.php');
    } else {
        echo 'Error.!';
    }
}
?>