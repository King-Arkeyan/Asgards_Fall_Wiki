<div class="card <?= $params['class']?> <?= $params['col']?>">
    <img
        src="/Asgards_Fall_Wiki/assets/img/<?= $params['img']?>"
        alt=""
        class="card-icon"
    />
    <div class="card-title <?= $params['class']?>"><?= $params['title']?></div>
    <p class="card-desc <?= $params['class']?>"><b>Damage Type : </b><?= $params['damageType']?></p>
    <p class="card-desc <?= $params['class']?>"><b>Status Effect : </b><?= $params['statusEffect']?></p>
    <p class="card-desc <?= $params['class']?>"><b>Effect on Hit : </b><?= $params['effectOnHit']?></p>
    <a class="card-button <?= $params['class']?>" href="/Asgards_Fall_Wiki/abilities/<?= $params['url']?>">View All</a>
</div>