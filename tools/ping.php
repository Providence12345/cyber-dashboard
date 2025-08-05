<?php
if (isset($_GET['host'])) {
  $host = escapeshellarg($_GET['host']);
  echo "<h2>Pinging: " . htmlspecialchars($_GET['host']) . "</h2>";
  echo "<pre>" . shell_exec("ping -c 4 $host") . "</pre>";
} else {
  echo "No host provided.";
}
?>
<br><a href="../index.php">← Back</a>
