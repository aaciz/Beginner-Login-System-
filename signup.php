<?php
require 'includes/header.php';
?>

<main class="signup-form">
    <h1>Signup</h1>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat Password">
        <button type="submit" name="signup-submit" class="btn">Signup</button>
    </form>
</main>

<?php
require 'includes/foote.php';
?>