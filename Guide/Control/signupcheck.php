<?php

$error_count = 0;
if (isset($_POST['submit'])) {
    if (isset($_POST['first_name']) and !empty($_POST['first_name'])) {
        /////
        $first_name = $_POST['first_name'];
        if (strlen($first_name) < 4) {
            $error_count++;
            echo 'Name must be given <br>';
        }
    }


        if (isset($_POST['mobile_no']) and !empty($_POST['mobile_no'])) {
            $mobile_no = $_POST['mobile_no'];
            if (strlen($mobile_no) != 11) {
                $error_count++;
                echo 'Invalid mobile number! <br>';
            }
            if (substr($mobile_no, 0, 2) != '01') {
                /////////////
                $error_count++;
                echo 'Not a valid mobile number!<br>';
            }
        }

        if (isset($_POST['nid']) and !empty($_POST['nid'])) {
            $nid = $_POST['nid'];
            if (strlen($nid) != 13) {
                $error_count++;
                echo 'Invalid NID! <br>';
            }
        }

        $email = $_POST['email'];
    if (
        empty($email) ||
        !preg_match(
            '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            $email
        )
    ) {
        echo 'Invalid email';
    } else {
        echo 'Your email is ' . $email . '<br>';
    }

        $date_of_birth = ''; ////////////////
        if (
            isset($_POST['date_of_birth']) and !empty($_POST['date_of_birth'])
        ) {
            $date_of_birth = $_POST['date_of_birth'];
        }

        $location = ''; ////////////////
        if (isset($_POST['location']) and !empty($_POST['location'])) {
            $location = $_POST['location'];
        }

        if (isset($_POST['password']) and !empty($_POST['password'])) {
            $password = $_POST['password'];
        }

        if (
            isset($_POST['confirm_password']) and
            !empty($_POST['confirm_password'])
        ) {
            $confirm_password = $_POST['confirm_password'];
        }

        if ($password != $confirm_password) {
            $error_count++;
            echo "Password doesn't match with your confirm password<br>";
        }

        $uppercase = preg_match('@[A-Z]@', $password);

        $lowercase = preg_match('@[a-z]@', $password);

        $number = preg_match('@[0-9]@', $password);

        $specialChars = preg_match('@[^\w]@', $password);

        if (
            !$uppercase ||
            !$lowercase ||
            !$number ||
            !$specialChars ||
            strlen($password) < 8
        ) {
            echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            $error_count++;
        }

        if ($error_count == 0) {
            $formdata = [
                'first_name' => $first_name,
                'date_of_birth' => $date_of_birth,
                'email' => $email,
                'mobile_no' => $mobile_no,
                'nid' => $nid,
                'location' => $location,
                'password' => $password,
            ];
        }
        $existingdata = file_get_contents('data.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] = $formdata;
        //Convert updated array to JSON
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

        //write json data into data.json file
        if (file_put_contents('data.json', $jsondata)) {
            echo 'Data successfully saved <br>';
        } else {
            echo 'no data saved';
        }
    }
?>