<?php 
    require_once "baglanti.php";
	
	############################################################
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sorgu = $conn->query("SELECT * FROM kayitlar");	
    while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) {
        echo "Adı: " . $cikti["ad"] . "<br /> Soyadı: " . $cikti["soyad"] . "<br /> E-posta: " . $cikti["no"] . "<hr />";
    }
	########################################################
	
	
    echo "<br><br>~~~~~~~~~~~~~~~~~~~~~~~~";
	
	
	
	//PDOStatement sınıfı ayrıca foreach döngüsü ile de
    //	veri listeleme için kullanılabilir.
    $sorgu = $conn->query("SELECT * FROM kayitlar");
    $sorgu->execute();
    foreach ($sorgu as $cikti) {
         echo "Adı: " . $cikti["ad"] . "<br /> Soyadı: " . $cikti["soyad"] . "<br /> E-posta: " . $cikti["no"] . "<hr />";
    }
	//###################################################
	
  	echo "<br><br>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
	
	//tek veri çekme	
	//->fetch  yerine ->rowCount yazılınca satır sayısı verir
	$user = $conn->query("SELECT * FROM kayitlar where ad='burak' order by id desc")->fetch();
	echo $user["ad"];
	
?>