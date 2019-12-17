<?php

include("class/users.php");
$email=$_SESSION['email'];
$profile = new users;
$profile->users_profile($email);
//print_r($profile->data);


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prerequisite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Prerequisite</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <!-- li><a data-toggle="tab" href="#menu2">Menu2</a></li -->
    <li style="float:right"><a href="index.php">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <form action="qus_show.php" method="POST">
        <center><input type="submit" value="start quiz" class="btn btn-primary"></center>
      </form>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Profile</h3>


      <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
    <?php  
  
    foreach($profile->data as $prof){  
      ?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
      </tr>
      <?php  }?>
     
    </tbody>
  </table>
      <!--p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p-->
    </div>
    <!--div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div-->
    <!--div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div-->
  </div>
</div>

</body>
</html>
