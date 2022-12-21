<nav>
    <ul>
        <a href="/"><li>Home</li></a>
        <?php if ($_SESSION['user']['loggedIn']) { ?>
            <a href="/logout"><li>Logout</li></a>
        <?php } else { ?>
            <a href="/login"><li>Login</li></a>
            <a href="/registration"><li>Registration</li></a>
        <?php } ?>
            <a href="/allhike"><li>Hikes</li></a>
    </ul>
</nav>

