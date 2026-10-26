<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forged Abilities</title>
    <link rel="stylesheet" href="/Asgards_Fall_Wiki/assets/css/style.css" />
  </head>

<?php require '/xampp/htdocs/Asgards_Fall_Wiki/components/sections/header.php'; ?>

    <main>
      <div class="background">
        <span class="left1 forged"></span>
        <span class="left2 forged"></span>
        <span class="right1 forged"></span>
        <span class="right2 forged"></span>
      </div>
    <div class="container">
        <div class="space"></div>
        <div class="box forged row">
          <div class="main-card forged col-12">
            <div class="main-card-title">
              Forged Abilities
            </div>
          </div>
          <?php
            foreach ($bdd["main"]["forged"] as $item) {
                getComposant("main_card.php", [
                    "class"=>$item["class"],
                    "img"=>$item["img"],
                    "title"=>$item["title"],
                    "description"=>$item["description"],
                    "url"=>$item["url"]
                ]);
            }
            ?>
          <div class="col-12">
            <div class="icon col-12">
            <a href="/Asgards_Fall_Wiki/abilities.php" class="button forged">Abilities</a>
          </div>
          </div>
        </div>
    </main>
  </body>
</html>
