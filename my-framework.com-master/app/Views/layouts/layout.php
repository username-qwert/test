<?php /** @var $view*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../../coffee.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Title</title>
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="nav-link">
            <a href="/login">login</a>
            <a href="/register">register</a>
            <a href="/posts">posts list</a>
            <a href="/profile">profile</a>
        </nav>
    </div>
</header>

<?php include_once '../app/Views/' . $view . '.php'?>

<footer class="footer">
    <div class="container">
        <p>&copy; 2020 Copyright: my-framework.com</p>
    </div>
</footer>
</body>