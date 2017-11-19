<?php include 'database.php'; ?>
 
<?php
 
// create a variable
$first_name=$_POST['name'];
$last_name=$_POST['lname'];
$user_name=$_POST['uname'];
$pass=$_POST['password'];
$email=$_POST['email'];
$ques=$_POST['question'];
$ans=$_POST['answer'];
$ph=$_POST['phone'];
$gender=$_POST['gender'];
$aoi=$_POST['Area'];

 
//Execute the query
$sql = "SELECT email FROM novsignup";
$conn=new mysqli('localhost','root','','lucifer');
$result = mysqli_query($conn,$sql);
$flag = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $email){
        	$flag = 1;
        	break;
        }
    }
}

if($flag == 1){
	readfile('write.php');
}
else{
	mysqli_query($conn,"INSERT INTO novsignup (name,lname,uname,email,password,question,answer,phone,gender,aoi)
		        VALUES ('$first_name','$last_name','$user_name', '$email','$pass', '$ques','$ans','$ph','$gender','$aoi')");
	//mysqli_query($conn,"INSERT INTO novwrite (uname) VALUES ('$user_name')");
				
	if(mysqli_affected_rows($conn) > 0){
		readfile('write.php');
	//echo "<a href="index.html">Go Back</a>";
	} 
	else {
			echo "Error Adding the Reader<br />";
			echo mysqli_error ($conn);
		}

}

?>