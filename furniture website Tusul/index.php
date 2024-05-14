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
    
</head>
<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo">Urban<span>Aero.</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <div class="header-action">
              </div>
            </div>
    
            <li><a href="index.html">Нүүр</a></li>
            <li class="dropdown"><a href="#">Бүтээгдэхүүн</a></li>
            <li><a href="#about">Бусад</a></li>

            <li><a href="#contact">Холбоо барих</a></li>
            <li><i class='bx bx-cart' ></i></li>
           <li> <i class='bx bx-user' ></i></li>
            <li><i class='bx bx-search' ></i></li>
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

<!--New Arrival-->
<section class="new" id="new">
    <div class="heading">
        <span>New Collection</span>
        <h2>Шилдэг борлуулалт</h2>
    </div>
    <!--content-->
    <div class="new-container">
           <!--Box 1-->
           <?php include 'get_topItems.php'; ?>
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
 <section class="footer" id="footer">
    <div class="footer-box">
        <h2>Urban <span>Aero.</span></h2>
        <p>Таны хэрэгцээнд төгс нийцэх өөр өөрийн өнгө аяс бүхий дэлхийн шилдэг брэндүүдийг таны гэрт.</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
    </div>
    
    <div class="footer-box contact-info">
        <h3>Холбоо барих</h3>
        <span>Монгол улс, Улаанбаатар хот, Хан-Уул дүүрэг, Чингисийн өргөн чөлөө, Мишээл экспо, Мишээл-3 төв</span>
        <span>Утас: 7777-9393</span>
        <span>info@UrbanAero.com</span>
    </div>
</section>
<div class="copyright">
    <p>&#169; "UrbanAero" ХХК ©2024</p>
</div>

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
            <span id="popup-item-price"></span>
        </div>
        
        <button class="close-btn" id="close-popup">ⓧ</button>
    </div>
</div>

    <!-- Link To JS -->
    <script src="main.js"></script>

</body>
</html>