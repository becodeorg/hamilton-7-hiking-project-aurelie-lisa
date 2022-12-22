<h2 class="text-center uppercase m-4 text-4xl font-extrabold tracking-tight leading-none text-gray-700 md:text-5xl lg:text-6xl"><?= $hike['hikeName']; ?></h2>
<div class="w-[400px] rounded overflow-hidden shadow-lg">
    <div>
        <img class="m-w-full h-96 p-4" src="/images/mountain-hike.jpeg" alt="Mountain trail">
    </div>
    <div>
        <p class="text-gray-700 text-base"><?= $hike['hikeDescription']; ?></p>
        <p class="text-gray-700 text-base"><?= $hike['hikeDistance']; ?></p>
        <p class="text-gray-700 text-base"><?= $hike['hikeDuration']; ?></p>
        <p class="text-gray-700 text-base"><?= $hike['hikeElevation']; ?></p>
        <p class="text-gray-700 text-base"><?= $hike['updated_at']; ?></p>
        <p class="text-gray-700 text-base">Author : <?= $hike['user_id'] ?></p>
    </div>
</div>
