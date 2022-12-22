<h2 class="text-center">All hikes</h2>
<div class="justify-center flex flex-wrap gap-5">
    <?php foreach ($hikes as $hike) : ?>
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full h-96 p-4" src="/images/mountain-hike.jpeg" alt="Mountain trail">
        <div class="flex justify-around">
            <p class="text-gray-700 text-base"><i class="fa-solid fa-person-hiking"></i> <?= $hike['hikeDistance'] ?> km</p>
            <!-- <img src="#" alt="duration"> -->
            <p class="text-gray-700 text-base"><i class="fa-regular fa-clock"></i> <?= $hike['hikeDuration'] ?></p>
            <!-- <img src="#" alt="elevation"> -->
            <p class="text-gray-700 text-base"><i class="fa-solid fa-arrow-trend-up"></i> <?= $hike['hikeElevation'] ?> m</p>
        </div>
        <div class="px-6 py-4">
            <a href="/hike?id=<?= $hike['hike_id']; ?>/<?= $hike['firstname']; ?><?= $hike['lastname']; ?>">
                <h3 class="font-bold text-xl mb-2"><?= $hike['hikeName'] ?></h3>
            </a>
            <p class="text-gray-700 text-base"><?= $hike['hikeDescription'] ?>
        </div>
        <!--  <p>TAG</p>
        <p>TAG</p>
        <p>TAG</p>
        <p class="text-gray-700 text-base"><?= $hike['created_at'] ?></p>
        <p class="text-gray-700 text-base">Autor : <?= $hike['firstname']; ?> <?= $hike['lastname']; ?></p>
        -->
    </div>
    <?php endforeach; ?>
</div>
