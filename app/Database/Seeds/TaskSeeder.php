<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $createdAt = date('Y-m-d H:i:s');
        $tasks = [
            ['title' => 'Review today’s priorities', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Finish the project dashboard', 'status' => 'in progress', 'task_date' => $today],
            ['title' => 'Test all application pages', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Prepare the database export', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Gather project requirements', 'status' => 'completed', 'task_date' => date('Y-m-d', strtotime('-1 day'))],
            ['title' => 'Create the database schema', 'status' => 'completed', 'task_date' => date('Y-m-d', strtotime('-1 day'))],
            ['title' => 'Write the project README', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+1 day'))],
            ['title' => 'Publish the repository', 'status' => 'pending', 'task_date' => date('Y-m-d', strtotime('+2 days'))],
        ];

        foreach ($tasks as &$task) {
            $task['created_at'] = $createdAt;
        }

        $this->db->table('tasks')->insertBatch($tasks);
    }
}
