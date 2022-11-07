<?php 
    require_once "baglanti.php";	
	$ad="Ömer";
	$soyad="Zort";
	$no="700";
	$id="9";
	
	try{
	$data = [
    'ad' => $ad,
    'soyad' => $soyad, 
    'id' => $id,	
    'no' => $no,
	];
	$sql = "UPDATE kayitlar SET ad=:ad, soyad=:soyad, no=:no WHERE id=:id";
	$stmt= $conn->prepare($sql);
	$stmt->execute($data);
	echo "Kayıt güncellendi";
	} catch(PDOException $e) {
	  echo "güncellenirken hata oluştu : " . $e->getMessage();
	}		
?>