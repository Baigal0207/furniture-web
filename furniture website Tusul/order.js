document.addEventListener('DOMContentLoaded', function() {
    const orderContainer = document.querySelector('.order-items');
    const totalElement = document.querySelector('.total');

    // Retrieve ordered items from local storage
    const orderedItems = JSON.parse(localStorage.getItem('cartItems'));

    // Check if there are any ordered items
    if (orderedItems && orderedItems.length > 0) {
        // Initialize total price
        let totalPrice = 0;

        // Iterate over ordered items and create HTML elements dynamically
        orderedItems.forEach(item => {
            const li = document.createElement('li');
            li.innerHTML = `
                <div class="order-item">
                    <div class="item-info">
                        <h3>${item.name}</h3>
                        <p>Price: $${item.price}</p>
                    </div>
                </div>
            `;
            // Append item to order container
            orderContainer.appendChild(li);

            // Add item price to total price
            totalPrice += parseFloat(item.price);
        });

        // Update total price displayed on the page
        totalElement.textContent = `Нийт үнэ: $${totalPrice.toFixed(2)}`;
    } else {
        // If no ordered items found, display a message
        const message = document.createElement('p');
        message.textContent = 'Таны сагс хоосон байна.';
        orderContainer.appendChild(message);
    }
});
