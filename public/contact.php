<?php
require_once('../private/initialize.php');


if (is_post_request()) {
  //get user values from form.
  
  $data = [];
  $data["name"]=h($_POST['name']) ?? '';
  $data["email"]=h($_POST['email']) ?? '';
  $data["phone"]=h($_POST['phone']) ?? '';
  $data["address"]=h($_POST['address']) ?? '';
  $data["city"]=h($_POST['city']) ?? '';
  $data["state"]=h($_POST['state']) ?? '';
  $data["design"]=h($_POST['design']) ?? '';

// validate user inputs
$errors = validateUserInputs($data);

if (empty($errors)) {
  // submit database


    $sql = "INSERT INTO fashion_contract ";
    $sql .= "(name,email,phone_number,address,city,state,design)";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $data['name']). "',";
    $sql .= "'" . db_escape($db, $data['email']). "',";
    $sql .= "'" . db_escape($db, $data['phone']). "',";
    $sql .= "'" . db_escape($db, $data['address']). "',";
    $sql .= "'" . db_escape($db, $data['city']). "',";
    $sql .= "'" . db_escape($db, $data['state']). "',";
    $sql .= "'" . db_escape($db, $data['design']). "'";
    $sql .= ")";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);

    if ($result) {
    
     redirect_to('contact.php');
    }
}
}else{
  $errors = [];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
  <header>
    <div class="bg bg-danger text-center text-uppercase text-white font-weight-bold font-italic">
      <h1>contact us </h1>

      <h6><?php echo display_errors($errors) ?></h6>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <form action="contact.php"  method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName4">Name</label>
              <input type="name" class="form-control" id="inputName4" name="name" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4"  name="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPhoneNumber">Phone number</label>
            <input type="text" class="form-control" id="inputPhoneNumber" name="phone" placeholder="your digit" required>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="home address" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity" name="city" placeholder="city name" required>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <input type="text"  id="state" name="state" placeholder="state" required>
            </div>
          </div>
          <div>
            <label for="inputDesign">design</label>
            <input type="text" name="design" id="design"  placeholder="Design" required>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
      <div class="col-9">
        <img src="./img/FB_IMG_1572553817058.jpg" alt="" width="300" height="300" class="img-fluid rounded-circle">
        <img src="./img/k1.jpg" alt="" width="300" height="300" class="img-fluid rounded-thumbnail">
        <img src="./img/post7.jpg" alt="" width="300" height="300" class="img-fluid rounded-circle">
        <img src="./img/post6.jpg" alt="" width="300" height="300" class="img-fluid rounded-circle">
        <img src="./img/postn.jpg" alt="" width="300" height="300" class="img-fluid rounded-circle">
        <img src="./img/post2.jpg" alt="" width="300" height="300" class="img-fluid rounded-circle">

      </div>
    </div>
  </div>
</body>

</html>