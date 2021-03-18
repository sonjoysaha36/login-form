<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color:Violet;">
<div class="container">
<h1 style="max-width:500px;margin:auto;" >Login Form</h1>
    <div style="max-width:500px;margin:auto;" class="row">
        <div class="col-md-6">
            <span class="text-danger">
                <?php if(!empty( $_SESSION['error'])){
                echo  $_SESSION['error'];
                } ?></span>
            <form style="text-align:center;" action="read.php" method="post">
                <span>Username: </span>
                <input type="text" name="username">
                <br>
                <span>Password: </span>
                <input type="password" name="password">
                <input type="submit" value="login" name="login">
            </form>
        </div>
    </div>

  
</body>
</html>