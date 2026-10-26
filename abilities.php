<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abilities</title>
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
            <p class="main-card-title"> Abilities </p>
          </div>
          <div class="card col-12">
            <p class="card-title">Description</p>
            <p class="card-desc"> Abilities are the core mechanics of combat in Asgard's Fall. Every hero starts with a unique weapon, which functions as an ability but does not occupy a slot in the ability bar. The ability bar is limited to a maximum of five slots, and heroes can obtain additional abilities by leveling up during a run. </p>
          </div>
          <div class="card col-12">
            <p class="card-title">Obtaining</p>
            <p class="card-desc"> When leveling up, the hero can choose from a random selection of abilities. Each ability has a set of attributes that determine its effectiveness and synergy with other mechanics. The chance of what ability to get from the given pool can be manipulated with various stats. </p>
          </div>
            <?php
              foreach ($bdd["abilities"] as $item) {
                  getComposant("abilities_card.php", [
                      "col"=>$item["col"],
                      "class"=>$item["class"],
                      "img"=>$item["img"],
                      "title"=>$item["title"],
                      "damageType"=>$item["damageType"],
                      "statusEffect"=>$item["statusEffect"],
                      "effectOnHit"=>$item["effectOnHit"],
                      "url"=>$item["url"]
                  ]);
              }
            ?>
        </div> 
    </main>
  </body>
</html>
