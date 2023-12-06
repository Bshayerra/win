<?php 
include './include/database.php';
$conn =mysqli_connect('localhost','root','root', 'winwin');

if (!$conn){
echo 'fail ' . mysqli_connect_error();
}else{
    echo'work!';
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO users(firstName, lastName, email) 
    VALUES('$firstName', '$lastName', '$email')";

mysqli_query($connection, $sql);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" herf="./css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
    <input type="text" name="FirstName" id="FirstName" placeholder="first name">
    <input type="text" name="LastName" id="LastName" placeholder="last name"> 
    <input type="text" name="Email" id="Email" placeholder="email">
    <input type="submit" name="submit" value="send">
    </form>


<script src="./js/script.js"></script>
</body>
</html>