<h2>My profile</h2>
<div>

    <h3> <?= $_SESSION['user']['firstname']; ?> <?= $_SESSION['user']['lastname']; ?></h3>
    <p>Username: <?= $_SESSION['user']['username'];?></p>
    <p>Email: <?= $_SESSION['user']['email'];?></p>
    <h3> My Hikes </h3>
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="/addhike" class="text-gray-900 dark:text-white">Add Hikes</a>
    </button>
    <?= var_dump($_SESSION['user']['id']); ?>
    <?php foreach ($hikes as $hike) : ?>
    <?= var_dump($hike['id']); ?>
    <?php endforeach; ?>
</div>
