<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication Table</title>
  <style>
    table {
      border-collapse: collapse;
      margin: 20px 0;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2>Multiplication Table Generator</h2>

  <form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" min="1" required>
    <button type="submit">Generate</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["number"]);

    echo "<h3>Multiplication Table (1 to $num)</h3>";
    echo "<table>";

    // Table header row
    echo "<tr><th>*</th>";
    for ($col = 1; $col <= $num; $col++) {
      echo "<th>$col</th>";
    }
    echo "</tr>";

    // Table rows
    for ($row = 1; $row <= $num; $row++) {
      echo "<tr><th>$row</th>";
      for ($col = 1; $col <= $num; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
      }
      echo "</tr>";
    }

    echo "</table>";
  }
  ?>
</body>
</html>

