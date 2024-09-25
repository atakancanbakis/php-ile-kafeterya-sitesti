<?php include 'baglan.php';?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevu Sistemi</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

    <style>
        body {
            background-color: #f8f9fa; /* Açık gri arka plan rengi */
            color: #333; /* Metin rengi koyu gri */
            padding: 30px;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
        }

        .form-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .form-container textarea {
            resize: none;
        }
    </style>
</head>
<body>

    <div class="container form-container">
        <h1>Randevu Sistemi</h1>

        <form action="" method="post">
            <div class="form-group">
                <label for="ad">Ad Soyad:</label>
                <input type="text" class="form-control" name="adsoyad" required>
            </div>

            <div class="form-group">
                <label for="telefon">Telefon:</label>
                <input type="number" class="form-control" name="telefon" required>
            </div>

            <div class="form-group">
                <label for="kisisayisi">Kişi Sayısı:</label>
                <input type="number" class="form-control" name="kisisayisi" required>
            </div>

            <div class="form-group">
                <label for="tarih">Tarih:</label>
                <input type="text" id="tarih" class="form-control" name="tarih" required>
            </div>

            <div class="form-group">
                <label for="mesaj">Saat ve Mesajınızı Belirtiniz:</label>
                <textarea name="mesaj" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" name="yorumkaydet" class="btn btn-primary btn-block">Randevu Kaydet</button>
        </form>
    </div>

    <?php
    if (isset($_POST['yorumkaydet'])) {
        function post($par, $st = false) {
            if ($st) {
                return htmlspecialchars(addslashes(trim($_POST[$par])));
            } else {
                return htmlspecialchars(trim($_POST[$par]));
            }
        } 
        
        $adsoyad = post('adsoyad');
        $telefon = post('telefon');
        $kisisayisi = post('kisisayisi');
        $mesaj = post('mesaj');
        $tarih = post('tarih');

        if (!$adsoyad || !$kisisayisi || !$telefon || !$tarih || !$mesaj) {
            echo '<script>
                swal({
                    title: "Hata",
                    text: "Tüm alanlar dolu olmak zorundadır.",
                    icon: "error",
                    button: false
                });
            </script>';
        } elseif (strlen($adsoyad) > 90) {
            echo '<script>
                swal({
                    title: "Hata",
                    text: "İsim ve soyisim 90 karakterden büyük olamaz.",
                    icon: "error",
                    button: false
                });
            </script>';
        } elseif (!preg_match('/^[a-zA-ZığüşöçĞÜŞİÖÇ\s]+$/u', $adsoyad)) {
            echo '<script>
                swal({
                    title: "Hata",
                    text: "Ad ve soyad sadece Türkçe ve İngilizce harfler ve boşluk içerebilir.",
                    icon: "error",
                    button: false
                });
            </script>';
        } else {
            $ayarekle = $db->prepare("INSERT INTO rezervasyon SET
                adsoyad = :adsoyad, 
                telefon = :telefon, 
                kisisayisi = :kisisayisi,
                tarih = :tarih,
                mesaj = :mesaj");

            $insert = $ayarekle->execute(array(
                'adsoyad' => $adsoyad,
                'telefon' => $telefon,
                'kisisayisi' => $kisisayisi,
                'tarih' => $tarih,
                'mesaj' => $mesaj
            ));

            if ($insert) {
                echo '<script>
                    swal({
                        title: "Başarılı",
                        text: "Randevunuz başarıyla oluşturulmuştur. İyi günler dileriz.",
                        icon: "success",
                    }).then(function() {
                        // Başarılı olduğunda yapılacak işlemler
                    });
                </script>';
                echo '<script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>';
            } else {
                echo '<script>
                    swal({
                        title: "Hata",
                        text: "Sistemsel bir hata mevcut. Lütfen daha sonra tekrar deneyiniz.",
                        icon: "error",
                        button: false
                    }).then(function() {
                        // Hata olduğunda yapılacak işlemler
                    });
                </script>';
            }
        }
    }
    ?>

    <script>
        $( "#tarih" ).datepicker({
            monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
            dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
            firstDay: 1
        });
    </script>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
