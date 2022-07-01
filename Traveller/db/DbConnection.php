<?php
function connectDB()
{
    $Server = "localhost";
    $UserID = "root";
    $Password = "";
    $Database = "traveller";
        $cn = new mysqli($Server, $UserID, $Password, $Database);
        if (!$cn) {
            die("err+db connection error: " . mysqli_connect_error());
        } else{
            return $cn;
        }
        return $cn;
}

?>