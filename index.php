<?php
require 'includes/header.php';
?>

<main class="banner-box">
    <?php
    if (isset($_SESSION['userId'])) {
        echo "<p>You are logged in!</p>";
    } else {
        echo "<p>You are logged out</p>";
    }
    ?>


</main>

<?php
require 'includes/footer.php';
?>