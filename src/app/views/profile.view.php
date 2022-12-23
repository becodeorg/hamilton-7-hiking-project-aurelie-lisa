<h2 class="text-center text-cyan-600 uppercase m-4 text-2xl font-extrabold tracking-tight leading-none md:text-3xl lg:text-4xl">My profile</h2>
<div>
    <h3 class="text-center m-4 italic font-extrabold tracking-tight leading-none">Welcome <?= $_SESSION['user']['firstname']; ?> <?= $_SESSION['user']['lastname']; ?></h3>
    <div class="w-3/4 m-auto">
        <div class="flex gap-2 flex-wrap">
            <p class="font-extrabold">Username:</p>
            <p><?= $_SESSION['user']['username'];?></p>
        </div>
        <div class="flex gap-2 flex-wrap">
            <p class="font-extrabold">Firstname: </p>
            <p><?= $_SESSION['user']['firstname'];?></p>
        </div>
        <div class="flex gap-2 flex-wrap">
            <p class="font-extrabold">Lastname:  </p>
            <p><?= $_SESSION['user']['lastname'];?></p>
        </div>
        <div class="flex gap-2 flex-wrap">
            <p class="font-extrabold">Email:</p>
            <p><?= $_SESSION['user']['email'];?></p>
        </div>
    </div>
</div>
