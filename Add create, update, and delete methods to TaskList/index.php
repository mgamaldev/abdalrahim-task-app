<?php

declare(strict_types=1);

require_once __DIR__ . '/Task.php';
require_once __DIR__ . '/TaskList.php';
require_once __DIR__ . '/tasks.php';

$taskList = new TaskList($tasks);

echo "Initially, {$taskList->doneCount()} tasks are done.\n";

echo "\n";

$taskList->add(new Task(6, "Ship the release", "Abd Al-Rahim", "High", false));
echo "Added a new task\n";

echo "\n";

echo "markDone(5) => " . ($taskList->markDone(5) ? 'true' : 'false') . "\n";

echo "\n";

echo "remove(3) => " . ($taskList->remove(3) ? 'true' : 'false') . "\n";

echo "\n";

echo "markDone(999) => " . ($taskList->markDone(999) ? 'true' : 'false') . "\n";

echo "\n";

echo "After the updates, {$taskList->doneCount()} tasks are done.\n";

echo "\n";

echo "Current task titles:\n";
foreach ($taskList->all() as $task) {
    echo "- {$task->title()}\n";
}
