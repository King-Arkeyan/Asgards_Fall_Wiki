<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bloodveil</title>
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
                <?php
                    $item = $bdd["hero"]["bloodveil"];
                    getComposant("informations_card.php", [
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
                        "baseAmount"=>$item["baseAmount"],
                        "basePierceAmount"=>$item["basePierceAmount"]
                    ]);
                ?>
            </div>
            <div class="space"></div>
        </div>
    </main>
  </body>
</html>
