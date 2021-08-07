<?php


namespace M2rk\Taskforce\actions;

use M2rk\Taskforce\models\Status;
use M2rk\Taskforce\models\Task;

class CancelAction extends Action
{
    public function getNameClass(): string
    {
        return self::class;
    }

    public function getActionName(): string
    {
        return 'cancelTask';
    }

    public function verifyAction(Task $task, int $userId): bool
    {
        return $userId === $task->getCustomerId() && $task->getStatus() === Status::STATUS_NEW;
    }
}
