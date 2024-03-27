<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Cloud Engineer',
                'description' => 'Lorem Ipsum',
                'salary' => '50k'
            ],
            [
                'id' => 2,
                'title' => 'Cloud Architect',
                'description' => 'Ipsum Lorem',
                'salary' => '80k'
            ],
            [
                'id' => 3,
                'title' => 'Cloud Developer',
                'description' => 'lorem_ipsum_ipsum_lorem',
                'salary' => '30k'
            ]
        ];

    }

    public static function find(int $id):array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job){
            abort(404);
        }
        return $job;
    }
}


