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

                // Query to fetch categories
                $sql_categories = "SELECT * FROM Baraa_Angilal";
                $result_categories = $conn->query($sql_categories);

                // Check if there are any results
                if ($result_categories->num_rows > 0) {
                    // Output data of each row
                    while($row = $result_categories->fetch_assoc()) {
                        echo "<li class='category-item'>";
                        echo "<a onclick='filterProducts(" . $row['Baraa_Angilal_ID'] . ")'>" . $row["Angilal_ner"] . "</a>";
                        // Query to fetch subcategories for each category
                        $sql_subcategories = "SELECT * FROM Baraa_Ded_Angilal WHERE Baraa_Angilal_ID = '" . $row["Baraa_Angilal_ID"] . "'";
                        $result_subcategories = $conn->query($sql_subcategories);
                        // Check if there are any subcategories
                        if ($result_subcategories->num_rows > 0) {
                            echo "<ul class='subcategory-list'>";
                            // Output subcategories
                            while($subrow = $result_subcategories->fetch_assoc()) {
                                echo "<li class='subcategory-item'><a href='#'>" . $subrow["Ded_Angilal_ner"] . "</a></li>";
                            }
                            echo "</ul>";
                        }
                        echo "</li>";
                    }
                } else {
                    echo "0 results";
                }
                // Close database connection
                $conn->close();
                ?>