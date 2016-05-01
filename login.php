<html>

<form action="index.php" method="post" class="registration_form">
  <fieldset>
    <legend>Registration Form </legend>

<form action="login.php" method="post">
 <fieldset>
 <legend>Login Form  </legend>

 <p>Enter Your username and Password Below  </p>

 <div>
 <label for="name">Email :</label>
 <input type="text" id="e-mail" name="e-mail" size="25" />
 </div>

 <div>
 <label for="Password">Password:</label>
 <input type="password" id="Password" name="Password" size="25" />
 </div>
 <div>
 <input type="hidden" name="formsubmitted" value="TRUE" />
 <input type="submit" value="Login" />
 </div>
 </fieldset>
</form>

</html>