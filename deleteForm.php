<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>delete book record</title>
	<link rel="stylesheet" type="text/css" href="./css/viewstyle.css" />
</head>
<body>
<h1>book record managment</h1>
<form action="deletion.php" method="post">
<table id="view_table">
	<tr>
		<th>b_id</th>
		<th>title</th>
		<th>price</th>
		<th>author</th>
		<th>select to delete</th>
	</tr>
	<?php
	  for($i=1;$i<=$num;$i++)
	  {
	  	$row=mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $row['b_id']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['author']; ?></td>
		<td><input type="checkbox" value="<?php echo $row['b_id']; ?>" name="b<?php echo $i; ?>" /></td>
	</tr>
	<?php  	
	  }
	?>
	<tr>
		<td colspan="5"><button type="submit" value="delete">delete</button></td>
	</tr>
</table>
</form>
</body>
</html>
