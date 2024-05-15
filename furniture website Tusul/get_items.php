<?php
// Establish database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch items from the database
$sql = "SELECT baraa.*, baraa_lavlah.Baraa_ner
        FROM baraa
        JOIN baraa_lavlah ON baraa.Baraa_lavlah_ID = baraa_lavlah.Baraa_lavlah_ID";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='box'>";
        echo "<div class='box-img'><img src='data:image/jpeg;base64," . base64_encode($row["Baraa_zurag"]) . "' alt=''></div>";
        echo "<div class='content'>";
        echo "<div class='title-price'>";
        echo "<h3>" . $row["Baraa_ner"] . "</h3>";
        // You can add more elements here such as description, ratings, etc.
        echo "</div>";
        echo "<span>" . $row["Baraa_vne"] . "</span>";
        echo "</div>";
        echo "<i class='bx bx-cart'></i>";
        echo "</div>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>
