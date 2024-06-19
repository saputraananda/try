const exchangeRates = {
    IDR: {
        USD: 0.000068,
        AED: 0.00025,
        CNY: 0.00045,
        GBP: 0.000052,
        EUR: 0.000058
    },
    USD: {
        IDR: 14700,
        AED: 3.67,
        CNY: 6.36,
        GBP: 0.76,
        EUR: 0.85
    },
    AED: {
        IDR: 4000,
        USD: 0.27,
        CNY: 1.74,
        GBP: 0.21,
        EUR: 0.23
    },
    CNY: {
        IDR: 2300,
        USD: 0.16,
        AED: 0.57,
        GBP: 0.12,
        EUR: 0.13
    },
    GBP: {
        IDR: 19100,
        USD: 1.31,
        AED: 4.80,
        CNY: 8.39,
        EUR: 1.12
    },
    EUR: {
        IDR: 16500,
        USD: 1.18,
        AED: 4.32,
        CNY: 7.48,
        GBP: 0.89
    }
};

function calculateCurrency() {
    const fromCurrency = document.getElementById('from-currency').value;
    const toCurrency = document.getElementById('to-currency').value;
    const amount = document.getElementById('amount').value;

    if (fromCurrency === toCurrency) {
        document.getElementById('result').innerText = `Hasil: ${amount} ${toCurrency}`;
        return;
    }

    const rate = exchangeRates[fromCurrency][toCurrency];
    const result = amount * rate;
    
    document.getElementById('result').innerText = `Hasil: ${result.toFixed(2)} ${toCurrency}`;
}
