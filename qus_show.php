<?php
    include("class/users.php");

    $qus = new users;
    $qus->qus_show();
    /*echo "<pre>";
    print_r($qus->qus);*/

    //echo "hiiii";

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="col-sm-2"></div>
    <div class="col-sm-8">  
        <h2>Your Test<br>
            ALL THE BEST!!!
        </h2>
        <?php 
            $i=1;
            foreach($qus->qus as $question) {?>
        <table class="table table-bordered">
            <thead>
            <tr bgcolor="#B90D15">
                <th style='color:blanchedalmond'><?php echo $i  ;?>  <?php echo $question['question'];?> </th>
                <!--th>Firstname</th-->
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>&nbsp;<input type="radio" value="<?php echo $question['right_ans'];?>">1&nbsp; <?php echo $question['option1'];?> </td>
            </tr>
            <tr>
                <td>&nbsp;<input type="radio" value="<?php echo $question['right_ans'];?>">2&nbsp; <?php echo $question['option2']; ?> </td>
            </tr>
            <tr>
                <td>&nbsp;<input type="radio" value="<?php echo $question['right_ans'];?>">3&nbsp; <?php echo $question['option3']; ?> </td>
            </tr>
            <tr>
                <td>&nbsp;<input type="radio" value="<?php echo $question['right_ans'];?>">4&nbsp; <?php echo $question['option4']; ?> </td>
            </tr>
            </tbody>
        </table>
            <?php $i++;}?>
    </div>
</div>

</body>
</html>
