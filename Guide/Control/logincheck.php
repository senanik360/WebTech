<?php
session_start();
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
        header('location: ../View/profile.php');
    } else {
        echo 'wrong info.!';
    }
    if(isset($_POST['remember_me']) && !empty($_POST['remember_me'])){

        setcookie('user_mail', $email, time() + (86400 * 30), "/");
         
        setcookie('user_ps', base64_encode($password), time() + (86400 * 30), "/");
        
        
        
        }

}
?>