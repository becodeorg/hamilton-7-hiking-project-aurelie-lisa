<h2 class="text-center text-cyan-600 uppercase m-4 text-2xl font-extrabold tracking-tight leading-none md:text-3xl lg:text-4xl">My profile</h2>
<div>
    <div class="w-3/4 m-auto">
        <h3 class="p-4 italic font-extrabold tracking-tight leading-none">Welcome <?= $_SESSION['user']['firstname']; ?> <?= $_SESSION['user']['lastname']; ?> !</h3>

        <div class="p-4" >
            <div class="flex gap-2 flex-wrap">
                <p class="font-extrabold">Username:</p>
                <p><?= $_SESSION['user']['username'];?></p>
            </div>
            <div class="flex gap-2 flex-wrap">
                <p class="font-extrabold">First name: </p>
                <p><?= $_SESSION['user']['firstname'];?></p>
            </div>
            <div class="flex gap-2 flex-wrap">
                <p class="font-extrabold">Last name:  </p>
                <p><?= $_SESSION['user']['lastname'];?></p>
            </div>
            <div class="flex gap-2 flex-wrap">
                <p class="font-extrabold">Email:</p>
                <p><?= $_SESSION['user']['email'];?></p>
            </div>
        </div>
        <button class="m-4 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <a href="/editprofile" class="text-gray-900 dark:text-white">Edit profile</a>
        </button>
    </div>

</div>
