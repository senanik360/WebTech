<?php

function jsonSave($jsonFileName, $newDataArr) {
    $jsonFile = file_get_contents($jsonFileName); //Taking all the contents from json file
    $jsonDecodeArr = json_decode($jsonFile, true); //Decoding all the contents (For work)
    $jsonDecodeArr[] = $newDataArr; // add new contents to array end
    $saveJsonData = json_encode($jsonDecodeArr); //Encoding all the data (For save)
    file_put_contents($jsonFileName, $saveJsonData); //Putting all the contents into JsonFile
    //return $saveJsonData; 
}

function jsonGet($jsonFileName) {   ///For using existing data from json file
    $jsonFile = file_get_contents($jsonFileName);
    $jsonDecodeArr = json_decode($jsonFile, true);
    return $jsonDecodeArr;
}

?>

