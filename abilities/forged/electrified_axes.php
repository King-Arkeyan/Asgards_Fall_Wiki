<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electrified Axes</title>
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
                <?php
                    $item = $bdd["forged"]["electrified_axes"];
                    getComposant("informations_card2.php", [
                        "class"=>$item["class"],
                        "title"=>$item["title"],
                        "img"=>$item["img"],
                        "description"=>$item["description"],
                        "baseDamage"=>$item["baseDamage"],
                        "baseCooldown"=>$item["baseCooldown"],
                        "baseAmount"=>$item["baseAmount"],
                        "damageType"=>$item["damageType"],
                        "abilityType"=>$item["abilityType"],
                        "ability1"=>$item["ability1"],
                        "ability2"=>$item["ability2"],
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
