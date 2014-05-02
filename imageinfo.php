<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Yeşil Kemer Emlak Gayrimenkul Danışmanlığı </title>
<link href="stil.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/image-slideshow.css" type="text/css">
<link rel="stylesheet" type="text/css" href="shadowbox.css">
<script type="text/javascript" src="shadowbox.js"> </script>
<script type="text/javascript">
Shadowbox.init ();
</script>
<link rel="stylesheet" type="text/css" href="shadowbox.css">
<script type="text/javascript" src="shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    handleOversize: "drag",
    modal: true
});
</script>

<link rel="shortcut icon" href="image/Untitled-3.png">
</head>

<body>
<div id="arkaplan">
<div id="site">
<div id="ana">
<div id="banner"></div>
<a href="index.php">
<div id="logo"></div>
<div id="logo2"></div>
</a>
<a href="index.php" id="menü">Anasayfa</a>
<a href="hous.php" id="menü2">Ev ilanları</a>
<a href="arsa.php" id="menü3">Arsa ilanları</a>
<a href="arazi.php" id="menü4">Arazi ilanları</a>
<a href="hakkımızda.html" id="menü5">Hakkımızda</a>
<a href="iletisim.html" id="menü6">İletişim</a>
<div id="icerik">
<div id="orta">
<table id="anatable2">
<?php
include('connect.php');
$sayfa = $_GET['sayfa'];
$toplams=0;
$tr=0;

$top=mysql_query ("SELECT foto FROM head");
if ( $sayfa ==1 || $sayfa==0 )
{
	$sayfa3= $sayfa-1;
	$sonuc = mysql_query("SELECT * FROM head LIMIT $sayfa3, 1 ") ;
    $sorguliste=mysql_fetch_array($sonuc);
    $nfoto= $sorguliste['foto'];
	$konutur= $sorguliste['tur'];
    $islem2 = mysql_query("Select * from images LIMIT  0,$nfoto ");
	if ( $sorguliste['tur']=="ev")
	{
	echo '<div id="infoana"> <div id="infoleft"><div id="infobeyaz"> <p id="infos"> Fiyatı: </p></div><div id="infogri"><p id="infos">Adresi: </p></div><div id="infobeyaz"><p id="infos"> Oda sayısı: </p></div> <div id="infogri"><p id="infos"> Metrekare :</p></div> <div id="infobeyaz"><p id="infos"> Kat : </p></div> <div id="infogri"><p id="infos"> Satılık/Kiralık : </p></div><div id="infogri2"> <p id="infos">Diger Bilgiler: </p></div></div> 
	<div id="inforight"><div id="infobeyaz"> <p id="infos2">'. $sorguliste['many']  .'</p></div><div id="infogri"><p id="infos2">'. $sorguliste['adres']  .'</p></div><div id="infobeyaz"><p id="infos2">'. $sorguliste['os']  .' </p></div> <div id="infogri"><p id="infos2"> '. $sorguliste['m']  .'</p></div> <div id="infobeyaz"><p id="infos2"> '. $sorguliste['kat']  .' </p></div> <div id="infogri"><p id="infos">'. $sorguliste['durum'] .'</p></div><div id="infogri2"> <p id="infos2">'. $sorguliste['info']  .' </p></div></div></div>';
	}
	else 
	{
		echo '<div id="infoana"> <div id="infoleft"><div id="infobeyaz"> <p id="infos"> Fiyatı: </p></div><div id="infogri"><p id="infos">Adresi: </p></div><div id="infobeyaz"><p id="infos"> Metre kare fiyatı: </p></div> <div id="infogri"><p id="infos"> Metrekare :</p></div><div id="infobeyaz"><p id="infos"> Satılık/Kiralık : </p></div> <div id="infobeyaz2"><p id="infos">Diger Bilgiler:  </p></div> </div> 
	<div id="inforight"><div id="infobeyaz"> <p id="infos2">'. $sorguliste['many']  .'</p></div><div id="infogri"><p id="infos2">'. $sorguliste['adres']  .'</p></div><div id="infobeyaz"><p id="infos2">'. $sorguliste['mf']  .' </p></div> <div id="infogri"><p id="infos2"> '. $sorguliste['m']  .'</p></div> <div id="infobeyaz"><p id="infos">'. $sorguliste['durum'] .'</p></div><div id="infobeyaz2"><p id="infos2"> '. $sorguliste['info']  .' </p></div></div></div>';
		
	}
    while ( $sonuc2= mysql_fetch_array($islem2))
    {
	$tr++;
	echo'<td>';
	echo '<table id="table2"><td><a href="'.$sonuc2['image'].'" rel="shadowbox"><img src="'.$sonuc2['image'].'" width="150" height="75"> </a>';
	echo'</td></td></table>';
	 $sayi1=floor($tr/5);
	  $sayi2=$sayi1*5;
	  if($tr==$sayi2){echo'</tr>';}
	}
	
}
else if ( $sayfa ==2 ) {
$sayfa2 = $sayfa-2;
$sonuc = mysql_query("SELECT * FROM head LIMIT $sayfa2, 1 ") ;
$sorguliste=mysql_fetch_array($sonuc);
$nfoto= $sorguliste['foto'];
$sayfa3= $sayfa-1;
$sonuc3 = mysql_query("SELECT * FROM head LIMIT $sayfa3, 1 ") ;
$sorguliste2=mysql_fetch_array($sonuc3);
if ( $sorguliste['tur']=="ev")
	{
	echo '<div id="infoana"> <div id="infoleft"><div id="infobeyaz"> <p id="infos"> Fiyatı: </p></div><div id="infogri"><p id="infos">Adresi: </p></div><div id="infobeyaz"><p id="infos"> Oda sayısı: </p></div> <div id="infogri"><p id="infos"> Metrekare :</p></div> <div id="infobeyaz"><p id="infos"> Kat : </p></div> <div id="infobeyaz"><p id="infos"> Satılık/Kiralık : </p></div><div id="infogri2"> <p id="infos">Diger Bilgiler: </p></div></div> 
	<div id="inforight"><div id="infobeyaz"> <p id="infos2">'. $sorguliste['many']  .'</p></div><div id="infogri"><p id="infos2">'. $sorguliste['adres']  .'</p></div><div id="infobeyaz"><p id="infos2">'. $sorguliste['os']  .' </p></div> <div id="infogri"><p id="infos2"> '. $sorguliste['m']  .'</p></div> <div id="infobeyaz"><p id="infos2"> '. $sorguliste['kat']  .' </p></div> <div id="infobeyaz"><p id="infos">'. $sorguliste['durum'] .'</p></div><div id="infogri2"> <p id="infos2">'. $sorguliste['info']  .' </p></div></div></div>';
	}
	else 
	{
		echo '<div id="infoana"> <div id="infoleft"><div id="infobeyaz"> <p id="infos"> Fiyatı: </p></div><div id="infogri"><p id="infos">Adresi: </p></div><div id="infobeyaz"><p id="infos"> Metre kare fiyatı: </p></div> <div id="infogri"><p id="infos"> Metrekare :</p></div> <div id="infobeyaz"><p id="infos"> Satılık/Kiralık : </p></div><div id="infobeyaz2"><p id="infos">Diger Bilgiler:  </p></div> </div> 
	<div id="inforight"><div id="infobeyaz"> <p id="infos2">'. $sorguliste['many']  .'</p></div><div id="infogri"><p id="infos2">'. $sorguliste['adres']  .'</p></div><div id="infobeyaz"><p id="infos2">'. $sorguliste['mf']  .' </p></div> <div id="infogri"><p id="infos2"> '. $sorguliste['m']  .'</p></div> <div id="infobeyaz"><p id="infos">'. $sorguliste['durum'] .'</p></div><div id="infobeyaz2"><p id="infos2"> '. $sorguliste['info']  .' </p></div></div></div>';
		
	}
$yfoto= $sorguliste2['foto'];
$islem2 = mysql_query("Select * from images LIMIT $nfoto ,$yfoto ");
  while ( $sonuc2= mysql_fetch_array($islem2))
    {
	$tr++;
	echo'<td>';
	echo '<table id="table2"><td><a href="'.$sonuc2['image'].'" rel="shadowbox"><img src="'.$sonuc2['image'].'" width="150" height="75"> </a>';
	echo'</td></td></table>';
	 $sayi1=floor($tr/5);
	  $sayi2=$sayi1*5;
	  if($tr==$sayi2){echo'</tr>';}
	}
	

}
else {
	       
		   for ( $i=2; $i<=$sayfa ; $i++)
		   { 
			   
			   $sayfa2 = $sayfa-$i;
			   $sonuc = mysql_query("SELECT * FROM head LIMIT $sayfa2, 1 ") ;
               $sorgulistes=mysql_fetch_array($sonuc);
			   $toplams= $sorgulistes['foto']+$toplams;
		   }
			   $sayfa3= $sayfa-1;
		       $sonuc3 = mysql_query("SELECT * FROM head LIMIT $sayfa3, 1 ") ;
			   $sorguliste2=mysql_fetch_array($sonuc3);
			   $yfoto= $sorguliste2['foto'];
			   if ( $sorguliste2['tur']=="ev"){
	
	echo '<div id="infoana"> <div id="infoleft"><div id="infobeyaz"> <p id="infos"> Fiyatı: </p></div><div id="infogri"><p id="infos">Adresi: </p></div><div id="infobeyaz"><p id="infos"> Oda sayısı: </p></div> <div id="infogri"><p id="infos"> Metrekare :</p></div> <div id="infobeyaz"><p id="infos"> Kat : </p></div><div id="infobeyaz"><p id="infos"> Satılık/Kiralık : </p></div> <div id="infogri2"> <p id="infos">Diger Bilgiler: </p></div></div> 
	<div id="inforight"><div id="infobeyaz"> <p id="infos2">'. $sorguliste2['many']  .'</p></div><div id="infogri"><p id="infos2">'. $sorguliste2['adres']  .'</p></div><div id="infobeyaz"><p id="infos2">'. $sorguliste2['os']  .' </p></div> <div id="infogri"><p id="infos2"> '. $sorguliste2['m']  .'</p></div> <div id="infobeyaz"><p id="infos2"> '. $sorguliste2['kat']  .' </p></div> <div id="infobeyaz"><p id="infos">'. $sorguliste2['durum'] .'</p></div><div id="infogri2"> <p id="infos2">'. $sorguliste2['info']  .' </p></div></div></div>';
	}
	else 
	{
		echo '<div id="infoana"> <div id="infoleft"><div id="infobeyaz"> <p id="infos"> Fiyatı: </p></div><div id="infogri"><p id="infos">Adresi: </p></div><div id="infobeyaz"><p id="infos"> Metre kare fiyatı: </p></div> <div id="infogri"><p id="infos"> Metrekare :</p></div> <div id="infobeyaz"><p id="infos"> Satılık/Kiralık : </p></div><div id="infobeyaz2"><p id="infos">Diger Bilgiler:  </p></div> </div> 
	<div id="inforight"><div id="infobeyaz"> <p id="infos2">'. $sorguliste2['many']  .'</p></div><div id="infogri"><p id="infos2">'. $sorguliste2['adres']  .'</p></div><div id="infobeyaz"><p id="infos2">'. $sorguliste2['mf']  .' </p></div> <div id="infogri"><p id="infos2"> '. $sorguliste2['m']  .'</p></div> <div id="infobeyaz"><p id="infos">'. $sorguliste2['durum'] .'</p></div><div id="infobeyaz2"><p id="infos2"> '. $sorguliste2['info']  .' </p></div></div></div>';
		
	}
			   $islem2 = mysql_query("Select * from images LIMIT $toplams ,$yfoto ");
		  while ( $sonuc2= mysql_fetch_array($islem2))
    {
	$tr++;
	echo'<td>';
	echo '<table id="table2"><td><a href="'.$sonuc2['image'].'" rel="shadowbox"><img src="'.$sonuc2['image'].'" width="150" height="75"> </a>';
	echo'</td></td></table>';
	 $sayi1=floor($tr/5);
	  $sayi2=$sayi1*5;
	  if($tr==$sayi2){echo'</tr>';}
	}
	

}

?>
</table></div></div></div></div></div>
</body>
</html>
