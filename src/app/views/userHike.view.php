<h2 class="text-center text-cyan-600 uppercase m-4 text-2xl font-extrabold tracking-tight leading-none md:text-3xl lg:text-4xl">My hikes</h2>
<div class="justify-center flex flex-wrap gap-5 m-8">
    <?php foreach ($hikesUser as $hikeUser) : ?>
        <div class="w-[400px] rounded overflow-hidden shadow-lg">
            <img class="w-full h-96 p-4" src="/images/mountain-hike.jpeg" alt="Mountain trail">
            <div class="flex justify-around">
                <p class="text-gray-700 text-base"><i class="fa-solid fa-person-hiking"></i> <?= $hikeUser['hikeDistance'] ?> km</p>
                <!-- <img src="#" alt="duration"> -->
                <p class="text-gray-700 text-base"><i class="fa-regular fa-clock"></i> <?= $hikeUser['hikeDuration'] ?></p>
                <!-- <img src="#" alt="elevation"> -->
                <p class="text-gray-700 text-base"><i class="fa-solid fa-arrow-trend-up"></i> <?= $hikeUser['hikeElevation'] ?> m</p>
            </div>
            <div class="px-6 py-4">
                <a href="/hike?id=<?= $hikeUser['hike_id']; ?>">
                    <h3 class="font-bold text-xl mb-2"><?= $hikeUser['hikeName'] ?></h3>
                </a>
                <p class="text-gray-700 text-base"><?= $hikeUser['hikeDescription'] ?></p>
                <p class="text-gray-700 text-base">Author : <?= $hikeUser['firstname'] ?> <?= $hikeUser['lastname'] ?></p>
            </div>
            <!--  <p>TAG</p>
        <p>TAG</p>
        <p>TAG</p>
        <p class="text-gray-700 text-base"><?= $hikeUser['created_at'] ?></p>
        -->
        </div>
    <?php endforeach; ?>
</div>
<div class="flex justify-center m-4">
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="/addhike" class="text-gray-900 dark:text-white">Add new Hikes</a>
    </button>
</div>


