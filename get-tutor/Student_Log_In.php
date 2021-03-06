<!DOCTYPE html>
<html>
<head>
<title>Log In</title>

<style>

table {
    border-collapse: collapse;
    border: 1px solid black;
	box-shadow: 10px 10px 5px #888888;
}

input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=password]:focus {
    border: 3px solid #555;
		box-shadow: 5px 5px 5px #888888;
}

input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=email]:focus {
    border: 3px solid #555;
		box-shadow: 5px 5px 5px #888888;
}
  
  
 
div {
background-color: white;
}
div a {
    text-decoration: none;
    color: white;
    font-size: 15px;
    padding: 10px;
    display:inline-block;
	margin: 0px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;

</style>

<script>

function checkIfFieldsAreEmpty()
{ var empt1 = document.forms["signupform"]["fname"].value;
  var empt2 = document.forms["signupform"]["lname"].value;
  var empt3 = document.forms["signupform"]["email"].value;
  var empt4 = document.forms["signupform"]["password"].value;
if (empt1 == "" || empt2 == "" || empt3 == "" || empt4 == "")
{ alert("Please enter your name");
	return false;}
else{
	return true;
}
}
</script>

</head>


<body>
<div align="right" class="1">
  <font color="#5D6D7E"><span style="float:left; font-size:25px"> GETTUTOR.COM </span></font>
</div>
<br><br><br><br>

<center>
<form name="loginform" onsubmit="return checkIfFieldsAreEmpty()"  method="POST" action="studentlogin.php" >
<table cellpadding="10px";>
<tr>
<td><font color="#1A5276" size="5px"><b>Student Log In</b></font></td>
</tr>

<tr>
<td><b>Email</b><br><input type="email" name="email" id="email" placeholder="email" required></td>
</tr>

<tr>
<td><b>Password</b><br><input type="password" name="password" id="password" placeholder="password" required></td>
</tr>

<tr>
<td colspan="2"><button class="button" name="Submit" type="submit" value="Log In" id="login"><span>Log In</span></button></td>
</tr>

<tr>
<td colspan="2"><a href="Professor Sign Up.html" style="text-decoration:none; size:3px;"><b><center>Not a member yet?</center></b></a></td>
</tr>

</table>
</form>
</center>
</body>

</head>