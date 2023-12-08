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

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Win With Us</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>

<form class="mt-5">
    <h3>Please enter your information</h3>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="FirstName" id="firstName" placeholder="first name" class="form-control">
    <div id="firstName" class="form-text error "></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input  type="text" name="LastName" id="lastName" placeholder="last name" class="form-control">
    <div id="lastName" class="form-text error "></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="Email" id="email" placeholder="Email Address" class="form-control">
    <div id="email" class="form-text error"></div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<!--
    <form action="index.php" method="POST">
    <input type="text" name="FirstName" id="firstName" placeholder="first name">
    <input type="text" name="LastName" id="lastName" placeholder="last name"> 
    <input type="text" name="Email" id="email" placeholder="email">
    <input type="submit" name="submit" value="send">
    </form>

-->
    <?php foreach($users as $user): ?>
        <h1><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lasstName']) .' ' . htmlspecialchars($user['email']) ; ?></h1> ;
      <?php  endforeach; ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>




