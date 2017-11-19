<?php include 'database.php'; ?>
 
<?php
 
 /*$connect=mysql_connect('localhost','root','','noveller');
 
if(mysqli_connect_errno($connect))
{
        echo 'Failed to connect';
}*/
 
// create a variable
$uname=$_POST['uname'];
$pass=$_POST['password'];
$email=$_POST['email'];
 //global $conn;
//Execute the query
$conn=new mysqli('localhost','root','','lucifer');
$sql = "SELECT uname,email, password FROM novsignup";

$result = mysqli_query($conn,$sql);
$flag = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $email && $row["password"] == $pass){
        	$flag = 1;
        	break;
        }
    }
} else {
    echo "0 results";
}

if($flag == 1){
	//mysqli_query($connect,"INSERT INTO sample_supplier (email)
		        //VALUES ('$email')");
	//mysqli_query($conn,"INSERT INTO novwrite (uname) VALUES ('$uname')");

	readfile('ht.php');
}

else{
	readfile('ht1.php');
}
$conn->close();
?>