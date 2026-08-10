<?php

declare(strict_types=1);

require_once __DIR__ . '/tasks.php';
require_once __DIR__ . '/actions.php';

$tasksTitle = listAll($tasks);
foreach ($tasksTitle as $task) {
    echo "Task Title: {$task['title']}\n\n";
}

echo "\n\n";

$openTasks = listOpen($tasks);
foreach ($openTasks as $task) {
    echo "Open Task Title: {$task['title']}\n\n";
}

echo "\n\n";
$taskId = 1;
$task = findById($tasks, $taskId);
if ($task) {
    echo "Task #{$taskId}: {$task['title']} assignee to {$task['assignee']}\n";
} else {
    echo "Task with ID {$taskId} not found.\n";
}

echo "\n";

$taskId = 99;
$task = findById($tasks, $taskId);
if ($task) {
    echo "Task #{$taskId}: {$task['title']} assignee to {$task['assignee']}\n";
} else {
    echo "Task with ID {$taskId} not found.\n";
}
