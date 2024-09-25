<?php
$servername = "localhost"; // Veritabanı sunucusu
$username = "root"; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$dbname = "randevular"; // Veritabanı adı

try {
    // PDO ile veritabanı bağlantısı oluştur
    $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // Hata modunu ayarla
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Bağlantı başarılı!";
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
    exit(); // Hata varsa çıkış yap
}

// Bağlantıyı kapat
// $db = null; // Bağlantıyı kapatmak için (isteğe bağlı)
?>