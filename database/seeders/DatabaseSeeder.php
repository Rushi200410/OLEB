<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Student;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert a user
        $user = User::factory()->create([
            'name' => 'Test User',
            'username' => 'admin',
            'email' => 'test@example.com',
        ]);

        // Insert a quiz question
        $quiz = Quiz::create([
            'question' => 'What does the term "Satyagraha" emphasize?',
            'option1' => 'The use of physical force',
            'option2' => 'The power of truth and non-violence',
            'option3' => 'The need for armed struggle',
            'option4' => 'The importance of economic sanctions',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);

        // Insert an event
        $event = Event::create([
            'timeline' => 1,
            'q1_id' => 1,
            'q2_id' => 1,
            'q3_id' => 1,
            'q4_id' => 1,
            'q5_id' => 1,
            'q6_id' => 1,
            'q7_id' => 1,
            'points_required' => 0,
            'video_name' => 'olabs1',
            'year' => 1947,
        ]);

        // Insert a student record
        Student::create([
            'user_id' => $user->id,
            'score' => 0,
            'timeline' => 1,
            'question' => 1,
        ]);
    }
}
