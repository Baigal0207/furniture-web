<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$categoryQuery = "SELECT * FROM Baraa_Angilal";
$categoryResult = mysqli_query($conn, $categoryQuery);

// Store main categories in an array
$categories = [];
while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
    $categoryRow['subcategories'] = []; // Initialize subcategories array
    $categories[$categoryRow['Baraa_Angilal_ID']] = $categoryRow;
}

// Query database for sub-categories
$subCategoryQuery = "SELECT * FROM Baraa_Ded_Angilal";
$subCategoryResult = mysqli_query($conn, $subCategoryQuery);

// Store sub-categories under their respective main categories
while ($subCategoryRow = mysqli_fetch_assoc($subCategoryResult)) {
    $categoryId = $subCategoryRow['Baraa_Angilal_ID'];
    $categories[$categoryId]['subcategories'][] = $subCategoryRow;
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories and Products</title>
    <style>
         .container {
            display: flex;
        }
        .sidebar {
            width: 200px;
            padding: 20px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .sidebar h2 {
            margin-bottom: 10px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar li {
            margin-bottom: 5px;
        }
        .sidebar li a {
            text-decoration: none;
            color: #000;
        }
        .sidebar li a:hover {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Categories</h2>
            <ul>
                <?php foreach ($categories as $category): ?>
                    <li>
                        <a href="#"><?php echo $category['Angilal_ner']; ?></a>
                        <?php if (!empty($category['subcategories'])): ?>
                            <ul>
                                <?php foreach ($category['subcategories'] as $subcategory): ?>
                                    <li>
                                        <a href="category.php?category_id=<?php echo $subcategory['Baraa_Ded_Angilal_ID']; ?>">
                                            <?php echo $subcategory['Ded_Angilal_ner']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="content">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "store";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check if a category is selected
            if (isset($_GET['category_id'])) {
                $selectedCategoryId = $_GET['category_id'];
                // Query database for products in the selected category
                $productQuery = "SELECT * FROM baraa_lavlah WHERE Baraa_Ded_Angilal_ID = $selectedCategoryId";
                $productResult = mysqli_query($conn, $productQuery);
                // Display products
                if (mysqli_num_rows($productResult) > 0) {
                    echo "<h2>Products</h2>";
                    echo "<ul>";
                    while ($productRow = mysqli_fetch_assoc($productResult)) {
                        echo "<li>{$productRow['Baraa_ner']}</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No products found for this category.</p>";
                }
            } else {
                echo "<p>Please select a category from the left sidebar.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>