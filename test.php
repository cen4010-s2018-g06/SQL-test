<html>
<body>
<div>
<p>Register</p>
<form name ="form1" method="post" action="register.php">
<p>Username: <input type="text" name="username" size="15" maxlength="20" value = ""></p>
<p>Password: <input type="password" name="password" size="15" maxlength="20" value = ""></p>
<p>Confirm Password: <input type="password" name="password2" size="15" maxlength="20" value = ""></p>

<script>
if ('password2' != 'password')
{
alert("password not same!");
}
</script> 


<p>***********************************************************</p>
<p>Student Information:</p>
<p>First name: <input type="text" name="firstname" size="15" maxlength="20" value = ""></p>
<p>Last name: <input type="text" name="lastname" size="15" maxlength="20" value = ""></p>

<p><input type="submit" name="submit" value="Register"></p>


</form>
</div>
</body>
</html>
