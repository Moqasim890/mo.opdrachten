<?php

namespace App\Models;


class Job {
    public static function all()   {
        return [
            ['id' => 1, 'name' => 'Larry Robot', 'age' => 5, 'color' => 'blue'],
            ['id' => 2, 'name' => 'Mo',          'age' => 7, 'color' => 'red'],
            ['id' => 3, 'name' => 'Herd',        'age' => 1, 'color' => 'green'],
        ];
    }

    public static function find(int $id) {
        $jobs = array_filter(static::all(), fn($job) => $job['id'] == $id);


        return reset($jobs) ?: null;

    }
}
