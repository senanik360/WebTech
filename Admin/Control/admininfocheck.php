<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body background="../file/s1.jpg">
    <center>
        <table>
            <h1 color="blue"><i>Admin's Info.</i>
            </h1>

            <tr>
                <td> <?php
                $data = file_get_contents('../View/data.json');
                $mydata = json_decode($data);
                $count = 0;
                foreach ($mydata as $myobject) {
                    echo " <img src='../view/admindp.jpg' width='200px' height='150px'> <br>";

                    echo 'Name : ' . $myobject->first_name;
                    echo ' ' . $myobject->Last_name;
                    echo '<br>';
                    echo 'Phone : ' . $myobject->mobile_no;
                    echo '<br>';
                    echo '||-------------------------------||<br> <br> <br>';
                }
                ?></td>
            </tr>
    </center>
</body>

</html>