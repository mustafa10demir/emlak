<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yeşil Kemer Emlak Gayrimenkul Danışmanlığı</title>
</head>
<body>
<?php
include('connect.php');
$delete=$_POST['delete'];
$toplams=0;
$deletes=$delete-1;
$islem= mysql_query("select * from head LIMIT $deletes,1");
$dizin=mysql_fetch_array($islem);
$fotolar=$dizin['foto'];
$id= $dizin['id'];
for ( $i=$delete ; $i<=0 ; $i--)
{
	$sonuc= mysql_query("SELECT * FROM head LIMIT $i , 1");
	$sonucliste= mysql_fetch_array($sonuc);
	$toplams= $sonucliste['foto']+$toplams;
}
  
	$islem2= mysql_query("SELECT * FROM images LIMIT $toplams , $fotolar");
	while ( $sonuc2 = mysql_fetch_array($islem2)){
     $id2= $sonuc2['id'];
	$tamam= mysql_query ( "DELETE FROM images where id=$id2");
	
	}
    $tamam2= mysql_query ( "DELETE FROM head WHERE id=$id");
   header("Location:deleteok.php");
	
?>
</body>
</html>