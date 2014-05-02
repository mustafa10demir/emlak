<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yeşil Kemer Emlak Gayrimenkul Danışmanlığı</title>
<link href="stil.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="image/Untitled-3.png">
<style type="text/css">
a {text-decoration: none}
#genel { width:700px; margin:170px auto; }
#ev { width:159px; height:111px; margin-left:50px;  background-image:url(image/house.png);}
#arazi { width:159px; height:111px; margin-top:-100px; margin-left:260px; background-image:url(image/arazi.png);}
#arsa { width:159px; height:111px;  margin-top:-110px; margin-left:500px; background-image:url(image/arsa.png);}
</style>
</head>
<body>

<?php
include('connect.php');
$kullanici=$_POST['kullanici'];
$password=$_POST['password'];
$islem=mysql_query("SELECT * FROM kullanici");
$sonuc=mysql_fetch_array($islem);
if ( $kullanici==$sonuc['user'] && $password==$sonuc['password'])
{ ?>
<div id="arkaplan"> <div id="site"> <div id="ana">

<div id="banner"></div> <a href="index.php" id="logo">  </a>

<a href="index.php" id="menü">Anasayfa</a>
<a href="hous.php" id="menü2">Ev ilanları</a>
<a href="arsa.php" id="menü3">Arsa ilanları</a>
<a href="arazi.php" id="menü4">Arazi ilanları</a>
<a href="hakkımızda.html" id="menü5">Hakkımızda</a>
<a href="iletisim.html" id="menü6">İletişim</a>
<div id="genel">
 <a href="house.php"><h1>İlan ekle</h1> </a> <br/><br />
 <a href="delete.php"><h1>İlan sil</h1></a>

</div>
</div>
</div>
</div>
</body>
</html>
<?php
}
else{
	header("Location:index.php");
}



