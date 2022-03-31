
<!DOCTYPE html>
<html>
  <head>
    <title>An Example Form</title>
    <script src='OSC.js'></script>
    <style>
      .signup {
        border:1px solid #999999;
        font:  normal 14px helvetica;
        color: #444444;
        position: fixed;
      }
      p {
        font-size: 50px;
        padding: 40px;
      }
      .phpcode {
        background-color: yellow;
        color: red;
        font-weight: bold;
        border: 2px solid blue;
        border-radius: 50%;
        padding: 100px;
        display: inline-block;
        text-align: center;
        width: 3em;
        margin: 0.5em;
      }
    </style>

    
	<script >
      function validate(form)
      {
        fail  = validateFirstName(form.firstname.value)
        fail += validateLastName(form.lastname.value)
        fail += validateUsername(form.username.value)
        fail += validatePassword(form.password.value)
        fail += validateAge(form.age.value)
        fail += validateEmail(form.email.value)
        fail += validatePhone(form.phone.value)
        fail += validateZipCode(form.zipCode.value)
        fail += validateCountry(form.country.value)
        fail += validateHeight(form.height.value)

        if   (fail == "")   return true
        else { alert(fail); return false }
      }
     </script>
	 <script src="validate_functions.js"></script> 
    
  </head>
  <body>
    <table class="signup" border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
      <th colspan="2" align="center">Signup Form</th>
      <form method="post" action="adduser.php" onsubmit="return validate(this)">
        <tr><td>First Name</td>
          <td><input type="text" maxlength="32" name="firstname"></td></tr>
        <tr><td>Last Name</td>
          <td><input type="text" maxlength="32" name="lastname"></td></tr>
        <tr><td>Username</td>
          <td><input type="text" maxlength="16" name="username"></td></tr>
        <tr><td>Password</td>
          <td><input type="text" maxlength="12" name="password"></td></tr>
        <tr><td>Age</td>
          <td><input type="text" maxlength="3"  name="age"></td></tr>
        <tr><td>Email</td>
          <td><input type="text" maxlength="64" name="email"></td></tr>
        <tr><td>Phone</td>
           <td><input type="text" maxlength="15" name="phone"></td></tr>
        <tr><td>Zip Code</td>
            <td><input type="text" maxlength="10" name="zipCode"></td></tr>
        <tr><td>Country of Birth</td>
            <td><input type="text" maxlength="64" name="country"></td></tr>
        <tr><td>Height (metric) </td>
            <td><input type="text" maxlength="10" name="height"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Signup"></td></tr>
      </form>
    </table>
    <br><br><br>
    <span class="phpcode">
    <?php
    echo "I WANT MY PHP";
    ?>
    </span>
    <img id = 'object' src = "pitt.jpg" width="200" height="200">
    <script>
        O('object').onmouseover = function() {this.src = 'php.png'}
        O('object').onmouseout = function() {this.src = 'pitt.jpg'}
    </script>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
      sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
  <h2>Source Code</h2>
<?php show_source("example16-1.php") ?>
</html>
