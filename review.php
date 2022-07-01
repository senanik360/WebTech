<?php include 'reviewcheck.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="reviewcheck.php" method="post">
        <center>
            <tr>
                <td><textarea name="review" id="" cols="50" rows="10" placeholder="Give your rivew here"
                        required></textarea> <?php echo $thank; ?></td>
                <br><br>
                <input type="submit" name="submit">
            </tr>
        </center>

</body>

</html>