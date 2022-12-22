<nav class="m-3">
    <div class="flex justify-between">
        <a href="/">
            <img src="images/Hiking_Logo.png" class="h-20 flex items-center" alt="hiking Adventure Logo" />
        </a>
        <div class=" flex items-center">
            <?php if ($_SESSION['user']) { ?>
                <button type="button" class="text-white bg-cyan-600 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="/logout">Logout</a></button>
                <button type="button" class="text-white bg-cyan-600 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="/profile?id=<?= ($_SESSION['user']['id'])?>">Profile</a></button>
            <?php } else { ?>
                <button type="button" class="text-white bg-cyan-600 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="/login">Login</a></button>
                <button type="button" class="text-white bg-cyan-600 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="/registration">Registration</a></button>
            <?php } ?>
        </div>
    </div>
</nav>


<nav class="bg-gray-50 dark:bg-gray-700 ">
    <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
        <div class="flex items-center">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                <li>
                    <a href="/" class="text-gray-900 dark:text-white hover:text-cyan-600 hover:underline" aria-current="page">Home</a>
                </li>

                <li>
                    <a href="/allhike" class="text-gray-900 dark:text-white hover:text-cyan-600 hover:underline">Hikes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>