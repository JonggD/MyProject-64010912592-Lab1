<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ประเภทสินค้า</title>
</head>

<body bgcolor="#DEB887">
   <h1>ร้านเครื่องหอม PRIYA</h1>
<?php
include("connectdb.php");
$sql = "SELECT * FROM `category`";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)){
	echo $data['c_id']."<br>";
	echo $data['c_name']."<hr>";
	}
	
mysqli_close($conn); // ปิดการเชื่อมต่อฐานข้อมูล
?>
</body>
</html>