

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
      <p class="lead fw-normal">Remaining until registration closes</p>
      <h3 id="countdown" ></h3>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">Wlcome</li>
  <li class="list-group-item">Participate with us, you don't know, you might win! </li>
</ul>

  
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




<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button id="winner" type="button" class="btn btn-primary" >
select winner
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">The winner</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h5 class="modal-title display-3 text-center" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lasstName']) ; ?></h5>
        <?php  endforeach; ?>
      </div>
    
    </div>
  </div>
</div>
<!-- End Modal -->

<div id="cards" class= "row mb-5 pb-5">
  
    <?php foreach($users as $user): ?>

      <div class="col-sm-6">
<div class="card my-2 bg-light">
  <div class="card-body">
       <h5 class= "card-title"></h5> ;
        <p class= "card-text"><?php echo htmlspecialchars($user['email']); ?></p>
      </div>
      </div>
</div>
        <?php  endforeach; ?>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>


