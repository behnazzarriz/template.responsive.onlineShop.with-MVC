<?php
$serverName='localhost';
$userName='root';
$password='';
$dbName='digi_mvc';
$dsn="mysql:host=$serverName;dbname=$dbName";
$conn=new PDO($dsn,$userName,$password);

$sql='select tbl_attr.id,tbl_attr.title,tbl_product_attr.value from tbl_attr left join  tbl_product_attr on tbl_attr.id=tbl_product_attr.attr_id';
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);