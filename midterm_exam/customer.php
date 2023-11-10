<?php
    require 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customers</title>
</head>
<?php
$sql = "select distinct Country from customers order by Country";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  echo "<tr>
        <td>{$row[' CompanyName']}</td>
        <td>{$row['ContactName']}</td>
      /<tr>";
}
?>
<body>

  <!-- Show country in h1. Ex: List of customer in Germany -->
  <h1>List of customer in </h1>
  <table>
    <tr>
      <th>Company name</th>
      <th>Contact name</th>
    </tr>
    <?php
$sql = "select CompanyName, ContactName from customers where Country='Germany'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  echo "<tr>
        <td>{$row[' CompanyName']}</td>
        <td>{$row['ContactName']}</td>
      /<tr>";
}
$conn->close();
?>  
  </table>
</body>
</html>