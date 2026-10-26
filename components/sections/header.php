  <?php
  require "C:/xampp/htdocs/Asgards_Fall_Wiki/functions.php"; 
  $bdd = json_decode(file_get_contents("C:/xampp/htdocs/Asgards_Fall_Wiki/bdd.json"), true);
  ?>
  <body>
    <header>
      <a href="/Asgards_Fall_Wiki/home.php"
        ><img src="/Asgards_Fall_Wiki/assets/img/Asgards_Fall_Logo.webp" alt="Home Button" class="logo"
      /></a>
      <nav>
        <a href="/Asgards_Fall_Wiki/characters.php">Characters</a>
        <a href="/Asgards_Fall_Wiki/runes.php">Runes</a>
        <a href="/Asgards_Fall_Wiki/abilities.php">Abilities</a>
        <a href="/Asgards_Fall_Wiki/fates.php">Fates</a>
        <a href="/Asgards_Fall_Wiki/enemies.php">Enemies</a>
        <a href="/Asgards_Fall_Wiki/blood_sacrifice.php">Blood Sacrifice</a>
        <a href="/Asgards_Fall_Wiki/realms.php">Realms</a>
      </nav>
      <a href="" class="hbg">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </header>