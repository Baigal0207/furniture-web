let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
}
document.addEventListener("DOMContentLoaded", function() {
    const menu = document.querySelector('#menu-icon');
    const navbar = document.querySelector('.navbar');
    const shopItems = document.querySelectorAll('.box');
    const popupContainer = document.getElementById('popup-container');
    const popupItemImg = document.getElementById('popup-item-img');
    const popupItemName = document.getElementById('popup-item-name');
    const popupItemPrice = document.getElementById('popup-item-price');
    const closePopupBtn = document.getElementById('close-popup');
    const orderIcons = document.querySelectorAll('.bx-cart');

    // Set up event listener for each shop item
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

    // Close popup on close button click
    closePopupBtn.addEventListener('click', () => {
        popupContainer.style.display = 'none'; // Hide the popup
    });

    // Adjust image dimensions in popup after image load
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

    // Prevent default behavior of order icons and add to order
    orderIcons.forEach(item => {
        item.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default behavior of the order icon
            event.stopPropagation(); // Prevent propagation to parent elements
            const selectedItem = item.closest('.box'); // Find the closest '.box' parent element
            if (selectedItem) {
                const itemImgSrc = selectedItem.querySelector('img').src;
                const itemName = selectedItem.querySelector('.title-price h3').innerText;
                const itemPrice = selectedItem.querySelector('span').innerText;

                addToOrder(itemName, itemPrice, itemImgSrc);
            } else {
                console.error('Error: No selected item found.');
            }
        });
    });
});

function addToOrder(name, price, imgSrc) {
    // Implement your logic to add the item to the order here
    // For example, you can add it to local storage or display it in a separate order container
    // You can also modify the existing popup to show the selected item details
}
