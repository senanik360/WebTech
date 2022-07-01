<?php
include '../json/JsonController.php';

if(isset($_POST['submit'])){
    $email = isset($_POST["email"]) ? $_POST["email"] : ''; // ? ternary operator if left side is true then it takes post[email]
    $password = isset($_POST["password"]) ? $_POST["password"] : '';

    $userArr = jsonGet('../json/user.json');
    $user_found = false;
    foreach($userArr as $user){
        if($user['email'] == $email && $user['password'] == $password){
            $user_found = true;
            break;
        }
    }
    if($user_found){ //////// If true
        // session for log in user
        session_start();
        $_SESSION['email'] = $email;

        // set cookie for remember me functionality
        if(isset($_POST['remember_me']) && !empty($_POST['remember_me'])){
            setcookie('user_mail', $email, time() + (86400 * 30), "/");
            setcookie('user_ps', base64_encode($password), time() + (86400 * 30), "/");
        }

        else{
            setcookie('user_mail', $email, time() + 1, "/");
            setcookie('user_ps', base64_encode($password), time() + 1, "/");
        
        }
        
        
        header('Location: ../view/TravellerProfile.php');
    }

    
    else{
        header('Location: ../view/TravellerLogin.php?error=login_error');
    }
}


?>