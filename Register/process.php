<?php include 'database.php';
 

 
// create a variable
$usn=$_POST['usn'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$bio=$_POST['bio'];
$password=$_POST['password'];

$c=$_POST['c'];
$cpp=$_POST['cpp'];
$ds=$_POST['ds'];
$java=$_POST['java'];
$python=$_POST['python'];
$dbms=$_POST['dbms'];
$ada=$_POST['ada'];
$os=$_POST['os'];

$Xth=$_POST['Xth'];
$XIIth=$_POST['XIIth'];
$sem1=$_POST['sem1'];
$sem2=$_POST['sem2'];
$sem3=$_POST['sem3'];
$sem4=$_POST['sem4'];
$sem5=$_POST['sem5'];
$sem6=$_POST['sem6'];
$cgpa=$_POST['cgpa'];
 
//Execute the query
 mysqli_query($connect, "INSERT INTO student VALUES('$usn','$name','$branch','$gender','$mobile','$email','$password','$bio');");

 mysqli_query($connect, "INSERT INTO skills VALUES('$usn','$c','$cpp','$ds','$java','$python','$dbms','$ada','$os');");

 mysqli_query($connect, "INSERT INTO academics VALUES('$usn','$Xth','$XIIth','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$cgpa');");


	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Student Added</p>";
	echo "<a href=\"\Placement_Portal\Login\index.html\">Login</a>";
} else {
	echo "Student NOT Added<br />";
	echo mysqli_error ($connect);
}

?>