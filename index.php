<!DOCTYPE html>
<html lang="en">
<head>
  <title>signin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>

<div class="container">
    <div class="row">

        <div class="col-sm-6">
            <br>
            <div class="panel panel-danger">
                <div class="panel-heading"><h3>Login</h3></div>
                <div class="panel-body">
                
                
                <?php
                    if(isset($_GET['run']) && $_GET['run']=="failed"){
                        echo "Your Credentials do not match!!";
                    }
                
                
                ?>        



                    <form role="form" action="signin.php" method="POST">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="loginmail" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="loginpassword" id="pwd" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h3>SignUp</h3></div>
                    <div class="panel-body">
                    <?php 
                        if(isset($_GET['run']) && $_GET['run']=="success"){
                            echo "<mark>registered successfully!!</mark>";
                        }
                    ?>
                        <form role="form" method="POST" action="signup.php">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

    </div>  
</div>

</body>
</html>
