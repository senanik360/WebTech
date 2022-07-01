

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <center>
        <table>

            
            <tr>
                <td> <?php
                if (isset($_POST['submit'])){
                    $formdata = [
                    'feedback' => $_POST['FoG'],
                    ];
                    $existingdata = file_get_contents('rdata.json');
                    $tempJSONdata = json_decode($existingdata);
                    $tempJSONdata[] = $formdata;
                    //Convert updated array to JSON
                    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

                    //write json data into data.json file
                    if (file_put_contents('rdata.json', $jsondata)) {
                        echo 'Data successfully saved <br>';
                    } else {
                        echo 'no data saved';
                    }
                        }
                ?></td>

            </tr>
    </center>
</body>

</html>

