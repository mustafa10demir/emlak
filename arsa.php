<?php
include("connect.php");
if(!isset($_GET['sayfa'])){
$sayfa = 1;
} else {
$sayfa = $_GET['sayfa'];
}
//****************************************************************
// sayfa başına kaç kayıt listelenecek
$kacar = 9;
//****************************************************************
// Geçerli sayfadan itibaren kaç kayıt kaldığını buluyoruz

$kactan = (($sayfa * $kacar) - $kacar);
//****************************************************************

?>
<html><head>
<meta name="description" content="mustafa , demir , yeşil kemer emlak ,  Yeşil kemer emlak garimenkul danışmanlıgı  , kemer emlak" />
    <meta name="keywords" content="yeşil kemer emlak ,yeşil kemer emlak gayrimenkul danışmanlığı,Emlak,gayrimenkul,kemer emlak,yeşil kemer emlak danışanlığı">
    <meta name="author" content="Mustafa DEMİR">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Yeşil Kemer Emlak Gayrimenkul Danışmanlığı </title>
<link href="stil.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="image/Untitled-3.png">

</head><body>

<div id="arkaplan"> <div id="site"> <div id="ana">

<div id="banner"></div> <a href="index.php" id="logo">  </a>

<a href="index.php" id="menü">Anasayfa</a>
<a href="hous.php" id="menü2">Ev ilanları</a>
<a href="arsa.php" id="menü3">Arsa ilanları</a>
<a href="arazi.php" id="menü4">Arazi ilanları</a>
<a href="hakkımızda.html" id="menü5">Hakkımızda</a>
<a href="iletisim.html" id="menü6">İletişim</a>
<div id="ilan">Arsa ilanlarımız </div>';
<div id="icerik">
<table id="anatable">
<?php

$i=0;
$sonuc = mysql_query("SELECT * FROM head LIMIT $kactan,$kacar") ;
$sirano = 1; 
$z=0;
if ( $sayfa > 1 )
	{
		$y=($sayfa*9)-9;
		$z= $z+$y;
	}

while($sorguliste=mysql_fetch_array($sonuc)){
	if ( $sorguliste['tur'] == "arsa" || $sorguliste['tur']=="Arsa"){
	$z++;
	$adres=$sorguliste['adres'];
	$many=$sorguliste['many'];
	$fotosayisi=$sorguliste['foto'];
	
	echo'<td>';	  
	
	echo  '<table id="table"><td><a href="imageinfo.php?sayfa='.$z.'"> <img src="'.$sorguliste['image'].'" width="200" height="150"></a></br><center><i id="infoyazi">'.$adres.'<br/><center>'.$many.'</i>';  echo'</td></td></table>';


      $sayi1=floor($z/3);
	  $sayi2=$sayi1*3;
	  if($z==$sayi2){echo'</tr>';}
	}

}
 
	

	 echo'</table> </div>
  ';
  
  
  echo '<div id="sayfasonu">'; 
   
    
$toplam_kayit = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM head"),0);
//****************************************************************
// ceil() fonksiyonumuz ile toplam sayfa adedini buluyoruz
$toplam_sayfa = ceil($toplam_kayit / $kacar);
//****************************************************************
echo "<table width=\"700\" border=\"1\" bordercolor=\"FFFFFF\" align=\"center\" cellpadding=\"2\" cellspacing=\"2\"><tr class=\"tablobaslik\" bordercolor=\"000000\">";
//****************************************************************
// Önceki Kayıtların Gösterileceği Linkimiz
echo "<td width=\"100\">";
if($sayfa > 1){
$prev = ($sayfa - 1);
echo "<a href=\"".$_SERVER['PHP_SELF']."?sayfa=$prev\"> Önceki Sayfa</a>";}
else { echo "Önceki Sayfa";}
for($i = 1; $i <= $toplam_sayfa; $i++){
if(($sayfa) == $i){
echo "</td><td> Aktif Sayfa: ";
echo "<b> $i </b>";
} else {
echo "<a href=\"".$_SERVER['PHP_SELF']."?sayfa=$i\"></a> ";
}
echo "</td>";
}
// Sonraki Kayıtlarımızın Gösterileceği Linkimiz
echo "<td width=\"100\">";
if($sayfa < $toplam_sayfa){
$next = ($sayfa + 1);
echo "<a href=\"".$_SERVER['PHP_SELF']."?sayfa=$next\"> Sonraki Sayfa</a></td>";}
else { echo "Sonraki Sayfa";}
echo "</td>";
echo "<td>Toplam Kayıt : <b>$toplam_kayit</b> </td>";
echo "<td>Toplam Sayfa : <b>$toplam_sayfa </b></td>";
echo "</tr></table>";
 


  echo '
  </div>

</div>

</div>

</div>

</body>
</html>
';
?>
