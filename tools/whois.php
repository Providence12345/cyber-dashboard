<?php
if (isset($_GET['domain'])) {
  $domain = escapeshellarg($_GET['domain']);
  echo "<h2>WHOIS Lookup for: " . htmlspecialchars($_GET['domain']) . "</h2>";
  echo "<pre>" . shell_exec("whois $domain") . "</pre>";
} else {
  echo "No domain specified.";
}
?>
<br><a href="../index.php">← Back</a>
