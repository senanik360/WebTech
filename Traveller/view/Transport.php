<?php
if (isset($_REQUEST['error']) && !empty($_REQUEST['error'])) {
    $error = $_REQUEST['error'];
    if ($error == 'data_not_insert_error') {
        echo "<center>Some inputs are missing</center>";
    }
    if ($error == 'data_clear_fail') {
        echo "<center>Data Cleared Fail</center>";
    }
}
if (isset($_REQUEST['success']) && !empty($_REQUEST['success'])) {
    $success = $_REQUEST['success'];
    if ($success == 'data_insert_success') {
        echo "<center>Data save successfully</center>";
    }
    if ($success == 'data_clear_success') {
        echo "<center>Data cleared successfully</center>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Transport System</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
</head>

<body>
    <center>
        <h2><u>Update Table information here</u></h2>

        <table class="table">
            <form action="../controller/TransportController.php" method="post">
                <label for="vehicle_type">Vehicle Type</label>
                <select name="vehicle_type" id="vehicle_type">
                    <option value="bus">Bus</option>
                    <option value="train">Train</option>
                    <option value="plane">Plane</option>
                    <option value="lonch">Lonch</option>
                </select><br><br>
                <label for="vehicle_name">Vehicle Name</label>
                <input type="text" name="vehicle_name" id="vehicle_name"><br><br>

                <label for="from_location">From Location</label>
                <select name="from_location" id="from_location">
                    <option value="sylhet">Sylhet</option>
                    <option value="kuakata">Kuakata</option>
                    <option value="bandarban">Bandarban</option>
                    <option value="cox's bazar">Cox's Bazar</option>
                    <option value="saint martin">Saint Martin</option>
                    <option value="sajek">Sajek</option>
                </select><br><br>

                <label for="to_destination">To Destination</label>
                <input type="text" name="to_destination" id="to_destination"><br><br>

                <label for="rent_per_seat">Rent (per seat)</label>
                <input type="number" name="rent_per_seat" id="rent_per_seat"><br><br>

                <label for="contact_no">Contact No</label>
                <input type="text" name="contact_no" id="contact_no"><br><br>
        </table>
        <button name="insert_transport_info" id="insert_transport_info" class="submit-button">Save Info</button>
        <button name="clear_data" id="clear_data" class="resetbutton">Clear Data</button>


        </form>
    </center>

</body>

</html>