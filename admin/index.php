<?php
if($_POST){
    header('Location:dashboard.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Backend</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
  </head>
  <body>
  
        <div class="container">
            <br><br><br><br>
            <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                
                <div class="card">
                    <div class="card-header">
                        Login Practica PHP
                    </div>
                    <div class="card-body">
                        
                    <form method="POST">
                    <div class = "form-group">
                    <label>User</label>
                    <input type="text" class="form-control" name="user" placeholder="Enter user">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pswd" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    </form>
                    
                    

                    </div>
                    <div class="card-footer text-muted">
                        Forgot password?
                    </div>
                </div>

                </div>
                
            </div>
        </div>
  </body>
</html>