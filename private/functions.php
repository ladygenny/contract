<?php 


function h($string=""){
	return htmlspecialchars($string);
    }

function redirect_to($location){
	header('location:' . $location);
    }
function is_post_request(){
	return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
function is_get_request(){
	return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

function u($string=""){
	return urlencode($string);
}


function validateUserInputs($data){
    $errors = [];
if ($data["name"] === "") {
  $errors[] = "name field is empty";
}

if ($data["email"] === "") {
  $errors[] = "email field is empty";
}

if ($data["phone"] === "") {
  $errors[] = "phone field is empty";
}

if ($data["address"] === "") {
  $errors[] = "address field is empty";
}

if ($data["city"] === "") {
  $errors[] = "city field is empty";
}

if ($data["state"] === "") {
  $errors[] = "state field is empty";
}

if ($data["design"] === "") {
  $errors[] = "design field is empty";
}


return $errors;
}



function display_errors($errors=array()) {
    $output = '';
    if(!empty($errors)) {
      $output .= "<div class=\"bg-danger\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach($errors as $error) {
        $output .= "<li>" . h($error) . "</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }
  