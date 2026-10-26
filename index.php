<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Asgard's Fall Wiki</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
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
              Welcome to the non-official Asgard's Fall Wiki !
            </div>
          </div>
          <div class="card col-12">
            <div class="card-desc">
              Asgard's Fall is a Norse mythology-inspired roguelite action game where players battle endless hordes across mythic realms. Choose from powerful heroes like the Warrior, Huntress, or Seer, each with unique abilities and progression paths. Customize your runs with the Web of Wyrd, unlock potent runes, and harness over 50 abilities to survive. With pixel-art visuals, Twitch integration, and dynamic gameplay modifiers, Asgard's Fall offers fast-paced, ever-evolving combat rooted in Viking legend.
            </div>
          </div>
          <?php
            foreach ($bdd["main"]["home"] as $item) {
                getComposant("main_card.php", [
                    "class"=>$item["class"],
                    "img"=>$item["img"],
                    "title"=>$item["title"],
                    "description"=>$item["description"],
                    "url"=>$item["url"]
                ]);
            }
            ?>
        </div>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
