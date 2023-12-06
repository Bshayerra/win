<?php
$conn =mysqli_connect('localhost','root','root', 'winwin');
if(!$conn){
    echo 'Error: ' . mysqli_connect_errno();
}
