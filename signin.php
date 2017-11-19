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
  
var password=document.myform.password.value;  
  
 if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
    var password=document.myform.password.value;  
  var result=true;
  var e=document.getElementsByName("email")[0].value;
  var atindex=e.indexOf('@');
  var dotindex=e.lastIndexOf('.');
  if(atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
    result=false;
  return(result);
}
</script>
</head>
<body id="b">
<div class="header">
    
  </div>


  <div class="topnav">
  <a class="active" href="about1.php">About</a>
  <a href="ht1.php">Home</a>
</div>
<div id="img1">
<form name="myform" action="login_supplier.php" method="post" onsubmit="return validate()">

<table id ="t1" border="0px" cellspacing="15px" cellpadding="15px">
<tr>
<td><h1>Signin</h1></td>
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
<td></td><td>

  <td></td>
  <br><br>
</td>
</tr>
<tr><td><input type="submit"></td></tr>
</table>
</form>
</div>
</body>
</html>