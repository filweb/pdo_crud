<?php
/*
######### AÇIKLAMALAR ##############
dizi şeklinde ekle

$data = [
    'name' => $name,
    'surname' => $surname,
    'sex' => $sex,
];
$sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);

tekli şekilde insert
$data = [
    'name' => $name,
    'surname' => $surname,
    'sex' => $sex,
];
$sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
$pdo->prepare($sql)->execute($data);
###############################################
*/

require_once "baglanti.php";
$ad="Burak";
$soyad="Kodcuoğlu";
$no="130";

try{
$data = [
    'ad' => $ad,
    'soyad' => $soyad,
    'no' => $no,
];
$sql = "INSERT INTO kayitlar (ad, soyad, no) VALUES (:ad, :soyad, :no)";
$ekle =$conn->prepare($sql)->execute($data);
echo "Ekleme başarılı";
} catch(PDOException $e) {
  echo "eklerken hata oluştu : " . $e->getMessage();
}

?>
