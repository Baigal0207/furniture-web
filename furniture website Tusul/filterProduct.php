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

// Get the category ID from the request
$category_id = $_GET['category_id'];

// Query to fetch products based on the category ID
$sql_products = "
    SELECT Baraa_lavlah.*, Baraa_Ded_Angilal.Ded_Angilal_ner
    FROM Baraa_lavlah
    JOIN Baraa_Ded_Angilal ON Baraa_lavlah.Baraa_Ded_Angilal_ID = Baraa_Ded_Angilal.Baraa_Ded_Angilal_ID
    WHERE Baraa_Ded_Angilal.Baraa_Angilal_ID = '$category_id'
";
$result_products = $conn->query($sql_products);

// Check if there are any results
if ($result_products->num_rows > 0) {
    // Output data of each row
    while($product = $result_products->fetch_assoc()) {
        echo "<div class='product-item'>";
        echo "<h3>" . $product["Baraa_ner"] . "</h3>";
        echo "<p>" . $product["Baraa_tailbar"] . "</p>";
        echo "<p>Үнэ: " . $product["Bar_vne"] . "</p>";
        echo "<p>Хэмжээ: " . $product["Baraa_hemjee"] . "</p>";
        echo "<p>Өнгө: " . $product["Baraa_ungu"] . "</p>";
        echo "<p>Загвар: " . $product["Baraa_zagvar"] . "</p>";
        echo "<p>Зориулалт: " . $product["Baraa_zoriulalt"] . "</p>";
        echo "<p>Ширхэг: " . $product["Too_shirheg"] . "</p>";
        echo "<p>Үйлдвэрлэсэн улс: " . $product["Baraa_uild_uls"] . "</p>";
        echo "<p>Дэд Ангилал: " . $product["Ded_Angilal_ner"] . "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
