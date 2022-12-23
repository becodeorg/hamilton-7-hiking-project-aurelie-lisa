<h2 class="text-center uppercase m-4 text-4xl font-extrabold tracking-tight leading-none text-gray-700 md:text-5xl lg:text-6xl">Add a new hike</h2>

<form action="/addhike" method="post" class="w-3/4 m-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-700">
    <div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="hikeName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hike name:</label>
        <input type="text" name="hikeName" id="hikeName" class="block p-2 w-3/4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="hikeDistance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Distance (km) :</label>
        <input type="number" name="hikeDistance" id="hikeDistance" class="block p-2 w-3/4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="hikeDuration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration (min) :</label>
        <input type="number" name="hikeDuration" id="hikeDuration" class="block p-2 w-3/4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="hikeElevation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elevation (m) :</label>
        <input type="number" name="hikeElevation" id="hikeElevation" class="block p-2 w-3/4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="hikeDescription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description:</label>
        <textarea type="text" name="hikeDescription" id="hikeDescription" class="block p-2 w-3/4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Creation Date:</label>
        <input type="text" name="created_at" id="created_at" value="<?= date('Y-m-d') ?>" class="block p-2 w-3/4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
    </div>
    <button type="submit" class="align-center w-20 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Add
    </button>
    </div>
</form>

