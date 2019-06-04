<?php
session_start();
$conn = mysqli_connect("localhost","root","","food");
if(!$conn){
  die('Could not connect: '.mysqli_connect_error());
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$location=$_POST['location'];
$mob=$_POST['mob'];
$addr=$_POST['addr'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$sql = "INSERT INTO user VALUES ('$fname', '$lname', '$location', '$mob', '$addr', '$email', '$pw', '$cpw');";
	if(mysqli_query($conn, $sql))
{
	$message = "You have been successfully registered";
}
else
{
	$message = "Could not insert record";
}
	echo "<script type='text/javascript'>alert('$message');</script>";
	$sql1 = "INSERT INTO php_users_login(`email`, `password`) VALUES ('$email', '$pw');";
	if(mysqli_query($conn, $sql1))
	{
		$message1 = "Added in login table";
	}
	else
	{
		$message1 = "Could not insert record";
	}
	echo "<script type='text/javascript'>alert('$message1');</script>";}
?>

<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
		<title>Register</title>
		<script type="text/javascript">
			function validate() {
				var fname=document.getElementById("fname");
				var lname=document.getElementById("lname");
				var mob=document.getElementById("mob");
				var location=document.getElementById("location");
				var EmailId=document.getElementById("email");
				var addr=document.getElementById("addr");
				var pw=document.getElementById("pw");
				var cpw=document.getElementById("cpw");
				var alphaExp = /^[a-zA-Z]+$/;
				var atpos = EmailId.value.indexOf("@");
			  var dotpos = EmailId.value.lastIndexOf(".");

				if(pw.value.length < 8 || cpw.value.length < 8) {
					alert("Please enter a password at least 8 characters");
					pw.focus();
					return false;
				}
				else if (pw.value.length != cpw.value.length) {
					alert("Password do not match.");
					pw.focus();
					return false;
				}
				else if (pw.value != cpw.value) {
					alert("Password do not match");
					pw.focus();
					return false;
				}
				if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= EmailId.value.length) {
					alert("Enter valid email");
					EmailId.focus();
					return false;
				}
				if (fname.value == null || fname.value == "") {
					alert("Enter a valid first name");
					fname.focus();
					return false;
				}
				if (fname.value.match(alphaExp)){}
				else {
					alert("First name can have only letters");
					fname.focus();
					return false;
				}
				if (lname.value == null || lname.value == "") {
					alert("Enter a valid last name");
					lname.focus();
					return false;
				}
				if (lname.value.match(alphaExp)){}
				else {
					alert("Last name can have only letters");
					lname.focus();
					return false;
				}
				if(mob.value==null || mob.value==" ") {
					alert("Please Enter Your Phone Number");
					mob.focus();
					return false;
				}
				if (isNaN(mob.value)) {
					alert(" Your Phone Number must be Integers");
					mob.focus();
					return false;
				}
				if((mob.value.length!= 10))	{
					alert("Enter the valid Phone Number(Like : 9669666999)");
					mob.focus();
					return false;
				}
				if(location.selectedIndex==0) {
					alert("Please select location");
					location.focus();
					return false;
				}
				if(addr.value==" " || addr.value=="") {
					alert("Please Enter Your Address");
					addr.focus();
					return false;
				}
				if (confirm("Do you want to submit your details?") == true) {}
				else {
			       return false;
			  }
			  var survey=prompt("How did you hear about us? (Used only for survey)");
				return true;
			}
		</script>
	</head>
<body>
<div class="signup">
<form name="register" method="POST" action="signupForm.php" onsubmit="return validate()">
	<table border="1" bordercolor="white">
		<caption id="regForm">Register Form</caption>
		<tr class="left">
			<td>First name:</td>
			<td><input name="fname" type="TEXT" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></td>
		</tr>

		<tr class="left">
			<td>Last name:</td>
			<td><input name="lname" type="TEXT" placeholder="Enter your last name" size="30" maxlength="30" align="center" id="lname"></td>
		</tr>

		<tr class="left">
			<td>Location:</td>
			<td><select name="location" id="location" style="color:#d3d3d3;" onchange="document.postElementById('location').style.color='black';">
				<option value="none" disabled selected>----SELECT YOUR LOCATION----</option>
				<option value="Orange" style="color:black;">Orange</option>
				<option value="Los Angeles" style="color:black;">Los Angeles</option>
				<option value="Fullerton" style="color:black;">Fullerton</option>
			</select>
			</td>
		</tr>

		<tr class="left">
			<td>Phone number:</td>
			<td><input name="mob" type="TEXT" size="30" maxlength="10" placeholder="Enter your phone number" id="mob"></td>
		</tr>

		<tr class="left">
			<td>Address:</td>
			<td class="left"><textarea rows="7" cols="33" wrap="physical" name="addr" placeholder="Enter your address" id="addr"></textarea></td>
		</tr>

		<tr class="left">
			<td>Email:</td>
			<td><input name="email" type="TEXT" size="30" maxlength="30" placeholder="Enter your email" id="email"></td>
		</tr>

		<tr class="left">
			<td>Password:</td>
			<td><input name="pw" type="password" size="30" id="pw"></td>
		</tr>

		<tr class="left">
			<td>Confirm Password:</td>
			<td><input name="cpw" type="password" size="30" id="cpw"></td>
		</tr>

		<tr class="left">
			<td colspan="2">
				<input type="checkbox" name="tc" value="tc">I have read and accepted the Terms and Conditions and <br>&nbsp&nbsp&nbsp&nbsp&nbspPrivacy Policy</td>
		</tr>
	</table>
	<p><input type="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the term first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="Reset" value="Reset" id="reset" class="button"></p>
</form>

<form action="login.php">
	<p align="center">Already have an account with us?<br>
	<input type="submit" value="Login" id="login" class="button"></p>
</form>
</div>
<?php include("main.php"); ?>
	</body>
</html>
