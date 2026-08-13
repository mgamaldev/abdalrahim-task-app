<?php

declare(strict_types=1);

class TaskList
{
    public function __construct(
        private array $tasks,
    ) {}

    public function all(): array
    {
        return $this->tasks;
    }

    public function open(): array
    {
        $openTasks = [];
        foreach ($this->tasks as $task) {
            if ($task->isDone() === false) {
                $openTasks[] = $task;
            }
        }
        return $openTasks;
    }

    public function byAssignee(string $name): array
    {
        $assignedTasks = [];
        foreach ($this->tasks as $task) {
            if ($task->assignee() === $name) {
                $assignedTasks[] = $task;
            }
        }
        return $assignedTasks;
    }

    public function doneCount(): int
    {
        $count = 0;
        foreach ($this->tasks as $task) {
            if ($task->isDone() === true) {
                $count++;
            }
        }
        return $count;
    }
}
