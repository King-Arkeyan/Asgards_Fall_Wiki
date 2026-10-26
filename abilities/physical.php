<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Physical Abilities</title>
    <link rel="stylesheet" href="/Asgards_Fall_Wiki/assets/css/style.css" />
  </head>

<?php require '/xampp/htdocs/Asgards_Fall_Wiki/components/sections/header.php'; ?>

    <main>
      <div class="background">
        <span class="left1 physical"></span>
        <span class="left2 physical"></span>
        <span class="right1 physical"></span>
        <span class="right2 physical"></span>
      </div>
    <div class="container">
        <div class="space"></div>
        <div class="box physical row">
          <div class="main-card physical col-12">
            <div class="main-card-title">
              Physical Abilities
            </div>
          </div>
          <?php
            foreach ($bdd["main"]["physical"] as $item) {
                getComposant("main_card.php", [
                    "class"=>$item["class"],
                    "img"=>$item["img"],
                    "title"=>$item["title"],
                    "description"=>$item["description"],
                    "url"=>$item["url"]
                ]);
            }
            ?>
          <div class="icon col-12">
            <a href="/Asgards_Fall_Wiki/abilities.php" class="button physical">Abilities</a>
          </div>
        </div>
    </main>
  </body>
</html>
