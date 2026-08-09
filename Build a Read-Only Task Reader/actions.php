<?php

declare(strict_types=1);

require_once __DIR__ . '/tasks.php';

function listAll(array $tasks): array
{
    return $tasks;
}

function listOpen(array $tasks): array
{
    $openTasks = [];
    foreach ($tasks as $task) {
        if (!$task['done']) {
            $openTasks[] = $task;
        }
    }
    return $openTasks;
}

function findById(array $tasks, int $id): ?array
{
    foreach ($tasks as $task) {
        if ($task['id'] === $id) {
            return $task;
        }
    }
    return null;
}
