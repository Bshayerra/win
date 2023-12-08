
<?php

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql); // store data in vriable result.
$users = mysqli_fetch_all($result, MYSQLI_ASSOC); //bring and order thae data in a matrix way
