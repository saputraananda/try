<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="{{ asset('js/popup.js') }}"></script>
    <title>KalKurs - home</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo" style="font-size:50px;"><span style="color: #DD761C;">Kal</span>Kurs</div>
            <ul>
                <li><a href="home" class="active">Home</a></li>
                <li><a href="kalkulator">Kalkulator</a></li>
                <li><a href="berita">Berita</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <section id="home" class="home-section">
            <div class="intro">
            <div class="logo" style="font-size:50px;"><span style="color: #DD761C;">Kal</span>Kurs</div>
                <p>Solusi mudah untuk menghitung kurs uang anda</p>
            </div>
        </section>
        <section class="content-section">
            <div class="content">
            <div class="image-content">
                    <img src="images/money.png" alt="Deskripsi Gambar">
                </div>
                <div class="text-content">
                    <h2>Mengapa harus KalKurs ??</h2>
                    <p>- Mampu menghitung kurs jual mata uang dengan mudah</p>
                    <p>- Mampu menghitung kurs beli mata uang dengan mudah</p>
                    <p>- Memberikan berita keuangan dunia terkini</p>
                    <p>- Membantu anda dalam memperkirakan nilai uang anda di negara lain</p>
                </div>
            </div>
        </section>

        <!-- info Kurs -->
        <section class="info-section">
            <h2>Sudahkah kamu tahu apa itu kurs jual dan kurs beli??</h2>
            <p style="font-style:italic;">Tekan dibawah ini untuk mengetahui lebih lanjut</p>
            <div class="cards">
            <div class="card" id="card-jual">
                <img src="images/jual.png" alt="Kurs Jual">
                <h3>Kurs Jual</h3>
            </div>
            <div class="card" id="card-beli">
                <img src="images/beli.png" alt="Kurs Beli">
                <h3>Kurs Beli</h3>
            </div>

                <div id="popup-jual" class="popup">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <img src="images/ya.png" alt="Kurs Jual">
                        <h3>Kurs Jual</h3>
                        <p>Kurs jual adalah nilai tukar mata uang asing yang ditawarkan oleh bank atau lembaga keuangan kepada para pelanggannya ketika mereka menjual mata uang asing. Ini adalah harga yang akan diberikan kepada pelanggan untuk setiap unit mata uang asing yang mereka jual.</p>
                        <p>Kurs jual ini biasanya lebih rendah daripada kurs beli, yang merupakan harga yang akan dikenakan kepada pelanggan saat mereka membeli mata uang asing. Perbedaan antara kurs jual dan kurs beli biasanya merupakan keuntungan bagi bank atau lembaga keuangan yang melakukan pertukaran mata uang.</p>
                    </div>
                </div>
                <div id="popup-beli" class="popup">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <img src="images/ya.png" alt="Kurs Beli">
                        <h3>Kurs Beli</h3>
                        <p>Kurs beli adalah nilai tukar mata uang asing yang ditawarkan oleh bank atau lembaga keuangan kepada para pelanggannya ketika mereka membeli mata uang asing. Ini adalah harga yang akan dikenakan kepada pelanggan untuk setiap unit mata uang asing yang mereka beli. </p>
                        <p>Kurs beli ini biasanya lebih tinggi daripada kurs jual, yang merupakan harga yang akan diberikan kepada pelanggan saat mereka menjual mata uang asing. Perbedaan antara kurs beli dan kurs jual biasanya merupakan keuntungan bagi bank atau lembaga keuangan yang melakukan pertukaran mata uang.</p>
                    </div>
                </div> 
            </div>
        </section>

        <!-- Info Uang -->
        <section class="currency-section">
            <h2>Mata Uang yang Tersedia pada Kalkurs</h2>
            <div class="currency-cards">
                <div class="currency-card">
                    <img src="images/rupiah.png" alt="Rupiah Indonesia">
                    <h3>Rupiah Indonesia</h3>
                </div>
                <div class="currency-card">
                    <img src="images/dollar.png" alt="Dollar AS">
                    <h3>Dollar AS</h3>
                </div>
                <div class="currency-card">
                    <img src="images/dirham.png" alt="Yen Jepang">
                    <h3>Dirham UEA</h3>
                </div>
                <div class="currency-card">
                    <img src="images/yuan.png" alt="Yuan China">
                    <h3>Yuan China</h3>
                </div>
                <div class="currency-card">
                    <img src="images/poundsterling.png" alt="Poundsterling Inggris">
                    <h3>Poundsterling Inggris</h3>
                </div>
                <div class="currency-card">
                    <img src="images/euro.png" alt="Euro Eropa">
                    <h3>Euro Eropa</h3>
                </div>
            </div>
        </section>

        <!-- TESTIMONI -->
        <section class="testimonials-section">
            <h2>Apa kata mereka tentang KalKurs</h2>
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="images/usaha2.jpg" alt="Gambar Pengguna 1">
                    </div>
                    <div class="testimonial-content">
                        <h3>Catrine Hels</h3>
                        <p>Menurut saya KalKurs merupakan platform yang sangat membatu bagi saya yang memerlukan informasi dan bantuan untuk menghitung nilai tukar mata uang dengan cepat dan terpercaya</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="images/usaha.jpeg" alt="Gambar Pengguna 2">
                    </div>
                    <div class="testimonial-content">
                        <h3>Heri Setia Agung</h3>
                        <p>Tidak perrlu diragukan, kualitas pelayanan KalKurs sangat baik dalam menyediakan kalkulator perhitungan kurs dan berita yang terbaru</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <ul class="footer-features">
                <li>Home</li>
                <li>Kalkulator</li>
                <li>Berita</li>
            </ul>
            <hr class="footer-divider">
            <div class="footer-logo">
                <div class="logo" style="font-size:50px;"><span style="color: #DD761C;">Kal</span>Kurs</div>
            </div>
            <p class="footer-description">KalKurs menyediakan solusi mudah untuk menghitung kurs uang Anda dengan cepat dan akurat.</p>
            <div class="footer-social-media">
                <a href="https://www.instagram.com" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://wa.me" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
            <p class="footer-copy">@KalKurs.com</p>
        </div>
    </footer>    
</body>
</html>