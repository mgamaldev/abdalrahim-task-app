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
    echo $task['title'] . "\n\n";
}

echo "\n\n";

$myTasks = byAssignee($tasks, 'Abd Al-Rahim');
echo "Tasks assigned to Abd Al-Rahim:\n\n";
foreach ($myTasks as $task) {
    echo "{$task['title']}\n\n";
}
