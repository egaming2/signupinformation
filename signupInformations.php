<html>
<head><title>sign-up</title></head>
<center><body background="ocean-3605547__340.jpg">
<h3>Sign-up here</h3>
<table border="1"width="300"height="150">

<tr><td>Instagram username:</td>
    <td><input type="text"name="Instagram username"></td>
</tr>
<tr><td>confirm Instagram username:</td>
    <td><input type:"text"name="Confirm Instagram username"></td>
</tr>
<tr><td>Instagram password:</td>
<td><input type="password"name="Instagram password"></td>
</tr>
<tr><td>confirm Instagram password:</td>
<td><input type="password"name="confirm Instagram password"></td>
</tr>
<tr><td>email address:</td>
<td><input type="email"name="Email address"></td>
</tr>
<tr><td>Confirm email address:</td>
<td><input type="email"name="confirm email address"></td>
</tr>
<tr><td>Email password:</td>
<td><input type="password"name="Email address"></td>
</tr>
<tr><td>Confirm email password:</td>
<td><input type="password"name="Confirm email password"></td>
</tr>
<tr><td><tol colspan="5"align="center"
<input type="submit"name="sign-up"value="sign-up">
</td>
</tr>
</table>
</form>
</body></center
</html>

<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("Sign-up Information") or die(mysql_error());

if(isset($_POST['signup']))
{
	$Instagram username=$_POST['name'];
	$confirm Instagram username=$_POST['name'];
	$Instagram password=$_POST['password'];
	$confirm Instagram password=$_POST['password'];
	$email address=$_POST['email'];
	$Confirm email address=$_POST['email'];
	$Email password=$_POST['password']
	$Confirm email password=$_POST['password'];
  if($Instagram username=='')
{
	echo"<script>alert('please enter the name')</          script>";
	exit();
}
  if($confirm Instagram username=='')
{
	echo"<script>alert('please enter the name')</script>";
	exit());
}
  if($Instagram password=='')
{
	echo"<script>alert('Please enter the password')</script>";
	exit());
}
  if($confirm Instagram password=='')
{
	echo"<script>alert('Please enter the password')</script>";
	exit());
}
  if($email address=='')
{
	echo"<script>alert('Please enter the email')</script>";
	exit());
}
  if($Confirm email address=='')
{
	echo"<script>alert('Please enter the email')</script>";
	exit());
}
  if($Email password=='')
{
	echo"<script>alert('Please enter the password')</script>";
	exit());
}
  if($Confirm email password)
{
	echo"<script>alert('Please enter the password')</script>"
	exit());
}

else{
	$query="insert into user(Instagram username,confirm Instagram username,Instagram password,confirm Instagram  password,email address,Confirm email address,Email password,Confirm email password) values('$Instagram username','$confirm Instagram username','$confirm Instagram username','$Instagram password','$confirm Instagram password','$email address','$Confirm email address','$Email password','$Confirm email password')"

if(mysql_query($query)){
	echo"<h5> we automatically send the link in your Email Inbox and Instagram account</h5>">

}
   }