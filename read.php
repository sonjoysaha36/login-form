<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $success = false;
    
    $file = fopen('demo2.txt', 'a+');
    
    while( !feof($file)){
        $credentials = fgets($file);
        $arrayData   = explode(' ', $credentials);
        $db_email    = $arrayData[0];
        $db_password = $arrayData[1];
    
        if($username === $db_email && $password === $db_password){
            $success = true;
        }
    }
    
    if($success == true){
        $_SESSION['name'] = $username;
        header("Location: profile.php");
    } else{
        $_SESSION['error'] = "Invalid username password";
        header("Location: login.php");
    }
    
    fclose($file);
}
?>
</body>
</html>