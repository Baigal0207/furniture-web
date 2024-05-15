<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Furniture Website</title>
    <!--Link To Css-->
    <link rel="stylesheet" href="style.css">
    <!--Box Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
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
            <li><a href="order.php"><i class='bx bx-cart' ></i></a></li>
            <li><a href="\furniture-web\furniture website Tusul\user\home.html"><i class='bx bx-user' ></i></a></li>
        </ul>
    </header>
    <!--Home-->
    <section class="home" id="home">
        <div class="home-text">
        <h1><Span>Таны</Span> Тав Тухыг <br> Хангах нь бидний <span> Аз жаргал юм</span></h1>
        <a href="#shop" class="btn">Дэлгүүр хэсэх</a>
        </div>
    </section>
<!--shop-->
<section class="shop" id="shop">
    <div class="heading">
        <span>Шинээр ирсэн</span>
        <h2>Дэлгүүр</h2>
    </div>
    <!-- Content -->
    <div class="shop-container">
        <!--Box 1-->
            <?php include 'get_items.php'; ?>
        </div>
    </section>

<!--About-->
<section class="about" id="about">
    <div class="about-img">
        <img src="/img/about.jpg" alt="">
    </div>
    <div class="about-text">
        <span>Бусад</span>
        <h2>Тавилга бол чухал хэсэг юм <br> тав тухтай байдлын төлөө</h2>
        <p>Urban Aero Brands нь олон улсын зах зээлд тэргүүлэгч тавилгын брэндүүдийн Монгол дахь албан ёсны дистрибьютороор ажилладаг. Таны хэрэгцээнд төгс нийцэх өөр өөрийн өнгө аяс бүхий дэлхийн шилдэг брэндүүдийг таны гэрт.</p>
    <a href="#About Us" class="btn">Цааш</a>
    </div>
</section>
<!--Brands-->
<section class="brands" id="brands">
    <div class="heading">
        <span>Брендүүд</span>
        <h3>Манай брендийн хамтрагчид</h3>
    </div>
</section>
<section class="newsletter" id="contact">
    <h2>Subscribe To Newsletter</h2>
    <div class="news-box">
        <input type="text" placeholder="Enter Your Email...">
        <a href="#" class="btn">Subscribe</a>
    </div>
</section>
 <!-- Footer -->
 <?php include 'footer.php'?>;

 <div class="popup-container" id="popup-container">
    <div class="popup-content">
        <div class="popup-img">
            <img src="" alt="" id="popup-item-img">
        </div>
        <div class="popup-info">
            <h3 id="popup-item-name"></h3>
            <div class="popup-stars">
                <!-- Stars rating -->
            </div>
            <p id="popup-item-description"></p>
            <div class="popup-details">
                <p><strong>Өнгө:</strong> <span id="popup-item-color"> Цагаан</span></p>
                <p><strong>Материал:</strong> <span id="popup-item-material"> Даавуу</span></p>
                <p><strong>Үйлдвэрлэсэн:</strong> <span id="popup-item-dimensions">Хонгконг</span></p>
            </div>
            <div class="popup-price-quantity">
                <span id="popup-item-price"></span>
                <div class="quantity-selector">
                    <button class="quantity-btn" id="decrease-quantity">-</button>
                    <input type="text" id="item-quantity" value="1" readonly>
                    <button class="quantity-btn" id="increase-quantity">+</button>
                </div>
            </div>
        </div>
        
        <button class="close-btn" id="close-popup">ⓧ</button>
        <button class="order-btn order-btn-bottom-right">Order Now</button>
    </div>
</div>


    <!-- Link To JS -->
    <script src="main.js"></script>

</body>
</html>