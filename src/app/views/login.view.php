<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('images/moutain-snow.jpg')">
    <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
        <div class="text-white">
            <div class="mb-8 flex flex-col items-center">
                <img src="images/login.png" width="50" alt="" srcset="" />
                <h2 class="mb-2 text-2xl mt-2">Login</h2>
                <span class="text-gray-300">Enter Login Details</span>
            </div>


            <form action="/login" method="post">
    <div class="mb-4 text-lg">
        <label for="username">Username:</label>
        <label>
            <input class="rounded-3xl border-none bg-cyan-600 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-grey-200 shadow-lg outline-none backdrop-blur-md" type="text" name="username" placeholder="Your username" id="username" />
        </label>
    </div>
    <div class="mb-4 text-lg">
        <label for="password">Password:</label>
        <label>
            <input class="rounded-3xl border-none bg-cyan-600 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-grey-200 shadow-lg outline-none backdrop-blur-md" type="password" name="password" id="password" placeholder="*********" />

        </label>
    </div>
    <div class="mt-8 mb-4 flex justify-center text-lg text-black">
    <button type="submit" class="rounded-3xl bg-cyan-600 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-white hover:text-cyan-600">Login</button>
    </div>
<p class="text-center">Not yet a member? <a class="underline hover:text-cyan-600" href="/registration">Sign up now!</a></p>

            </form>

        </div>
    </div>
</div>