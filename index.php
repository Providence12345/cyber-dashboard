<!DOCTYPE html>
<html>
<head>
  <title>Cybersecurity Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Cybersecurity Dashboard</h1>

  <div class="tool">
    <h2>1. Connected Devices (ARP Scan)</h2>
    <div id="arp-output">Loading connected devices...</div>
  </div>

  <div class="tool">
    <h2>2. Ping Tool</h2>
    <form action="tools/ping.php" method="GET">
      <input type="text" name="host" placeholder="e.g. google.com" required>
      <button type="submit">Ping</button>
    </form>
  </div>

  <div class="tool">
    <h2>3. Port Scanner</h2>
    <form action="tools/portscan.php" method="GET">
      <input type="text" name="host" placeholder="Target IP/Domain" required>
      <button type="submit">Scan Ports</button>
    </form>
  </div>

  <div class="tool">
    <h2>4. WHOIS Lookup</h2>
    <form action="tools/whois.php" method="GET">
      <input type="text" name="domain" placeholder="e.g. facebook.com" required>
      <button type="submit">Lookup</button>
    </form>
  </div>

  <div class="tool">
    <h2>5. IP Geolocation</h2>
    <form action="tools/geoip.php" method="GET">
      <input type="text" name="ip" placeholder="e.g. 8.8.8.8" required>
      <button type="submit">Trace</button>
    </form>
  </div>

  <script>
    function loadARP() {
      fetch("tools/arp.php")
        .then(res => res.text())
        .then(data => {
          document.getElementById("arp-output").innerHTML = data;
        });
    }

    loadARP(); // Initial load
    setInterval(loadARP, 5000); // Refresh every 5 seconds
  </script>
</body>
</html>
