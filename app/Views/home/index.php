<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="hero"><p class="eyebrow"><?= esc($today) ?></p><h1>Make today count.</h1><p class="lede">Focus on what needs your attention today, one clear task at a time.</p></section>
<section class="section-heading"><div><p class="eyebrow">Today’s plan</p><h2><?= count($tasks) ?> <?= count($tasks) === 1 ? 'task' : 'tasks' ?> scheduled</h2></div><a class="text-link" href="<?= site_url('tasks') ?>">View every task →</a></section>
<?php if ($tasks === []): ?>
<div class="empty-state"><span>✓</span><h2>You’re all clear</h2><p>No tasks are scheduled for today.</p></div>
<?php else: ?><div class="task-list">
<?php foreach ($tasks as $task): ?><article class="task-card"><div class="status-dot status-<?= esc(str_replace(' ', '-', $task['status'])) ?>"></div><div class="task-copy"><h3><?= esc($task['title']) ?></h3><p>Created <?= esc(date('g:i A', strtotime($task['created_at']))) ?></p></div><span class="badge badge-<?= esc(str_replace(' ', '-', $task['status'])) ?>"><?= esc(ucwords($task['status'])) ?></span></article><?php endforeach ?>
</div><?php endif ?>
<?= $this->endSection() ?>
