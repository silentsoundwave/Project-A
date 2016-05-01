<html>

    <p>Create A new Account <span style="background:#EAEAEA none repeat scroll 0 0;line-height:1;margin-left:210px;;padding:5px 7px;">
Already a member? <a href="login.php">Log in</a></span> </p>

    <div class="elements">
      <label for="name">Name :</label>
      <input type="text" id="name" name="name" size="25" />
    </div>
    <div class="elements">
      <label for="e-mail">E-mail :</label>
      <input type="text" id="e-mail" name="e-mail" size="25" />
    </div>
    <div class="elements">
      <label for="Password">Password:</label>
      <input type="password" id="Password" name="Password" size="25" />
    </div>
    <div class="submit">
     <input type="hidden" name="formsubmitted" value="TRUE" />
      <input type="submit" value="Register" />
    </div>
  </fieldset>
</form>

</html>

<?php

/*Define constant to connect to database */
DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD', '');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'forum');
/*Default time zone ,to be able to send mail */
date_default_timezone_set('UTC');

/*You might not need this */
ini_set('SMTP', "mail.myt.mu");
// Overide The Default Php.ini settings for sending mail

//This is the address that will appear coming from ( Sender )
define('EMAIL', 'email@gmail.com');

/*Define the root url where the script will be found such as
http://website.com or http://website.com/Folder/ */
DEFINE('WEBSITE_URL', 'http://localhost');

// Make the connection:
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,
 DATABASE_NAME);

if (!$dbc) {
 trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}

?>