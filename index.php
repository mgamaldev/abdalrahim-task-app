<?php

declare(strict_types=1);

require_once __DIR__ . '/tasks.php';

function byAssignee(array $tasks, string $name): array
{
    $filteredTasks = [];
    foreach ($tasks as $task) {
        if ($task['assignee'] === $name) {
            $filteredTasks[] = $task;
        }
    }
    return $filteredTasks;
}

foreach ($tasks as $task) {
    echo $task['title'] . "<br><br>";
}

echo "<br><br>";

$myTasks = byAssignee($tasks, 'Abd Al-Rahim');
foreach ($myTasks as $task) {
    echo "Task Title: {$task['title']}<br><br>";
}
