<h2>My profile</h2>
<div>

    <h3> <?= $_SESSION['user']['firstname']; ?> <?= $_SESSION['user']['lastname']; ?></h3>
    <p>Username: <?= $_SESSION['user']['username'];?></p>
    <p>Email: <?= $_SESSION['user']['email'];?></p>
</div>
