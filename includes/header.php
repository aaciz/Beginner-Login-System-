<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <nav>
            <div class="navigation">
                <a href="index.php" class="logo">
                    Logo
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">About Me</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="navigation_form">
                <div class="form-group">
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/Email..">
                        <input type="password" name="pwd" placeholder="Password..">
                        <button type="submit" name="login_submit" class="btn">Login</button>
                    </form>
                </div>
                <a href="signup.php">Signup</a>
                <div class="form-group">
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout_submit" class="btn">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>