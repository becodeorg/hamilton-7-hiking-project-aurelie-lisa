<div class="sm:w-4/5 sm:m-auto">
<div class="rounded overflow-idden shadow-lg flex flex-wrap sm:flex-nowrap items-start justify-start p-4">
    <img class="m-w-full h-96 m-4" src="/images/mountain-hike.jpeg" alt="Mountain trail">
    <div class="m-4 sm:max-w-[50%]">
        <h2 class=" uppercase mb-2 text-2xl font-extrabold tracking-tight leading-none text-cyan-600 md:text-3xl lg:text-5xl"><?= $hike['hikeName']; ?></h2>

        <div class="flex justify-start gap-2 mb-2">
            <p class="text-gray-700 text-base"><i class="fa-solid fa-person-hiking"></i> <?= $hike['hikeDistance'] ?> km</p>
            <p class="text-gray-700 text-base"><i class="fa-regular fa-clock"></i> <?= $hike['hikeDuration'] ?></p>
            <p class="text-gray-700 text-base"><i class="fa-solid fa-arrow-trend-up"></i> <?= $hike['hikeElevation'] ?> m</p>
        </div>
        <p class="text-gray-700 text-base min-h-[150px]"><?= $hike['hikeDescription'] ?></p>
        <div>
            <p class="text-gray-700 text-base text-xs"><?= $hike['created_at']; ?></p>
            <p class="text-gray-700 text-base italic text-xs">Author : <?= $hike['user_id'] ?></p>
        </div>
    </div>
</div>
</div>
