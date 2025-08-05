<?php
if (isset($_GET['host'])) {
  $host = $_GET['host'];
  $ports = [21, 22, 23, 25, 53, 80, 110, 139, 143, 443, 445, 8080];
  echo "<h2>Port Scan Result for: " . htmlspecialchars($host) . "</h2>";
  echo "<pre>";
  foreach ($ports as $port) {
    $connection = @fsockopen($host, $port, $errno, $errstr, 1);
    if ($connection) {
      echo "Port $port: OPEN\n";
      fclose($connection);
    } else {
      echo "Port $port: CLOSED\n";
    }
  }
  echo "</pre>";
} else {
  echo "No host specified.";
}
?>
<br><a href="../index.php">← Back</a>
