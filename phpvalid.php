<?php


if(isset($_GET['alaska'])){

    $email = $_GET['email'];

    if(!$email ){
        echo "<script> alert(`email field is required`)</script>";
    }else{
        $reg_email = "/^[a-zA-Z]+[a-zA-Z0-9]*(?:\W[a-zA-Z0-9])*[\w\W]*\@[a-zA-Z]{2,8}\.[a-zA-Z]{2,3}$/";

        if(preg_match($reg_email,$email)==0){
   
           echo "<script> alert(`Not a valid email`)</script>";
        }else{
           echo "<script> alert(`Form validated Successfully`)</script>";
        }
    }
    

     
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="formvalid.css">
</head>
<body>
    <div class="form-container">
    <form id="alaf">
        <fieldset>
            <legend>
        <h1 class="mathiko">Signup</h1></legend>
        <div class="onlycontent">
        <label for="usern">Username</label> <br>
        <input type="text" id="usrn" name="username"> <br> <br>

        <label for="Email">Email</label> <br>
        <input type="text" id="email" name="email"> <br>
      <!--<div class="invalid"><p class="help">Please enter a valid email address.</p></div>-->  <br>

        <label for="pass">Password</label><br>
        <input type="password" id="pass" name="password"><br> <br>

        <label for="cpass">Confirm-Password</label><br>
        <input type="password" id="cpass" name="confirm-password"> <br> <br>
      <label for="gender">Gender:</label> <br>
   <input type="radio" name="gender" value="M" id="o1"> M
   <input type="radio" name="gender" value="F" id="o2"> F <br><br>
<label for="hobbies"> Hobbies:</label> <br>
<input type="checkbox" name="hobbies" value="Read" id="op1"> Read
   <input type="checkbox" name="hobbies" value="Copy" id="op2"> Copy
   <input type="checkbox" name="hobbies" value="Sleep" id="op3"> Sleep <br><br>
    <label for="country">Country:</label> <br>
    <select name="country" id="country">
        <option value="" disabled selected hidden>Select country</option>
    <option value="one">Nepal</option>
    <option value="two">Sirlanka</option>
    <option value="three">Korea</option>
</select> <br><br> <br>
<button id="button" type="submit" name="alaska"  >Submit</button>
</div>
</fieldset>
    </form>
</div>
</body>
</html>