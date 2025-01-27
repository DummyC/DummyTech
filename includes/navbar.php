<?php
define('BASE_PATH', '/dynamic/');
echo '
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Dummy Technologies</title>
</head>
<body>

<nav>
    <div class="logo">
        <img src="images/dummy_logo.png" alt="Dummy Technologies Logo" style="height: 50px;">
    </div>
    <ul>
        <li><a href="' . BASE_PATH . '/../home.php">Home</a></li>
        <li><a href="' . BASE_PATH . '/../about.php">About</a></li>
        <li><a href="' . BASE_PATH . '/../projects.php">Projects</a></li>
        <li><a href="' . BASE_PATH . '/../contact.php">Contact</a></li>
    </ul>
</nav>';
?>
<link rel="stylesheet" href="../css/style.css">
