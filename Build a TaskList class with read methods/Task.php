<?php

declare(strict_types=1);

class Task
{
    public function __construct(
        private int $id,
        private string $title,
        private string $assignee,
        private string $priority,
        private bool $done = false,
    ) {}

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function assignee(): string
    {
        return $this->assignee;
    }

    public function priority(): string
    {
        return $this->priority;
    }

    public function isDone(): bool
    {
        return $this->done;
    }
}
