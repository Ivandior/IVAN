<!DOCTYPE HTML>

<?php
session_start();
$username="user";
$password="password";
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
header("location:loginsuccess.php");
}
if(isset($_POST['username'])&& isset($_POST['password'])){
if($_POST['username']==$username && $_POST['password']==$password){
$_SESSION['loggedin']=true;
}
else
{
echo "username or password incorect";
}
}
?>
<html>
<body>
<form method="post" action="index.php"><p>
<br>Username:<br>
<input type="text" name="username"><br>
Password:<br>
<input type="text" name="password"><p><br>
<input type="submit" value="Continue">


</form>
</body>
</html>

