<?php session_start(); ?>
<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username_error = "";
    $password_error = "";
    
    $username = stripcslashes($_POST['Name']);
    $password = ($_POST['Set_Password']);
    if(empty($username)){
        $username_error = "Username Requerd";
    }
    if(strlen($password) < 3){
        $password_error = "Password must  be at last 4 character";
    }
    if($username_error || $password_error){
        $_SESSION['name_error']     = $username_error;
        $_SESSION['password_error'] = $password_error;
        header("Location:Regi_page.php");
    } else{
        
        $myFile = fopen('demo2.txt', 'a');
        
        $name      = $_POST['Name'];
        $user_pass = $_POST['Set_Password'];
        $Age       = $_POST['Age'];
        $newLine   = PHP_EOL;
        $data      = $name . " " . $user_pass . " " . $Age;
        
        fwrite($myFile, $data);
        fwrite($myFile, $newLine);
        
        fclose($myFile);
        header("Location: login.php");
    }
}

?>