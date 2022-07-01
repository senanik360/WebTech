<?php
session_start();
//$existingdata = file_get_contents('data.json');
//$tempJSONdata = json_decode($existingdata);
//$tempJSONdata[] = $formdata;
//Convert updated array to JSON
//$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

//$data = file_get_contents('data.json');
//$mydata = json_decode($data);
$email = $password = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_found = false;
    $data = file_get_contents('../View/data.json');
    $mydata = json_decode($data);
    foreach ($mydata as $myobject) {
        if ($myobject->email == $email && $myobject->password == $password) {
            $user_found = true;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $_POST['password'];
        }
    }
    if ($user_found) {
        header('location: ../view/profile.php');
    } else {
        echo 'wrong info.!';
    }

    /*$em = $_POST['email'];
    $pass = $_POST['password'];

    $user_found = false;
    $data = file_get_contents('../View/data.json');
    $mydata = json_decode($data);
    foreach ($mydata as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            $user_found = true;
            break;
        }
    }
    if ($user_found) {
        // session for log in user
        // session_start();
        //$_SESSION['email'] = $email;

        // set cookie for remember me functionality
        /* if(isset($_POST['remember_me']) && !empty($_POST['remember_me'])){
            setcookie('user_mail', $email, time() + (86400 * 30), "/");
            setcookie('user_ps', base64_encode($password), time() + (86400 * 30), "/");
        }

        header('Location: ../view/profile.php');
    }*/
}
/* if ($user_found) {
        // session for log in user
        session_start();
        $_SESSION['email'] = $email;

        // set cookie for remember me functionality
        if (isset($_POST['remember_me']) && !empty($_POST['remember_me'])) {
            setcookie('user_mail', $email, time() + 86400 * 30, '/');
            setcookie(
                'user_ps',
                base64_encode($password),
                time() + 86400 * 30,
                '/'
            );
        }

        //header('Location: ../view/profile.php');
    } else {
        // header('Location: ../view/login.php?error=login_error');
    }
    
}

/*
    if ($_POST['uname'] == 'abc' && ($_POST['pass'] = '123')) {
        $_SESSION['uname'] = $_POST['uname'];
        $_SESSION['pass'] = $_POST['pass'];

        $data = file_get_contents('data.json');
        $mydata = json_decode($data);

        //echo "my value: ".$mydata[0]->Name;
        foreach ($mydata as $myobject) {
            foreach ($myobject as $key => $value) {
                if ($key == $_POST['uname'] && $value == $_POST['pass']) {
                }
            }
        }
        header('location: profile.php');
    } else {
        echo 'You are not a valid user.';
    }*/
?>