<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ร้านเครื่องหอม PRIYA</title>
</head>

<body>
   <h1>ร้านเครื่องหอม PRIYA</h1>
<?php
include("connectdb.php");
$sql = "SELECT * FROM `products`";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)){
	echo "<img src = 'images/{$data['p_img']}' width='240'> <br>";
	echo $data['p_id']."<br>";
	echo $data['p_name']."<br>";
	echo $data['p_price']." บาท <hr>";
	}
	
mysqli_close($conn); // ปิดการเชื่อมต่อฐานข้อมูล
?>
</body>
</html>