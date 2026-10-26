<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fire Abilities</title>
    <link rel="stylesheet" href="/Asgards_Fall_Wiki/assets/css/style.css" />
  </head>

<?php require '/xampp/htdocs/Asgards_Fall_Wiki/components/sections/header.php'; ?>

    <main>
      <div class="background">
        <span class="left1 fire"></span>
        <span class="left2 fire"></span>
        <span class="right1 fire"></span>
        <span class="right2 fire"></span>
      </div>
    <div class="container">
        <div class="space"></div>
        <div class="box fire row">
          <div class="main-card fire col-12">
            <div class="main-card-title">
              Fire Abilities
            </div>
          </div>
          <?php
            foreach ($bdd["main"]["fire"] as $item) {
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
            <a href="/Asgards_Fall_Wiki/abilities.php" class="button fire">Abilities</a>
          </div>
        </div>
    </main>
  </body>
</html>
