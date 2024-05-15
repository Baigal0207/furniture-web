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
    <style>
        /* Custom CSS styles for layout */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            margin-top: 50px;
            display: flex;
            flex: 1;
        }

        .categories {
            width: 20%;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .products {
            width: 80%;
            padding: 20px;
        }
        .cont{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, auto));
            gap: 1rem;
            margin-top: 2rem;
            
        }
        /* Additional styles for better appearance */
        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-item {
            margin-bottom: 10px;
        }

        .category-item a {
            display: block;
            padding: 6px;
            border-radius: 5px;
            background-color: #ddd;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .category-item a:hover {
            background-color: #ccc;
        }

        /* Style for subcategories */
        .subcategory-list {
            margin-top: 5px;
            margin-left: 20px;
            padding-left: 20px;
            border-left: 1px solid #ccc;
        }

        .subcategory-item {
            margin-bottom: 5px;
        }

        .subcategory-item a {
            font-size: 0.9em;
            color: #666;
        }

        .subcategory-item a:hover {
            text-decoration: underline;
        }
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }

            .products {
                width: 100%;
            }

            .categories{
                display: none;
            }
        }
        
    </style>
</head>
<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo">Urban<span>Aero.</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="index.php">Нүүр</a></li>
            <li class="dropdown"><a href="#">Бүтээгдэхүүн</a></li>
            <li><a href="#about">Бусад</a></li>
            <li><a href="#contact">Холбоо барих</a></li>
            <li><i class='bx bx-cart' ></i></li>
            <li><i class='bx bx-user' ></i></li>
            <li><i class='bx bx-search' ></i></li>
        </ul>
    </header>

    <!-- Main Content -->
    <div class="container">
        <!-- Categories Section -->
        <section class="categories" id="categories">
            <h3>Манай ангилалууд</h3>
            <ul class="category-list">
                <?php include 'get_category.php'; ?>
            </ul>
        </section>

        <!-- Products Section -->
        <section class="products" id="products">
            <!-- Your product content goes here -->
            <h2>Бүтээгдэхүүнүүд</h2>
            <p>Products will be displayed here.</p>
            <div class="cont" id="product-container">
                <?php include 'switchItems.php'; ?>
            </div>
        </section>
        
    </div>
    <?php include 'footer.php'?>;
    <script src="main.js">
    </script>
</body>
</html>
