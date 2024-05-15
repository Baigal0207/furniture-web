<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders</title>
    <!--Link To Css-->
    <link rel="stylesheet" href="style.css">
    <!--Box Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo">Urban<span>Aero.</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <form action="search.html" method="post" class="search-form">
                <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
                <button type="submit" class="fas fa-search"></button>
            </form>
            <li><a href="index.php">Нүүр</a></li>
            <li><a href="category.php">Бүтээгдэхүүн</a></li>
            <li><a href="#about">Бусад</a></li>
            <li><a href="#contact">Холбоо барих</a></li>
            <li><a href="order.php"><i class='bx bx-cart'></i></a></li>
            <li><a href="#"><i class='bx bx-user'></i></a></li>
        </ul>
    </header>
    <!--Main Content-->
    <main>
        <section class="cart" id="cart">
            <div class="heading">
                <span>Таны сагс</span>
                <h2>Захиалгууд</h2>
            </div>
            <div class="order-container">
                <ul class="order-items">
                    <!-- Ordered items will be appended here -->
                </ul>
                <p class="total">Нийт үнэ: $0.00</p>
            </div>
        </section>
    </main>
    <!-- Link To JS -->
    <script src="order.js"></script>
</body>
</html>
