<h2>Hiking Card</h2>
<div>
    <h3><?= $hike['hikeName']; ?></h3>
    <p><?= $hike['hikeDescription']; ?></p>
    <p><?= $hike['hikeDistance']; ?></p>
    <p><?= $hike['hikeDuration']; ?></p>
    <p><?= $hike['hikeElevation']; ?></p>
    <p><?= $hike['updated_at']; ?></p>
    //todo : change author to name and fix user issue
    <p>Author : <?= $hike['user_id']; ?></p>

</div>
