<?php

declare(strict_types=1);

require_once __DIR__ . '/Task.php';

$tasks = [
    new Task(1, "Write the README", "Ali", "high", false),
    new Task(2, "Fix the login bug", "Abd Al-Rahim", "medium", true),
    new Task(3, "Rename the config file", "Ali", "low", false),
    new Task(4, "Add the tasks index route", "Abd Al-Rahim", "high", true),
    new Task(5, "Add the tasks show route", "Ali", "medium", false)
];

return $tasks;
