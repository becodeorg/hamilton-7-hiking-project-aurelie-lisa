<h2>All hikes</h2>
<div>
    <?php foreach ($hikes as $hike) : ?>
    <div>
        <a href="/hike?id=<?= $hike['hike_id']; ?>/<?= $hike['firstname']; ?><?= $hike['lastname']; ?>">
            <h3><?= $hike['hikeName'] ?></h3>
        </a>
        <!-- <img src="#" alt="add"> -->
        <p><?= $hike['hikeDescription'] ?></p>
        <!-- <img src="#" alt="distance"> -->
        <p><?= $hike['hikeDistance'] ?> km</p>
        <!-- <img src="#" alt="duration"> -->
        <p><?= $hike['hikeDuration'] ?></p>
        <!-- <img src="#" alt="elevation"> -->
        <p><?= $hike['hikeElevation'] ?></p>
        <!--  <p>TAG</p>
        <p>TAG</p>
        <p>TAG</p> -->
        <p><?= $hike['created_at'] ?></p>
        <p>Autor : <?= $hike['firstname']; ?> <?= $hike['lastname']; ?></p>
    </div>
    <?php endforeach; ?>
</div>
