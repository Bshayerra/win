<?php 
include './include/database.php';
include './include/form.php';
include './include/select.php' ;
include './include/database_close.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" herf="./css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">

<div class="position-relative text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Win With Us</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>
<!--
  <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
-->

<div class="position-relative text-right ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>Please enter your information</h3>
<form>
  <div class="mb-3">
    <label for="firstName" class="form-label">First Name</label>
    <input type="text" name="FirstName" id="firstName" placeholder="first name" class="form-control" value="<?php echo $firstName ?>">
    <div  class="form-text error "><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">Last Name</label>
    <input  type="text" name="LastName" id="lastName" placeholder="last name" class="form-control" value="<?php echo $lastName ?>">>
    <div class="form-text error "><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="Email" id="email" placeholder="Email Address" class="form-control" value="<?php echo $email ?>">>
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>

    <?php foreach($users as $user): ?>
        <h1><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lasstName']) .' ' . htmlspecialchars($user['email']) ; ?></h1> ;
      <?php  endforeach; ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>




