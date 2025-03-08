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

        $user2 = User::factory()->create([
            'name' => 'Test User2',
            'username' => 'admin2',
            'email' => 'test@example.com',
        ]);
        $user2 = User::factory()->create([
            'name' => 'Test User3',
            'username' => 'admin3',
            'email' => 'test@example.com',
        ]);

        // Insert a quiz question
        $quiz11 = Quiz::create([
            'question' => 'What was the primary method of mass agitation introduced by Mahatma Gandhi in South Africa?',
            'option1' => 'Armed rebellion',
            'option2' => 'Satyagraha',
            'option3' => 'Boycott',
            'option4' => 'Civil disobedience',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);

        $quiz12 = Quiz::create([
            'question' => 'What does the term "Satyagraha" emphasize?',
            'option1' => 'The use of physical force',
            'option2' => 'The power of truth and non-violence',
            'option3' => 'The need for armed struggle',
            'option4' => 'The importance of economic sanctions',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);

        $quiz13 = Quiz::create([
            'question' => 'Where did Mahatma Gandhi first organize a Satyagraha movement in India?',
            'option1' => 'Kheda',
            'option2' => 'Champaran',
            'option3' => 'Ahmedabad',
            'option4' => 'Amritsar',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz14 = Quiz::create([
            'question' => 'What was the main issue in the Kheda Satyagraha?',
            'option1' => 'Oppressive plantation system',
            'option2' => 'Non-payment of revenue due to crop failure',
            'option3' => 'Low wages for cotton mill workers',
            'option4' => 'Forced recruitment in the army',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz15 = Quiz::create([
            'question' => 'What was the outcome of the Ahmedabad Satyagraha?',
            'option1' => 'The workers got a pay raise',
            'option2' => 'The plantation system was abolished',
            'option3' => 'The revenue collection was relaxed',
            'option4' => 'The workers went on strike',
            'answer' => 1,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz = Quiz::create([
            'question' => '',
            'option1' => '',
            'option2' => '',
            'option3' => '',
            'option4' => '',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz = Quiz::create([
            'question' => '',
            'option1' => '',
            'option2' => '',
            'option3' => '',
            'option4' => '',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz = Quiz::create([
            'question' => '',
            'option1' => '',
            'option2' => '',
            'option3' => '',
            'option4' => '',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz = Quiz::create([
            'question' => '',
            'option1' => '',
            'option2' => '',
            'option3' => '',
            'option4' => '',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz = Quiz::create([
            'question' => '',
            'option1' => '',
            'option2' => '',
            'option3' => '',
            'option4' => '',
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
