<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Eff.Si</title>
  <link rel="icon" href="https://lh3.googleusercontent.com/a/AGNmyxYesyWM5l5iF782mOVqK6V_ZHjB_i20bsIr-q0xEpU=s288" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
  <link rel="stylesheet" href="ss.css?t=<?php echo time(); ?>">
</head>

<body>
  <header>
    <nav>
      <a id="profilePicture" href="#popup">
        <img src="https://lh3.googleusercontent.com/a/AGNmyxYesyWM5l5iF782mOVqK6V_ZHjB_i20bsIr-q0xEpU=s288" alt="Profile Picture">
      </a>
    </nav>
  </header>

  <main>
    <div class="overlay" id="popup">
      <div class="popup">
        <div class="popup-photo">
          <a href="#" onclick="toggleLinks()">
            <img src="https://lh3.googleusercontent.com/a/AGNmyxYesyWM5l5iF782mOVqK6V_ZHjB_i20bsIr-q0xEpU=s288" alt="Profile Picture">
          </a>
        </div>
        <div class="popup-quote">
          I had fun once and it was awful.
        </div>
        <a class="popup-close" onclick="history.back()">&times;</a>
      </div>
    </div>

    <h1 id="prjName">Project Eff.Si</h1>

    <div id="links">
      <div id="alinks">
        <a class="link" href="https://discord.com/users/115354204255551493" target="_blank">
          <i class="fab fa-discord"></i> Discord
        </a>
        <a class="link" href="https://store.epicgames.com/en-US/u/d35728a86e224a0d845bd407d7b7db4c" target="_blank">
          <i class="fa-solid fa-gamepad"></i> Epic Games
        </a>
        <a class="link" href="https://mastodon.social/@effsi" target="_blank">
          <i class="fab fa-mastodon"></i> Mastodon
        </a>
        <a class="link" href="https://steamcommunity.com/id/effsi" target="_blank">
          <i class="fab fa-steam"></i> Steam
        </a>
        <a class="link" href="https://t.me/Effsi" target="_blank">
          <i class="fab fa-telegram"></i> Telegram
        </a>
        <a class="link" href="https://twitch.tv/effsi" target="_blank">
          <i class="fa-brands fa-twitch"></i> Twitch
        </a>
        <a class="link" href="https://twitter.com/effsi" target="_blank">
          <i class="fa-brands fa-twitter"></i> Twitter
        </a>
      </div>

      <div id="blinks" class="hidden">
        <a class="link" href="http://cal.eff.si" target="_blank">
          <i class="fa-solid fa-calendar-days"></i> Calendar
        </a>
        <a class="link" href="http://drv.eff.si" target="_blank">
          <i class="fa-brands fa-google-drive"></i> Drive
        </a>
        <a class="link" href="http://groups.eff.si" target="_blank">
          <i class="fa-solid fa-users-rectangle"></i> Groups
        </a>
        <a class="link" href="http://mail.eff.si" target="_blank">
          <i class="fa-solid fa-at"></i> Mail
        </a>
        <a class="link" href="http://sites.eff.si" target="_blank">
          <i class="fa-solid fa-table-columns"></i> Sites
        </a>
        <a class="link" href="https://pw.eff.si" target="_blank">
          <i class="fa-solid fa-vault"></i> Vault
        </a>
      </div>
    </div>

    <div id="hashtag">
      #Fc
    </div>
  </main>

  <script>
    function toggleLinks() {
      var defaultLinks = document.getElementById("alinks");
      var newLinks = document.getElementById("blinks");
      defaultLinks.classList.toggle("hidden");
      newLinks.classList.toggle("hidden");
    }
  </script>
</body>
</html>