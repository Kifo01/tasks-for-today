<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="page-heading"><p class="eyebrow">Complete overview</p><h1>All tasks</h1><p class="lede">Every task in the system, ordered by its scheduled date.</p></section>
<?php if ($tasks === []): ?><div class="empty-state"><h2>No tasks found</h2><p>Import the supplied database file to add the sample records.</p></div><?php else: ?>
<div class="table-wrap"><table><thead><tr><th>Task</th><th>Status</th><th>Scheduled date</th><th>Created</th></tr></thead><tbody>
<?php foreach ($tasks as $task): ?><tr><td><strong><?= esc($task['title']) ?></strong></td><td><span class="badge badge-<?= esc(str_replace(' ', '-', $task['status'])) ?>"><?= esc(ucwords($task['status'])) ?></span></td><td><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></td><td><?= esc(date('M j, Y · g:i A', strtotime($task['created_at']))) ?></td></tr><?php endforeach ?>
</tbody></table></div><?php endif ?>
<?= $this->endSection() ?>
