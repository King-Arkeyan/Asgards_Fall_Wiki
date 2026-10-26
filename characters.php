<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Characters</title>
    <link rel="stylesheet" href="/Asgards_Fall_Wiki/assets/css/style.css" />
  </head>

<?php require '/xampp/htdocs/Asgards_Fall_Wiki/components/sections/header.php'; ?>

    <main>
      <div class="background">
        <span class="left1"></span>
        <span class="left2"></span>
        <span class="right1"></span>
        <span class="right2"></span>
      </div>
    <div class="container">
        <div class="space"></div>
        <div class="box row">
          <div class="main-card col-12">
            <div class="main-card-title">
              Characters
            </div>
          </div>
          <?php
            foreach ($bdd["characters"] as $item) {
                getComposant("characters_card.php", [
                    "img"=>$item["img"],
                    "title"=>$item["title"],
                    "class"=>$item["class"],
                    "role"=>$item["role"],
                    "playstyle"=>$item["playstyle"],
                    "trait1"=>$item["trait1"],
                    "trait2"=>$item["trait2"],
                    "ability"=>$item["ability"],
                    "url"=>$item["url"]
                ]);
            }
            ?>
    </main>
  </body>
</html>
