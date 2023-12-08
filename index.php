<?php 
include './include/database.php';
include './include/form.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql); // store data in vriable result.
$users = mysqli_fetch_all($result, MYSQLI_ASSOC); //bring and order thae data in a matrix way


mysqli_free_result($result);
mysqli_close($conn);

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
    <input type="text" name="FirstName" id="firstName" placeholder="first name">
    <input type="text" name="LastName" id="lastName" placeholder="last name"> 
    <input type="text" name="Email" id="email" placeholder="email">
    <input type="submit" name="submit" value="send">
    </form>


    <?php foreach($users as $user): ?>
        <h1><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lasstName']) .' ' . htmlspecialchars($user['email']) ; ?></h1> ;
      <?php  endforeach; ?>
    <script src="./js/script.js"></script>
</body>
</html>




