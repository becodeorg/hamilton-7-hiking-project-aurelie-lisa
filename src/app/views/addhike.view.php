<h2 class="flex font-l">Add a new hike</h2>

<form action="/addhike" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="relative z-0 mb-6 w-full group">
        <label for="hikeName">Name:</label>
        <input type="text" name="hikeName" id="hikeName">
    </div>
    <div>
        <label for="hikeDistance">Distance (km) :</label>
        <input type="number" name="hikeDistance" id="hikeDistance">
    </div>
    <div>
        <label for="hikeDuration">Duration (min) :</label>
        <input type="number" name="hikeDuration" id="hikeDuration">
    </div>
    <div>
        <label for="hikeElevation">Elevation (m) :</label>
        <input type="number" name="hikeElevation" id="hikeElevation">
    </div>
    <div>
        <label for="hikeDescription">Description:</label>
        <textarea type="text" name="hikeDescription" id="hikeDescription"></textarea>
    </div>
    <div>
        <label for="created_at">Creation Date:</label>
        <input type="text" name="created_at" id="created_at" value="<?= date('Y-m-d') ?>" readonly>
    </div>
    <button type="submit">Add</button>
</form>

