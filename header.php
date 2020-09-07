<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Phil Boothman</title>
</head>
<body>

<header>
    <div class="logo">
    <a class="header-link" href="<?php echo site_url('') ?>">
        <h1 class="main-header">
            Phil Boothman</h1>
        <h2 class="sub-header">Writer | Artist | Filmmaker</h2>
    </a>
    </div>
    <div class="hamburger">
        <i class="material-icons" onclick="toggleMenu()">dehaze</i>
    </div>
    
</header>

<nav id="nav-menu">
    <ul>
        <li>Home</li>
        <li>About</li>
        <li>Blog</li>
    </ul>
</nav>