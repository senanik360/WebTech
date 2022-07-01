<?php
   include '../json/JsonController.php';
   $error_count = 0;

   if(isset($_POST["submit"])){

    $first_name = $_POST["first_name"];
       if(isset($_POST["first_name"]) and !empty($_POST["first_name"])){
           if(strlen($first_name) < 2){
               $error_count++;
               echo "First name must be greater than 2 character! <br>";
           }
       }

       if(isset($_POST["last_name"]) and !empty($_POST["last_name"])){
        $last_name = $_POST["last_name"];
        if(strlen($last_name) < 2){
            $error_count++;
            echo "Last name must be greater than 2 character! <br>";
        }

        if(isset($_POST["mobile_no"]) and !empty($_POST["mobile_no"])){
            $mobile_no = $_POST["mobile_no"];
            if(strlen($mobile_no) != 11){
                $error_count++;
                echo "Invalid mobile number! <br>";
            }
            if(substr($mobile_no,0,2) != "01"){
                $error_count++;
                echo "Not a Bangladeshi mobile number!<br>";
            }

        }

        if(isset($_POST["nid"]) and !empty($_POST["nid"])){
            $nid = $_POST["nid"];
            if(strlen($nid) != 13){
                $error_count++;
                echo "Invalid NID! <br>";
            }
        }

        $email = '';
        if(isset($_POST["email"]) and !empty($_POST["email"])){
            $email = $_POST["email"];
            
        }

        $date_of_birth = '';
        if(isset($_POST["date_of_birth"]) and !empty($_POST["date_of_birth"])){
            $date_of_birth = $_POST["date_of_birth"];
            
        }

        $address = '';
        if(isset($_POST["address"]) and !empty($_POST["address"])){
            $address = $_POST["address"];
            
        }

        if(isset($_POST["password"]) and !empty($_POST["password"])){
            $password = $_POST["password"];
            
        }

        if(isset($_POST["confirm_password"]) and !empty($_POST["confirm_password"])){
            $confirm_password = $_POST["confirm_password"];
            
        }

        if($password != $confirm_password ){
            $error_count++;
            echo "Password doesn't match with your confirm password<br>";
        }






        $uppercase = preg_match('@[A-Z]@', $password);
        
        $lowercase = preg_match('@[a-z]@', $password);
        
        $number = preg_match('@[0-9]@', $password);
        
        $specialChars = preg_match('@[^\w]@',$password);
        
        
        
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 5) {
        
        echo 'Password should be at least 5 characters in length and should include at least one upper case letter, one number, and one special character.';
        $error_count++;
        
        }
        else{
        
        echo 'Strong password.<br>';
        
        }


        if($error_count == 0){
            $userData = [
                'first_name' => $first_name,
                'Last_name' => $last_name,
                'date_of_birth' => $date_of_birth,
                'email' => $email,
                'mobile_no' => $mobile_no,
                'nid' => $nid,
                'address' => $address,
                'password' => $password,

            ];

            $jsonFileName = '../json/user.json';
            $jsonSave = jsonSave($jsonFileName, $userData);
            echo "Sign Up successfully!";
            
        }
        
    
    }

       
   }



?>