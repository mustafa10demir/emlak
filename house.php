<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Yeşil Kemer Emlak Gayrimenkul Danışmanlığı </title>
<link href="stil.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="image/Untitled-3.png">
<style type="text/css">
	h1,input,form {padding: 0; margin: 0; border: none}
	a {text-decoration: none}
	img {border: none}
	#button { background-color:#000; color:#FFF; margin-top:60px; }
	#genel2 { width:650px; margin:-140px auto; background-color:#FFF;}
	#genel2 input { border:solid 2px #000; padding:3px; margin-top:-33px; margin-left:240px; width:400px; }
	#genel {width: 400px; margin: 170px auto}
	#sonuclar {background-color: #fff; border: 2px solid #ddd; padding: 7px; margin-top: 10px}
	#yuklemeFormu {background-color: #fff; border: 2px solid #ddd; padding: 7px}
	#yuklemeFormu h1 {background-color: #000; color: #fff; font-size: 14px; padding: 6px}
	#yuklemeDosyalari span {display: block; padding: 5px; border-bottom: 1px solid #ddd}
	.yukle {text-align: right; padding-top: 5px}
	.yukle input {background-color: #000; color: #fff; padding: 3px; cursor: pointer}
	.dosyaEkle {border-bottom: 2px solid #cbceae; background-color: #fdffe1; padding: 5px}
	.dosyaEkle a {color: #000}
	.resim {border: 2px solid #000; width: 65px; height: 65px; margin-right: 6px; margin-bottom: 6px}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		// Yeni Dosya Ekle
		$(".dosyaEkle a").click(function(){
			$("#yuklemeDosyalari").append('<span>Dosya Sec: <input type="file" name="dosya[]" /></span>');
		});
		
		// Dosya YÃ¼kle
		$("#form").bind("submit", function(){
			
			$("#sonuclar").empty();
			$(this).attr("target","gelenBilgi");
			$("<img />").attr("src","yukleniyor.gif").appendTo($("#sonuclar"));
			
			$("#gelenBilgi").bind("load", function(){
				
				var deger = $("#gelenBilgi").contents().find("body").html();
				$("img").remove();
				$("#sonuclar").html(deger);
				
			});
			
		});
		
	});
	</script>

</head><body>
<?php 


@$referer = $_SERVER['HTTP_REFERER'];  

if ($referer == "")  
{  

header("Location:index.php");  
}  

else  
{  
?>

<div id="arkaplan"> <div id="site"> <div id="ana">
<div id="banner"></div> <a href="index.php" id="logo">  </a>

<a href="index.php" id="menü">Anasayfa</a>
<a href="hous.php" id="menü2">Ev ilanları</a>
<a href="arsa.php" id="menü3">Arsa ilanları</a>
<a href="arazi.php" id="menü4">Arazi ilanları</a>
<a href="hakkımızda.html" id="menü5">Hakkımızda</a>
<a href="iletisim.html" id="menü6">İletişim</a>

<div id="genel">
<div id="yuklemeFormu">
<h1>Dosya Yukleme Islemi!!</h1>
<div class="dosyaEkle"><a href="javascript:void(0)">+ Yeni Dosya Ekle</a></div>
<form action="dosyaYukle.php" method="post" enctype="multipart/form-data" id="form">
<div id="yuklemeDosyalari">
<span>Dosya Sec: <input type="file" name="dosya[]" /></span>
</div>



</div>
<iframe id="gelenBilgi" name="gelenBilgi" src="" style="display: none"></iframe>
<div id="sonuclar"></div>
</div>

<div id="genel2">
<h1>Konut şekli:</h1><input type="text" name="tur" /><br/><br/>
<h1>Satılık / kiralık:</h1><input type="text" name="case" /><br/><br/>
<h1>Adres:</h1><input type="text" name="adres" /><br/><br/>
<h1>Oda sayısı:</h1><input type="text" name="os" /><br/><br/>
<h1>Metrekare:</h1> <input type="text" name="m" /><br/><br/>
<h1>Kat sayısı: </h1> <input type="text" name="kat" /><br/><br/>
<h1>Fiyatı: </h1> <input type="text" name="many" /><br/><br/>
<h1>Birim fiyatı(m²): </h1> <input type="text" name="x" /><br/><br/>
<h1>Diger bilgiler:</h1> <input type="text" name="info" /><br/><br/>
<h1>Foto sayısı:</h1> <input type="text" name="foto" /><br/><br/><br/><br/>
<input type="submit" value="Kaydet"  id="button" />
</div>
</form>
</div>

</div>

</div>

</body>
</html>
<?php
}
?>
