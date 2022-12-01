<!DOCTYPE HTML>

<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false){
header("location:index(2).php");
}
?>
<html>
<body>
<h3>Log in Successful</h3>

</body>
</html>
