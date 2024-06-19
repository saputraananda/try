document.addEventListener('DOMContentLoaded', function () {
    var popupJual = document.getElementById('popup-jual');
    var popupBeli = document.getElementById('popup-beli');
    var cardJual = document.getElementById('card-jual');
    var cardBeli = document.getElementById('card-beli');
    var closeButtons = document.querySelectorAll('.close');

    function openPopup(popup) {
        popup.style.display = 'flex';
        document.body.classList.add('no-scroll');
    }

    function closePopup(popup) {
        popup.style.display = 'none';
        document.body.classList.remove('no-scroll');
    }

    cardJual.addEventListener('click', function (event) {
        event.preventDefault();
        openPopup(popupJual);
    });

    cardBeli.addEventListener('click', function (event) {
        event.preventDefault();
        openPopup(popupBeli);
    });

    closeButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            closePopup(this.closest('.popup'));
        });
    });

    window.addEventListener('click', function (event) {
        if (event.target === popupJual) {
            closePopup(popupJual);
        } else if (event.target === popupBeli) {
            closePopup(popupBeli);
        }
    });
});
