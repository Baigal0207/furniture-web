let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
}

document.addEventListener('DOMContentLoaded', function() {
    const shopItems = document.querySelectorAll('.box');
    const popupContainer = document.getElementById('popup-container');
    const popupItemImg = document.getElementById('popup-item-img');
    const popupItemName = document.getElementById('popup-item-name');
    const popupItemPrice = document.getElementById('popup-item-price');
    const closePopupBtn = document.getElementById('close-popup');

    shopItems.forEach(item => {
        item.addEventListener('click', () => {
            const itemImgSrc = item.querySelector('img').src;
            const itemName = item.querySelector('.title-price h3').innerText;
            const itemPrice = item.querySelector('span').innerText;

            popupItemImg.src = itemImgSrc;
            popupItemName.innerText = itemName;
            popupItemPrice.innerText = itemPrice;

            popupContainer.style.display = 'flex'; // Display the popup
        });
    });

    closePopupBtn.addEventListener('click', () => {
        popupContainer.style.display = 'none'; // Hide the popup
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const popupImg = document.querySelectorAll('.popup-img img');

    popupImg.forEach(img => {
        img.addEventListener('load', function() {
            const containerWidth = img.parentElement.offsetWidth;
            const containerHeight = img.parentElement.offsetHeight;
            const imgWidth = img.width;
            const imgHeight = img.height;

            if (imgWidth / imgHeight > containerWidth / containerHeight) {
                img.style.width = '100%';
                img.style.height = 'auto';
            } else {
                img.style.width = 'auto';
                img.style.height = '100%';
            }
        });
    });
});
