document.addEventListener('DOMContentLoaded', () => {
    const orderItemsContainer = document.querySelector('.order-items');
    const totalDisplay = document.querySelector('.total');
    let orders = JSON.parse(localStorage.getItem('orders')) || [];

    function displayOrders() {
        orderItemsContainer.innerHTML = '';
        let total = 0;
        orders.forEach(order => {
            const li = document.createElement('li');
            li.classList.add('order-item');
            li.innerHTML = `
                <div class="order-item-info">
                    <h3>${order.product}</h3>
                    <span>$${order.price.toFixed(2)}</span>
                </div>
                <button class="remove-btn" data-product="${order.product}">Remove</button>
            `;
            orderItemsContainer.appendChild(li);
            total += order.price;
        });
        totalDisplay.textContent = `Нийт үнэ: $${total.toFixed(2)}`;
    }

    function removeItem(product) {
        orders = orders.filter(order => order.product !== product);
        localStorage.setItem('orders', JSON.stringify(orders));
        displayOrders();
    }

    orderItemsContainer.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-btn')) {
            const product = e.target.getAttribute('data-product');
            removeItem(product);
        }
    });

    displayOrders();
});
