<?php

ob_start();
session_start();
if(!isset($_SESSION['Username'])){
header("Location: login.php");
}

?>
<div class="success">Welcome , $_SESSION['Username']</div>
