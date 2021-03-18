<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color:powderblue;">
<div>
    <h1 style="max-width:500px;margin:auto;">Registration Form</h1>
    <form style="text-align:center;" action="regi_form.php" method="post">
        <div style="max-width:500px;margin:auto;" class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="">Name:</label>
                    <input type="text" name="Name" class="form-control" />
                    <span class="text-danger">
                     <?php
                     if( !empty($_SESSION['name_error'])){
                         echo $_SESSION['name_error'];
                     } ?></span>
                
                </div>
                <div class="form-group">
                    <label>Set_Password:</label>
                    <input type="password" name="Set_Password" class="form-control" />
                    <span class="text-danger"> <?php
                        if( !empty($_SESSION['password_error'])){
                            echo $_SESSION['password_error'];
                        } ?></span>
                
                </div>
                <div class="form-group">
                    <label>Age:</label>
                    <input type="num" name="Age" class="form-control" />
                
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-1" name="loginButton"
                            value="submit">submit
                    </button>
                </div>
                <A href="login.php">Already have an account?</A>
            
            </div>
        </div>
    
    </form>
</div>

</body>
</html>