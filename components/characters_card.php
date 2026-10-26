<div class="card col-4 col-md-6 col-sm-12 <?= $params['class']?>">
    <img
        src="/Asgards_Fall_Wiki/assets/img/<?= $params['img']?>"
        alt=""
        class="card-icon"
    />
    <div class="card-title <?= $params['class']?>"><?= $params['title']?></div>
    <p class="card-desc <?= $params['class']?>"><b>Role : </b><?= $params['role']?></p>
    <p class="card-desc <?= $params['class']?>"><b>Playstyle : </b><?= $params['playstyle']?></p>
    <div class="card-desc <?= $params['class']?>"><b>Traits :</b>
        <ul>
            <li class="card-desc <?= $params['class']?>"><?= $params['trait1']?></li>
            <li class="card-desc <?= $params['class']?>"><?= $params['trait2']?></li>
        </ul>
    </div>
    <p class="card-desc <?= $params['class']?>"><b>Starting Ability : </b><?= $params['ability']?></p>
    <a class="card-button <?= $params['class']?>" href="/Asgards_Fall_Wiki/abilities/hero/<?= $params['url']?>">View All</a>
</div>