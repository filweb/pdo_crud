<?php 
    require_once "baglanti.php";
	try{
    $id="8";
	$sonuc = $conn->exec("DELETE FROM kayitlar WHERE id='$id'");
		if ($sonuc > 0) {
		  echo $sonuc . " kayıt silindi.";
		} else {
		  echo "Herhangi bir kayıt silinemedi.";
		}
		} catch(PDOException $e) {
		  echo "Silme işlemi sırasında hata oluştu : " . $e->getMessage();
		}
?>