<?php
include('connect.php');
$toplam = count($_FILES["dosya"]["name"]);
$formatlar = array("image/png","image/jpeg","image/gif","image/jpg");
$tur=$_POST['tur'];
$m=$_POST['m'];
$x=$_POST['x'];
$many=$_POST['many'];
$info=$_POST['info'];
$os=$_POST['os'];
$kat=$_POST['kat'];
$foto= $_POST['foto'];
$adres=$_POST['adres'];
$case=$_POST['case'];
$images=$foto;
for ($z = 1; $z < $toplam; $z++){
if (in_array($_FILES["dosya"]["type"][$z], $formatlar)){
	
		$isim = rand(0,999999);
		$uzanti = substr($_FILES["dosya"]["name"][$z],-4,4);
		$dizin = "dosya/".$isim.$uzanti;
		if (move_uploaded_file($_FILES["dosya"]["tmp_name"][$z], $dizin)){
			
			echo '<img src="'.$dizin.'" alt="" class="resim" />';
			
		}else {
			echo '<font color="red">Dosya Yuklenemedi!!</form>';
		}		
	
	}else {
		echo '<font color="red">Yanlis Format!!</form>';
	}
    $islem= mysql_query("insert into images (image) values ('$dizin')");

}
for ($i = 0; $i < 1; $i++){

	if (in_array($_FILES["dosya"]["type"][$i], $formatlar)){
	
		$isim = rand(0,999999);
		$uzanti = substr($_FILES["dosya"]["name"][$i],-4,4);
		$dizin = "dosya/".$isim.$uzanti;
		if (move_uploaded_file($_FILES["dosya"]["tmp_name"][$i], $dizin)){
			
			echo '<img src="'.$dizin.'" alt="" class="resim" />';
			
		}else {
			echo '<font color="red">Dosya Yuklenemedi!!</form>';
		}		
	
	}else {
		echo '<font color="red">Yanlis Format!!</form>';
	}
    $islem= mysql_query("insert into head ( tur , mf , m  , many , info , image,os , kat ,foto ,adres , images , durum) values ('$tur' , '$x' , '$m' , '$many' , '$info' , '$dizin' , '$os' , '$kat' , '$foto' , '$adres' , '$images'  , '$case')");
	
    if ( $islem )
	{
		echo "Bilgiler kaydedildi.";
	}
	else
	{
		echo "Resmi tekrar kaydetmelisin.";
	}

}

?>