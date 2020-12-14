<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>

<nav>
    <div class="logo">
    <a class="header-link" href="<?php echo site_url('') ?>">
        <h1 class="main-header">
            Phil Boothman</h1>
        <h2 class="sub-header">Writer | Editor | Filmmaker</h2>
    </a>
    </div>
    <div class="menu">
    <ul>
        <li><a href="<?php echo site_url('/about') ?>">About</a></li>
        <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
		<li><a href="<?php echo site_url('/take-2021') ?>">Take 2021</a></li>
        <li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
    </ul>
    </div>
    
</nav>

<main>