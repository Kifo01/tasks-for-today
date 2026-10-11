<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-heading"><p class="eyebrow">Demo user</p><h1>Profile</h1></section>
<?php if ($user): ?><article class="profile-card"><div class="avatar"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div><div class="profile-intro"><h2><?= esc($user['full_name']) ?></h2><p>@<?= esc($user['username']) ?></p></div><dl><div><dt>Email address</dt><dd><a href="mailto:<?= esc($user['email']) ?>"><?= esc($user['email']) ?></a></dd></div><div><dt>Member since</dt><dd><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></dd></div></dl></article><?php else: ?><div class="empty-state"><h2>No user found</h2><p>Import the supplied database file to add the demo user.</p></div><?php endif ?>
<?= $this->endSection() ?>
