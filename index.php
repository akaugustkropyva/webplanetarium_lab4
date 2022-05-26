<!DOCTYPE html>
<html lang="en">

<?php require_once "sections/head.php" ?>
<body>
<?php

$page = htmlspecialchars($_GET['page']);

if (preg_match("/^[a-z]+$/", $page) && file_exists("pages/" . $page . ".php")) { ?>
    <header class="header <?php if ($page != "landing") {
        echo "header-other-pages";
    } ?>">
        <?php require_once "sections/header.php" ?>
    </header>
    <?php
    require_once "pages/" . $page . ".php";
} else { ?>
    <header class="header">
        <?php require_once "sections/header.php" ?>
    </header>
    <?php
    require_once "pages/landing.php";
}

require_once "sections/footer.php";
?>
</body>
</html>


