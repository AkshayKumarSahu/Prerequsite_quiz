<?php

extract($_POST);

include("../class/users.php");


$quiz= new users;

$qus = $qus;//html_entity_decode($qus);
$option1 = $op1;//htmlentities($op1);
$option2 = $op2;//htmlentities($op2);
$option3 = $op3;//htmlentities($op3);
$option4 = $op4;///htmlentities($op4);

$array=[$option1, $option2, $option3, $option4];

$answer = array_search($ans,$array);

$query = "insert into questions values('','$qus','$option1','$option2','$option3','$option4','$answer')";

if($quiz->add_quiz($query)){
    echo "data inserted succesfully";
}

//print_r($_POST);

?>