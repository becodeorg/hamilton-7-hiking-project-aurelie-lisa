<h2>Add a new hike</h2>
<?php if ($_SESSION['user']) { ?>
<form action="/addhike" method="post">
    <div>
        <label for="hikeName">Name:</label>
        <input type="text" name="hikeName" id="hikeName">
    </div>
    <div>
        <label for="distance">Distance:</label>
        <input type="text" name="distance" id="distance">
    </div>
    <div>
        <label for="duration">Duration:</label>
        <input type="time" name="duration" id="duration">
    </div>
    <div>
        <label for="elevation">Elevation:</label>
        <input type="text" name="elevation" id="elevation">
    </div>
    <div>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="created_at">Creation Date:</label>
        <input type="text" name="created_at" id="created_at" value="<?= date('d-m-Y') ?>" readonly>
    </div>
    <button type="submit">Add</button>
</form>
<?php } else { ?>
    <p>Please Login first, in order to add a hike :</p>
    <a href="/login"><li>Login</li></a>
    <a href="/registration"><li>Registration</li></a>
<?php } ?>

