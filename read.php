<!DOCTYPE html>
<html>
<head>
	<title>READ</title>
	<style>
	#myDIV {
   		width: 100%;
    	padding: 50px 0;
    	text-align: center;
   	    background-color: lightblue;
    	margin-top: 20px;
	}
	.header {
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
  }
#bod{
      margin-bottom:400px;

     background: url("y.jpg") right bottom no-repeat;

}

}</style>
	
	
	
</head>
<body id="bod">
<?php include 'database.php'; ?>
 
	<div class="header">
    
  </div>
 
<div class="topnav">
  <a href="signout.php">Sign_Out</a>
  <a  href="about.php">About</a>
  <a class="active" href="ht.php">Home</a>
</div>
  <br/>
	<!--<script>var count = 0;</script>
	<button onclick="myFunction()">Next story</button>
		
	<p id="myDIV"></p>
	<script>
	function myFunction() {
		count++;
    document.getElementById("myDIV").innerHTML="Story "+ count;
       	}
	</script> -->
	<?php
// Check connectnection
$conn=new mysqli('localhost','root','','lucifer');
//$result1= mysqli_query($conn,"CREATE INDEX index_name On novwrite (content)");
//$result2=mysqli_query($conn,"SELECT index_name FROM novwrite");
$date= mysqli_query($conn,"SELECT time1 FROM novwrite");
$max=0;
while($row_date = $date->fetch_assoc())
  {
    if($row_date['time1']>$max)
      $max=$row_date['time1'];
  }
  echo $max;
  echo nl2br("\n");
  echo "";
  echo "";
 //   $row_date['time1']=0;
$result = mysqli_query($conn,"SELECT content FROM novwrite,novsignup where novsignup.aoi=novwrite.Area ");
//echo $result;
$row = $result->fetch_assoc();
echo  $row['content'];
mysqli_close($conn);
echo "";
  echo "";
  echo "";
?>
<br/>
<button type="button" href="read.php">Click for more</button>

</body>
</html>