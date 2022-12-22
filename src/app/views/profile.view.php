<h2>My profile</h2>
<div>

    <h3> <?= $_SESSION['user']['firstname']; ?> <?= $_SESSION['user']['lastname']; ?></h3>
    <p>Username: <?= $_SESSION['user']['username'];?></p>
    <p>Email: <?= $_SESSION['user']['email'];?></p>
    <h3> My Hikes </h3>
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="/allhike" class="text-gray-900 dark:text-white">Add Hikes</a>
    </button>

    <?php if ($hike['user_id']===$_SESSION['user']['id']) : ?>
        <div class="w-[400px] rounded overflow-hidden shadow-lg">
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
                <p class="text-gray-700 text-base"><?= $hike['hikeDescription'] ?></p>
                <p class="text-gray-700 text-base">Author : <?= $hike['user_id'] ?></p>
            </div>
            <!--  <p>TAG</p>
        <p>TAG</p>
        <p>TAG</p>
        <p class="text-gray-700 text-base"><?= $hike['created_at'] ?></p>
        -->
        </div>
    <?php endif; ?>

</div>
