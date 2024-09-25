<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafemiz</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* arka plan ve metin rengi */
        body {
            background-color: black; /* Arka plan siyah */
            color: #fff; /* Metin rengi beyaz */
        }
        .container {
            margin-top: 20px;
        }
        .welcome {
            text-align: center;
            margin-bottom: 20px;
        }
        .booking-box {
            position: relative;
            text-align: center;
            margin-bottom: 20px;
        }
        /* Randevu Al Butonu Stili */
        .booking-box .btn-primary {
            background-color: #ff5733; /* Butonun arka plan rengi turuncu */
            border: none;
            padding: 15px 30px; /* Butonun iç boşlukları */
            font-size: 1.2rem; /* Buton yazı boyutu */
            border-radius: 25px; /* Butonun köşelerini yuvarlama */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Butona gölge ekleme */
            transition: all 0.3s ease; /* Hover efekti geçiş süresi */
        }
        .booking-box .btn-primary:hover {
            background-color: green; /* Hover durumunda buton rengi */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); /* Hover durumunda gölge */
            transform: translateY(-2px); /* Hover durumunda butonu biraz kaldırma */
        }
        .card {
            background-color: #333; /*  kart arka plan rengi koyu gri  */
            border: 1px solid #444; /* kart kenar rengi dark gri  */
            margin-bottom: 50px; /* kartların altina bosluk belirleme */
        }

        .card-img-top {
            height: 250px; /* gorselin yüksekligini ayarlar */
            object-fit: cover; /* gorselin oranını korur */
        }

        .section-title {
            text-align: center;
            margin: 20px ; /* alt bosluk */
            color: blue; /* icecekler başlık rengi beyaz */
        }

        .section-spacing {
            margin-bottom: 40px;
        }
        
        .card-body .price {
            font-size: 1.2rem;
            display: inline;
            color: yellow; /* Fiyat rengi sari */
        }

        /* Responsive Ayarlar */
        @media (max-width: 768px) {
            .booking-box .btn-primary {
                width: 100%; /* Butonun genişliğini tam yapar */
                padding: 12px; /* İç boşlukları küçültür */
                font-size: 1rem; /* Yazı boyutunu küçültür */
            }
            .card-img-top {
                height: 150px; /* Görsel yüksekliğini küçültür */
            }
        }
    </style>
</head>
<body>
    <!-- Baslik -->
    <div class="container">
        <div class="welcome">
            <h1>Kafemize Hoş Geldiniz</h1>
        </div>
        <!-- randevu alma  butonu -->
        <div class="booking-box">
            <a href="randevu_sistemi.php" class="btn btn-primary">Randevu Al</a>
        </div>
    </div>

    <!-- Beverages Section -->
    <div class="container">
        <!-- Sıcak İçecekler Bölümü Başlığı -->
        <h2 class="section-title">Sıcak İçecekler</h2>
        <div class="row">
            <!-- Sıcak İçecek 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="cayy.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Çay</h5>
                        <p class="card-text">Fiyat: <span class="price">20 TL</span></p>
                    </div>
                </div>
            </div>
            <!-- Sıcak İçecek 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="turkkahvesii.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Türk Kahvesi</h5>
                        <p class="card-text">Fiyat: <span class="price">50 TL</span></p>
                    </div>
                </div>
            </div>
            <!-- Sıcak İçecek 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="mochaa.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Mocha</h5>
                        <p class="card-text">Fiyat: <span class="price">120 TL</span></p>
                    </div>
                </div>
            </div>
            <!-- Sıcak İçecek 4 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="mochaa.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Çay</h5>
                        <p class="card-text">Fiyat: <span class="price">20 TL</span></p>
                    </div>
                </div>
            </div>
            <!-- Sıcak İçecek 5 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="mochaa.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Çay</h5>
                        <p class="card-text">Fiyat: <span class="price">20 TL</span></p>
                    </div>
                </div>
            </div>
            <!-- Sıcak İçecek 6 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="mocha.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Çay</h5>
                        <p class="card-text">Fiyat: <span class="price">20 TL</span></p>
                    </div>
                </div>
            </div>

            
        </div>

        <!-- Spacer -->
        <div class="section-spacing"></div>

        <!-- Soğuk İçecekler Bölümü Başlığı -->
        <h2 class="section-title">Soğuk İçecekler</h2>
        <div class="row">
            <!-- Soğuk İçecek 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="soğuk1.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Soğuk İçecek 1</h5>
                        <p class="card-text">Fiyat: <span class="price">8 TL</span></p>
                    </div>
                </div>
            </div>
            <!-- Soğuk İçecek 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="soğuk2.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Soğuk İçecek 2</h5>
                        <p class="card-text">Fiyat: <span class="price">9 TL</span></p>
                    </div>
                </div>
            </div>
            <!-- Soğuk İçecek 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="soğuk3.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Soğuk İçecek 3</h5>
                        <p class="card-text">Fiyat: <span class="price">7 TL</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
