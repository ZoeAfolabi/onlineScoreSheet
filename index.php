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

// Get the table columns
$table_columns = array();
$sql = "SHOW COLUMNS FROM scoreTable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($table_columns, $row["Field"]);
  }
}

// Close the result set
$result->close();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Build the SQL query to insert the data
  $sql = "INSERT INTO scoreTable (";
  $values = "(";
  foreach ($table_columns as $column) {
    $sql .= $column.", ";
    $values .= "'".$_POST[$column]."', ";
  }
  $sql = rtrim($sql, ", ").") VALUES ";
  $values = rtrim($values, ", ").")";
  $sql .= $values;

  // Execute the query
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>

<!-- HTML form -->
<div style="border: 1px solid black; width: 350px; align-items:center;">

    <div style="background-color: yellow; border: 1px solid black; text-align: center;">
        <h2>Online Score Sheet</h2>
    </div>
    <br>
    <form method="post">
        <table>
            <tr style="align-items: center; border: 1px solid black;">
            </tr>
            <?php
      foreach ($table_columns as $column) {
          echo "<tr>
          <th style='border: 1px solid black; padding: 5px;'>".$column."</th>
          <td style='border: 1px solid black; outline: none;'><input type='text' name='".$column."' required></td>
          </tr>";
        }
        ?>
  </table>
  <button type="submit" style="background-color: blue; text-decoration: none; width:350px;">Submit</button>
</form>
<div>
</div>
</div>
