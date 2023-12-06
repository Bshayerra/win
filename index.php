<?php 
include './include/database.php';
include './include/form.php'
?>

<!DOCTYPE html>
<html >
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