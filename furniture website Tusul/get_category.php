<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_categories = "SELECT * FROM Baraa_Angilal";
$result_categories = $conn->query($sql_categories);

if ($result_categories->num_rows > 0) {
    while ($row = $result_categories->fetch_assoc()) {
        echo "<li class='category-item'>";
        echo "<a href='#' onclick='filterProducts(\"" . $row['Baraa_Angilal_ID'] . "\")'>" . $row["Angilal_ner"] . "</a>";
        
        $sql_subcategories = "SELECT * FROM Baraa_Ded_Angilal WHERE Baraa_Angilal_ID = '" . $row["Baraa_Angilal_ID"] . "'";
        $result_subcategories = $conn->query($sql_subcategories);
        
        if ($result_subcategories->num_rows > 0) {
            echo "<ul class='subcategory-list'>";
            while ($subrow = $result_subcategories->fetch_assoc()) {
                echo "<li class='subcategory-item'><a href='#'>" . $subrow["Ded_Angilal_ner"] . "</a></li>";
            }
            echo "</ul>";
        }
        echo "</li>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
