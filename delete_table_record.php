<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_post[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
for($k=1;$k<=$size;$k++)
{
$q="delete from book where b_id=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>deletion</title>
</head>
<body>
<p>
	<?php
       echo $size."records deleted";    
     ?>
     go back to home page<a href="deleteForm.php">click here</a>
</p>
</body>
</html>
