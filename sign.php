<html>
<head>
<link rel="stylesheet" href="sign.css">
<style >.header {
    background-color: #00004d;
    text-align: center;
    padding: 20px;
    background-image: url("logo.png") ;
    background-repeat: no-repeat;
    height: 150px;
    width: 100%;
    background-position: center;
}.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}</style>
<script>
function validate()
{
	
var name=document.myform.name.value;  
var lname=document.myform.lname.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if (lname==null || lname==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(password.length<6 || password.length>12){  
  alert("Password must be at least 6 characters and can have maximum of 12 characters.");  
  return false;  
  }  
    var password=document.myform.password.value;  
	var result=true;
	var e=document.getElementsByName("email")[0].value;
	var atindex=e.indexOf('@');
	var dotindex=e.lastIndexOf('.');
	if(atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
		{result=false;
      alert("enter valid email address");
    }
	return(result);
}
</script>
</head>
<body id="b">
<div class="header">
    
  </div><div class="topnav">
  <a class="active" href="about1.php">About</a>
  <a href="ht1.php  ">Home</a>
</div>
  <div id="img">
<form name="myform" action="process.php" method="post" onsubmit="return validate()">

<table id ="t" border="0px" cellspacing="10px" cellpadding="10px">
<tr>
<td><h1>Registration</h1></td>
</tr>
<tr>
<td>First Name</td><td><input type="text" name="name"></td>
</tr>
<tr>
<td>Last Name</td><td><input type="text" name="lname"></td>
</tr>
<tr>
<td>Username</td><td><input type="text" name="uname" required></td>
</tr>
<tr>
<td>Email</td><td><input type="text" name="email" required></td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="password" required></td>
</tr>
<tr>
<td>Question</td><td>
<select name="question">
    <option value="Favourite movie">Favourite movie</option>
    <option value="Pet's name">Pet's name</option>
    <option value="Favourite superhero">Favourite superhero</option>
  </select>
  <td><input type="text" name="answer" required></td>
  <br><br>
</td>
</tr>
<tr>
<td>Phone</td><td><input type="text" name="phone" required></td>
</tr>
<tr>
<td>Gender</td><td>
<input type="radio" name="gender" value="male">Male</td>
<td><input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td>Area</td>
<td>
<select name="Area">
    <option value="psychology">Psychology</option>
    <option value="mystery">Mystery</option>
    <option value="creepy">Creepy Pastas</option>
    <option value="motivational">Motivational</option>
  </select>
  <br><br>
</td>
</tr>
<tr><td><input type="submit"></td></tr>
</table>
</form>
</div>
</body>
</html>