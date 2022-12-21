<h2>Registration</h2>
<form action="/registration" method="post">
    <div>
        <label for="firstname">First name:</label>
        <label>
            <input type="text" name="firstname" id="firstname">
        </label>
    </div>
    <div>
        <label for="lastname">Last name:</label>
        <label>
            <input type="text" name="lastname" id="lastname">
        </label>
    </div>
    <div>
        <label for="username">Username:</label>
        <label>
            <input type="text" name="username" id="username">
        </label>
    </div>
    <div>
        <label for="email">Email:</label>
        <label>
            <input type="text" name="email" id="email">
        </label>
    </div>
    <div>
        <label for="password">Password:</label>
        <label>
            <input type="password" name="password" id="password">
        </label>
    </div>
    <button type="submit">Register</button>
    <p>Already registered? <a href="#">Please log in!</a></p>
</form>