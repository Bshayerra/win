<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [ 
    'firstNameError'=>' ',
    'lastNameError'=>' ',
    'emailError'=>' ',
];

if(isset($_POST['submit'])){
// check first name
if(empty($firstName)){
    $errors['firstNameError'] = 'Please enter first name';
}
// check last name
if(empty($lastName)){
    $errors['lastNameError'] = 'Please enter first name';
}
// check email
 if(empty($email)){
    $errors['emailError'] = 'Please enter first name';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'Please enter enter correct email';
}

// check no error 
    if(mysqli_query($conn, $sql)){
   header('Location: index.php');
     }else {
    echo 'Error: ' . mysqli_error($conn);
    }
}
}

/*
// To enter the input as string not JavaScript.
$firstName = mysqli_real_escape_string($conn, $_POST['firstName']) ;
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']) ;
$email = mysqli_real_escape_string($conn, $_POST['email']) ;


    $sql = "INSERT INTO users(firstName, lastName, email) 
    VALUES('$firstName', '$lastName', '$email')";
*/
