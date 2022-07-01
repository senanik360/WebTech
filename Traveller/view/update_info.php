<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/MyStyle.css">
</head>

<body>
    <center>
        <div id="error_message"></div>
        <div id="success_message"></div>
    </center>

    <center>
        <h2><u>Update your informaton here</u></h2>
        <table class="table">

            <tr>
                <td>New Email :</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <center>
                <div id="error_message_mail" class="error_message"></div>
                <div id="success_message_mail"  class="success_message"></div>
            </center>
            <tr>
                <td>New Mobile Number :</td>
                <td><input type="number" name="mobile_no" id="mobile_no"></td>
            </tr>
            <center>
                <div id="error_message_no"  class="error_message"></div>
                <div id="success_message_no" class="success_message"></div>
            </center>

            <tr>
                <td>Blood Group :</td>
                <td><input type="text" name="blood" id="blood_group"></td>
            </tr>
            <center>
                <div id="error_message_blood"  class="error_message"></div>
                <div id="success_message_blood" class="success_message"></div>
            </center>


        </table><br>


        <input class="submit-button" class="button" type="submit" name="submit" value="Save" id="submit">
        <input class="resetbutton" class="button" type="reset">
    </center>
    </form>

    <script src="../js/jquery-v3.6.0.js"></script>
    <script src="../js/update-validation.js"></script>


</body>

</html>