<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A simple daily task management dashboard built with CodeIgniter 4.">
    <title><?= esc($title) ?> | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
<header class="site-header">
    <a class="brand" href="<?= site_url('/') ?>"><span class="brand-mark">✓</span><span>Tasks for Today</span></a>
    <nav aria-label="Main navigation">
        <a class="<?= url_is('/') ? 'active' : '' ?>" href="<?= site_url('/') ?>">Today</a>
        <a class="<?= url_is('tasks') ? 'active' : '' ?>" href="<?= site_url('tasks') ?>">All Tasks</a>
        <a class="<?= url_is('profile') ? 'active' : '' ?>" href="<?= site_url('profile') ?>">Profile</a>
        <a class="<?= url_is('about') ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
    </nav>
</header>
<main class="container"><?= $this->renderSection('content') ?></main>
<footer><p>Tasks for Today Management System · Built with CodeIgniter 4</p></footer>
</body>
</html>
