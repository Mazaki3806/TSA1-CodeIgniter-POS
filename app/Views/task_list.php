<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>
    <h1>Complete Task List</h1>

    <nav>
        <a href="<?= base_url('/') ?>">Welcome</a> |
        <a href="<?= base_url('tasks') ?>">Task List</a> |
        <a href="<?= base_url('profile') ?>">Profile</a> |
        <a href="<?= base_url('about') ?>">About</a>
    </nav>

    <hr>

    <?php foreach ($tasks as $task): ?>
        <p>
            <strong><?= esc($task['title']) ?></strong><br>
            Status: <?= esc($task['status']) ?><br>
            Date: <?= esc($task['task_date']) ?>
        </p>
        <hr>
    <?php endforeach; ?>
</body>
</html>