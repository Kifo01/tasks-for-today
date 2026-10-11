<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        return view('home/index', [
            'title' => 'Today’s Tasks',
            'tasks' => $taskModel->getTasksForDate(date('Y-m-d')),
            'today' => date('F j, Y'),
        ]);
    }
}
