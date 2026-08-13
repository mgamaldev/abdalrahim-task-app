<?php

declare(strict_types=1);

require_once __DIR__ . '/Task.php';
require_once __DIR__ . '/tasks.php';

$doneTasks = 0;

foreach ($tasks as $task) {
    echo "{$task->title()}\n";
    if ($task->isDone()) {
        $doneTasks++;
    }
}

echo "\n{$doneTasks} of " . count($tasks) . " tasks are done.\n";
