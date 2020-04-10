<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "Connection sucessful";
}
else{
	echo "please connect it";
}

mysqli_select_db($con,'phpprojectuserdata');

$userErr= $emailErr= " ";

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["user"])){
		$userErr= "Fill the username";
	}
}


$query="insert into userinfodata (user, email, mobile, comment)
value('$user','$email','$mobile','$comment') ";

// echo "$query";
mysqli_query($con,$query );

header('location:index.php');
?>
