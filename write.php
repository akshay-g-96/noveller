<!DOCTYPE html>
<html>
<head>
	<title>WRITE</title>
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
</head>
<body>
<div class="header">
    
  </div>
 
<div class="topnav">
  <a href="signout.php">Sign_Out</a>
  <a  href="about.php">About</a>
  <a class="active" href="ht.php">Home</a>
</div>
  <br/>
	<form action="write_php.php" method="post">
	<fieldset>
    <legend><b>WRITE</b></legend>
  		Title:<br>
  		<input type="text" name="title" required=""><br><br>
 		About:<br>
  		<input type="text" name="about" required=""><br><br>
     Story's category: <select name="Area">
    <option value="psychology">Psychology</option>
    <option value="mystery">Mystery</option>
    <option value="creepy">Creepy Pastas</option>
    <option value="motivational">Motivational</option>
    </select><br><br>
  		Enter content:<br>
  		<textarea rows="10" cols="100" name="content">
		</textarea><br>
		<input type="submit" name="submit">
  	</fieldset>

</form>
</body>
</html>