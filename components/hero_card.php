<div class="col-12 main-card <?= $params['class']?>">
    <div class="main-card-title <?= $params['class']?>"><?= $params['title']?></div>
</div>
<div class="col-12 card <?= $params['class']?>">
    <img src="/Asgards_Fall_Wiki/assets/img/abilities//<?= $params['img']?>" alt="" class="card-icon">
    <div class="card-title <?= $params['class']?>"><?= $params['description']?></div>
    <table class="card-desc <?= $params['class']?>">
        <tr class="<?= $params['class']?>">
            <thead class="<?= $params['class']?>">
                <th class="<?= $params['class']?>">Base Damage</th>
                <th class="<?= $params['class']?>">Base Cooldown</th>
                <th class="<?= $params['class']?>">Damage Type</th>
                <th class="<?= $params['class']?>">Ability Type</th>
            </thead>
            <tbody class="<?= $params['class']?>">
                <td class="<?= $params['class']?>"><?= $params['baseDamage']?></td>
                <td class="<?= $params['class']?>"><?= $params['baseCooldown']?></td>
                <td class="<?= $params['class']?>"><?= $params['damageType']?></td>
                <td class="<?= $params['class']?>"><?= $params['abilityType']?></td>
            </tbody>
        </tr>
    </table>
    <a href="/Asgards_Fall_Wiki/<?= $params['url']?>" class="card-button <?= $params['class']?>"><?= $params['page']?></a>
</div>