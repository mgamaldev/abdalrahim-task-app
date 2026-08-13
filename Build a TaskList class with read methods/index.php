<?php

declare(strict_types=1);

require_once __DIR__ . '/TaskList.php';
require_once __DIR__ . '/tasks.php';

$taskList = new TaskList($tasks);

foreach ($taskList->all() as $task) {
    echo "{$task->title()}\n";
}

echo "\n\n";

foreach ($taskList->open() as $task) {
    echo "{$task->title()} is open\n";
}

echo "\n\n";

foreach ($taskList->byAssignee("Abd Al-Rahim") as $task) {
    echo "{$task->title()} is assigned to Abd Al-Rahim\n";
}

echo "\n\n";

echo "\n{$taskList->doneCount()} of " . count($taskList->all()) . " tasks are done.\n";
