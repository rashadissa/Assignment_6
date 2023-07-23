<?php
try{
    $conn=mysqli_connect('localhost','root','',"expensetracker");
    //echo "conn true";
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}
