<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Asgard's Fall Wiki</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
<?php
require __DIR__ . '/cards/header.php';
$bdd = json_decode(file_get_contents("bdd.json"), true);
foreach ($bdd["home"] as $item) {
    getComposant("card.php", [
        "img"=>$item["img"],
        "title"=>$item["title"],
        "description"=>$item["description"],
        "url"=>$item["url"]
    ]);
}
?>
</main>
<footer></footer>
</body>
</html>