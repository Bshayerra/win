<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO users(firstName, lastName, email) 
    VALUES('$firstName', '$lastName', '$email')";

if(empty($firstName)){
    echo'please enter first name';
}else if(empty($lastName)){
    echo'please enter last name';
}else if(empty($email)){
    echo'please enter email';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo'please enter correct email';
}else{
    if(mysqli_query($conn, $sql)){
    echo 'work';
     }else {
    echo 'Error: ' . mysqli_connect_errno();
    }
}
}
