<?php

$connection = mysqli_connect('localhost', 'root' , 'root', 'winwin');
if(!$connection){
    echo 'Error: ' . mysqli_connect_errno();
}