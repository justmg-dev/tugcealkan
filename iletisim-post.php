<?php

$dsn = 'mysql:host=localhost;dbname=u1724032_ders';
$user = 'u1724032_denemeadmin';
$password = 'muhammetg34S!';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if ($_POST) {
    $adi_soyadi = $_POST['adi_soyadi'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    $query = $db->prepare('INSERT INTO iletisimv2 (adi_soyadi, telefon, email, mesaj) VALUES(?, ?, ?, ?)');
    $query->execute(array($adi_soyadi, $telefon, $email, $mesaj));

    header("Location:iletisim.php?success=1");
}
