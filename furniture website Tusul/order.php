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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo">Urban<span>Aero.</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
        <form action="search.html" method="post" class="search-form">
                <input type="text" name="search_box" required placeholder="Search products..." maxlength="100">
                <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
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
                <span>Your Cart</span>
                <h2>Ordered Items</h2>
            </div>
            <div class="order-container">
                <ul class="order-items">
                    <?php
                    // Check if item data is present in URL parameters
                    if(isset($_GET['name']) && isset($_GET['price']) && isset($_GET['img'])) {
                        // Retrieve item data from URL parameters
                        $itemName = $_GET['name'];
                        $itemPrice = $_GET['price'];
                        $itemImg = $_GET['img'];

                        // Display the ordered item
                        echo "<li class='order-item'>";
                        echo "<div class='item-info'>";
                        echo "<h3>$itemName</h3>";
                        echo "<p>Price: $itemPrice</p>";
                        echo "</div>";
                        echo "<div class='item-img'>";
                        echo "<img src='$itemImg' alt='$itemName'>";
                        echo "</div>";
                        echo "</li>";
                    } else {
                        echo "<p>No items ordered yet.</p>";
                    }
                    ?>
                </ul>
                <!-- Additional content goes here -->
            </div>
        </section>
    </main>
    <!-- Link To JS -->
    <script src="order.js", src="main.js"></script>
</body>
</html>
