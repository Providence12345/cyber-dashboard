<?php
if (isset($_GET['ip'])) {
  $ip = htmlspecialchars($_GET['ip']);
  $api = "http://ip-api.com/json/$ip";
  $response = file_get_contents($api);

  if ($response) {
    $data = json_decode($response, true);
    echo "<h2>Geolocation for IP: $ip</h2><pre>";
    foreach ($data as $key => $value) {
      echo ucfirst($key) . ": $value\n";
    }
    echo "</pre>";
  } else {
    echo "Failed to fetch data.";
  }
} else {
  echo "No IP provided.";
}
?>
<br><a href="../index.php">← Back</a>
