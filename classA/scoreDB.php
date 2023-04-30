<?php
// Database configuration
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "onlineScoreSheet"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the scoreTable
$sql = "SELECT * FROM scoreTable";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
  // Output the data in a table format
  echo "<table style='border-collapse: collapse;'>";
  echo "<tr>
            <th style='border: 1px solid black;'>Matric Number</th>
            <th style='border: 1px solid black;'>First Name</th>
            <th style='border: 1px solid black;'>Last Name</th>
            <th style='border: 1px solid black;'>SENG406</th>
            <th style='border: 1px solid black;'>SENG412</th>
            <th style='border: 1px solid black;'>SENG404</th>
            <th style='border: 1px solid black;'>SENG408</th>
        </tr>";
  while($row = $result->fetch_assoc()) {
      echo "<tr>
                <td style='border: 1px solid black;'>".$row['matric_number']."</td>
                <td style='border: 1px solid black;'>".$row['firstname']."</td>
                <td style='border: 1px solid black;'>".$row['lastname']."</td>
                <td style='border: 1px solid black;'>".$row['SENG406']."</td>
                <td style='border: 1px solid black;'>".$row['SENG412']."</td>
                <td style='border: 1px solid black;'>".$row['SENG404']."</td>
                <td style='border: 1px solid black;'>".$row['SENG408']."</td>
            </tr>";
  }
  echo "</table>";
} else {
  echo "No data found.";
}

// Close the database connection
$conn->close();
?>
