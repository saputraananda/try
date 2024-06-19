<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KalKurs - Perhitungan Kurs</title>
    <link rel="stylesheet" href="{{ asset('css/kalkulator.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/kalkulator.js') }}"></script>
</head>
<body>
    <header>
        <nav>
        <div class="logo"><span style="color: #DD761C;">Kal</span>Kurs</div>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="kalkulator" class="active">Kalkulator</a></li>
                <li><a href="berita">Berita</a></li>
            </ul>
        </nav>
    </header>
    <section class="calculator-section">
        <h1>Kalkulator Kurs</h1>
        <form id="currency-form">
            <div class="form-row">
                <div class="form-group">
                    <label for="from-currency">Asal Mata Uang</label>
                    <select id="from-currency" name="from-currency">
                        <option value="IDR">Rupiah Indonesia</option>
                        <option value="USD">Dollar AS</option>
                        <option value="AED">Dirham UEA</option>
                        <option value="CNY">Yuan China</option>
                        <option value="GBP">Poundsterling Inggris</option>
                        <option value="EUR">Euro Eropa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="to-currency">Tujuan Mata Uang</label>
                    <select id="to-currency" name="to-currency">
                        <option value="IDR">Rupiah Indonesia</option>
                        <option value="USD">Dollar AS</option>
                        <option value="AED">Dirham UEA</option>
                        <option value="CNY">Yuan China</option>
                        <option value="GBP">Poundsterling Inggris</option>
                        <option value="EUR">Euro Eropa</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="amount">Nominal</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            </div>
            <div class="button-container">
                <button type="button" onclick="calculateCurrency()">Hitung</button>
            </div>
        </form>
        <div class="result" id="result"></div>
        <p class="note">Nilai tukar dapat berubah kapan pun</p>
    </section>
    
</body>

</html>
