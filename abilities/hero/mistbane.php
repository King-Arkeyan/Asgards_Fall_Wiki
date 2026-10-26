<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mistbane</title>
    <link rel="stylesheet" href="/Asgards_Fall_Wiki/assets/css/style.css" />
  </head>

<?php require '/xampp/htdocs/Asgards_Fall_Wiki/components/sections/header.php'; ?>

    <main>
      <div class="background">
        <span class="left1 poison"></span>
        <span class="left2 poison"></span>
        <span class="right1 poison"></span>
        <span class="right2 poison"></span>
      </div>
        <div class="container">
            <div class="space"></div>
            <div class="box poison row">
                <?php
                    $item = $bdd["hero"]["mistbane"];
                    getComposant("hero_card.php", [
                        "class"=>$item["class"],
                        "title"=>$item["title"],
                        "img"=>$item["img"],
                        "description"=>$item["description"],
                        "baseDamage"=>$item["baseDamage"],
                        "baseCooldown"=>$item["baseCooldown"],
                        "damageType"=>$item["damageType"],
                        "abilityType"=>$item["abilityType"],
                        "url"=>$item["url"],
                        "page"=>$item["page"],
                    ]);
                ?>
            </div>
            <div class="space"></div>
        </div>
    </main>
  </body>
</html>
