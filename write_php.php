<?php include 'database.php'; ?>
 
<?php
 
// create a variable
$title=$_POST['title'];
$about=$_POST['about'];
$Area=$_POST['Area'];
$content=$_POST['content'];

 
//Execute the query
$sql = "SELECT email FROM novsignup";
$conn=new mysqli('localhost','root','','lucifer');
$result = mysqli_query($conn,$sql);
$flag = 0;
/*if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["email"] == $email){
        	$flag = 1;
        	break;
        }
    }
}*/

/*if($flag == 1){
	readfile('ht.php');	
}
else{
	mysqli_query($conn,"INSERT INTO novwrite (title,about,Area,content,time1)
		        VALUES ('$title','$about','$Area','$content',now())");
				
	if(mysqli_affected_rows($conn) > 0){
		readfile('ht.php');
	//echo "<a href="index.html">Go Back</a>";
	} 
	else {
			echo "Error Adding the Reader<br />";
			echo mysqli_error ($conn);
		}

}*/
mysqli_query($conn,"INSERT INTO novwrite (title,about,Area,content,time1)
		        VALUES ('$title','$about','$Area','$content',now())");
		readfile('write.php');

?>