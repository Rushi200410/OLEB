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
            'email' => 'test2@example.com',
        ]);
        $user2 = User::factory()->create([
            'name' => 'Test User3',
            'username' => 'admin3',
            'email' => 'test3@example.com',
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
        $quiz16 = Quiz::create([
            'question' => 'What was the key principle behind Mahatma Gandhi’s concept of Satyagraha?',
            'option1' => 'Use of physical force',
            'option2' => 'Non-violent resistance',
            'option3' => 'Economic warfare',
            'option4' => 'Military revolution',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz17 = Quiz::create([
            'question' => 'What was the primary aim of Satyagraha?',
            'option1' => 'To instill fear in British rulers',
            'option2' => 'To defeat British rulers through war',
            'option3' => 'To persuade the oppressor using truth and non-violence',
            'option4' => 'To gain political control through elections',
            'answer' => 3,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz21 = Quiz::create([
            'question' => 'The Non-Cooperation Movement began in:',
            'option1' => '1917',
            'option2' => '1920',
            'option3' => '1925',
            'option4' => '1930',
            'answer' => 2,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz22 = Quiz::create([
            'question' => 'Which of the following was NOT a part of the Non-Cooperation Movement?',
            'option1' => 'Boycott of foreign goods',
            'option2' => 'Refusal to pay taxes',
            'option3' => 'Resignation from government jobs',
            'option4' => 'Armed revolt against the British',
            'answer' => 4,
            'timeline' => 2,
            'points' => 3,
        ]);

        $quiz23 = Quiz::create([
            'question' => 'Why did the Non-Cooperation Movement slow down in cities?',
            'option1' => 'People became disinterested',
            'option2' => 'The British granted independence',
            'option3' => 'Khadi was expensive and alternative Indian institutions were lacking',
            'option4' => 'British police suppressed all protests',
            'answer' => 3,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz24 = Quiz::create([
            'question' => 'In which province did the Justice Party participate in elections during the Non-Cooperation Movement?',
            'option1' => 'Bengal',
            'option2' => 'Madras',
            'option3' => 'Punjab',
            'option4' => 'Gujarat',
            'answer' => 2,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz25 = Quiz::create([
            'question' => 'Which class mainly participated in the movement in urban areas?',
            'option1' => 'Farmers',
            'option2' => 'Businessmen',
            'option3' => 'Middle-class professionals',
            'option4' => 'Factory workers',
            'answer' => 3,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz26 = Quiz::create([
            'question' => 'What was the economic impact of the Non-Cooperation Movement?',
            'option1' => 'Increase in foreign trade',
            'option2' => 'Decline in the import of foreign cloth',
            'option3' => 'Rise in the price of Indian goods',
            'option4' => 'Increase in government revenue',
            'answer' => 2,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz27 = Quiz::create([
            'question' => 'Why did the movement in the cities gradually slow down?',
            'option1' => 'Lack of leadership',
            'option2' => 'High cost of Khadi cloth',
            'option3' => 'Repression by the British',
            'option4' => 'Lack of interest among the people',
            'answer' => 2,
            'timeline' => 2,
            'points' => 3,
        ]);
        $qui31 = Quiz::create([
            'question' => 'What was the primary reason for launching the Civil Disobedience Movement?',
            'option1' => 'To protest against the partition of Bengal',
            'option2' => 'To oppose the Simon Commission',
            'option3' => 'To demand the abolition of the salt tax',
            'option4' => 'To support the Khilafat Movement',
            'answer' => 3,
            'timeline' => 3,
            'points' => 3,
        ]);
        $quiz32 = Quiz::create([
            'question' => 'On which date did Mahatma Gandhi begin the Dandi March?',
            'option1' => '12 March 1930',
            'option2' => '26 January 1930',
            'option3' => '6 April 1930',
            'option4' => '15 August 1930',
            'answer' => 1,
            'timeline' => 3,
            'points' => 3,
        ]);
        $quiz33 = Quiz::create([
            'question' => 'What was the distance covered by Mahatma Gandhi and his followers during the Salt March?',
            'option1' => '150 km',
            'option2' => '240 miles (385 km)',
            'option3' => '100 miles (160 km)',
            'option4' => '500 miles (800 km)',
            'answer' => 2,
            'timeline' => 3,
            'points' => 3,
        ]);
        $quiz34 = Quiz::create([
            'question' => 'Why did Mahatma Gandhi choose salt as a symbol of resistance?',
            'option1' => 'It was expensive and rare',
            'option2' => 'It was heavily consumed by the British',
            'option3' => 'It was an essential item used by both rich and poor',
            'option4' => 'It was easily available for everyone to use in protests',
            'answer' => 3,
            'timeline' => 3,
            'points' => 3,
        ]);
        $quiz35 = Quiz::create([
            'question' => 'What was the reaction of the British government to the Civil Disobedience Movement?',
            'option1' => 'They ignored the protests',
            'option2' => 'They granted India independence immediately',
            'option3' => 'They arrested thousands of leaders and activists',
            'option4' => 'They reduced the salt tax',
            'answer' => 3,
            'timeline' => 3,
            'points' => 3,
        ]);

        $quiz36 = Quiz::create([
            'question' => 'What happened on 6 April 1930 at Dandi?',
            'option1' => 'The first Round Table Conference was held',
            'option2' => 'Gandhi and his followers manufactured salt illegally',
            'option3' => 'The Quit India Movement was launched',
            'option4' => 'The Indian National Congress declared Purna Swaraj',
            'answer' => 2,
            'timeline' => 3,
            'points' => 3,
        ]);

        $quiz37 = Quiz::create([
            'question' => 'Which of the following was NOT a form of protest used during the Civil Disobedience Movement?',
            'option1' => 'Refusal to pay taxes',
            'option2' => 'Picketing liquor and foreign cloth shops',
            'option3' => 'Armed rebellion against the British',
            'option4' => 'Violation of forest laws',
            'answer' => 3,
            'timeline' => 3,
            'points' => 3,
        ]);

        $quiz41 = Quiz::create([
            'question' => 'What was the main symbol used by Mahatma Gandhi to unite the nation during the Civil Disobedience Movement?',
            'option1' => 'Khadi',
            'option2' => 'Salt',
            'option3' => 'Spinning wheel',
            'option4' => 'Tricolour flag',
            'answer' => 2,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz42 = Quiz::create([
            'question' => 'What was the main reason for the British government\'s brutal repression during the Civil Disobedience Movement?',
            'option1' => 'To suppress the movement',
            'option2' => 'To negotiate with the Congress',
            'option3' => 'To gain support from the people',
            'option4' => 'To abolish the salt tax',
            'answer' => 1,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz43 = Quiz::create([
            'question' => 'Who was known as the Frontier Gandhi and led the movement in North-West Frontier Province?',
            'option1' => 'Lala Lajpat Rai',
            'option2' => 'Abdul Ghaffar Khan',
            'option3' => 'Subhas Chandra Bose',
            'option4' => 'Vallabhbhai Patel',
            'answer' => 2,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz44 = Quiz::create([
            'question' => 'Why did rich peasants such as the Patidars of Gujarat and Jats of Uttar Pradesh participate in the movement?',
            'option1' => 'To demand a separate electorate',
            'option2' => 'To protest against high land revenue taxes',
            'option3' => 'To gain more control over village administration',
            'option4' => 'To support the British government',
            'answer' => 2,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz45 = Quiz::create([
            'question' => 'Why were poor peasants not fully supportive of the Civil Disobedience Movement?',
            'option1' => 'Their main demand was the cancellation of unpaid rent',
            'option2' => 'They were in favor of British rule',
            'option3' => 'They were not affected by British policies',
            'option4' => 'They were afraid of being arrested',
            'answer' => 1,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz46 = Quiz::create([
            'question' => 'Why did some Businessmen withdraw their support from the Civil Disobedience Movement?',
            'option1' => 'They were afraid of British repression',
            'option2' => 'They feared the movement’s radical nature and workers\' demands',
            'option3' => 'They believed Gandhi was wrong',
            'option4' => 'They wanted to form a new Congress party',
            'answer' => 2,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz47 = Quiz::create([
            'question' => 'Why did the working class not participate in large numbers in the Civil Disobedience Movement?',
            'option1' => 'They supported British rule',
            'option2' => 'They were not allowed to protest',
            'option3' => 'The Congress did not include workers’ demands in the movement',
            'option4' => 'They were given special benefits by the British',
            'answer' => 3,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz51 = Quiz::create([
            'question' => 'How did nationalism spread among Indians during the freedom movement?',
            'option1' => 'Through military victories',
            'option2' => 'Through common cultural symbols and experiences',
            'option3' => 'By enforcing a single language',
            'option4' => 'By British encouragement',
            'answer' => 2,
            'timeline' => 5,
            'points' => 3,
        ]);

        $quiz52 = Quiz::create([
            'question' => 'Which novel by Bankim Chandra Chattopadhyay included the song "Vande Mataram"?',
            'option1' => 'Gitanjali',
            'option2' => 'Anandamath',
            'option3' => 'Hind Swaraj',
            'option4' => 'Discovery of India',
            'answer' => 2,
            'timeline' => 5,
            'points' => 3,
        ]);

        $quiz53 = Quiz::create([
            'question' => 'What was the significance of the Bharat Mata image in nationalism?',
            'option1' => 'It was used for religious purposes only',
            'option2' => 'It symbolized unity and national pride',
            'option3' => 'It was created to support British rule',
            'option4' => 'It represented only a small section of Indian society',
            'answer' => 2,
            'timeline' => 5,
            'points' => 3,
        ]);

        $quiz54 = Quiz::create([
            'question' => 'How did folk tales and songs contribute to nationalism?',
            'option1' => 'They helped revive a sense of cultural pride',
            'option2' => 'They discouraged local traditions',
            'option3' => 'They were banned by nationalist leaders',
            'option4' => 'They were only used by British rulers',
            'answer' => 1,
            'timeline' => 5,
            'points' => 3,
        ]);

        $quiz55 = Quiz::create([
            'question' => 'Who painted the famous Bharat Mata image in 1905?',
            'option1' => 'Rabindranath Tagore',
            'option2' => 'Abanindranath Tagore',
            'option3' => 'Raja Ravi Varma',
            'option4' => 'M.F. Husain',
            'answer' => 2,
            'timeline' => 5,
            'points' => 3,
        ]);

        $quiz56 = Quiz::create([
            'question' => 'Which historian and writer compiled and collected folk tales in Tamil Nadu?',
            'option1' => 'Mahatma Gandhi',
            'option2' => 'Natesa Sastri',
            'option3' => 'Abanindranath Tagore',
            'option4' => 'Subhas Chandra Bose',
            'answer' => 2,
            'timeline' => 5,
            'points' => 3,
        ]);

        $quiz57 = Quiz::create([
            'question' => 'Which two symbols were included in the first nationalist tricolor flag of India (1905)?',
            'option1' => 'Lion and Elephant',
            'option2' => 'Spinning wheel and Lotus',
            'option3' => 'Crescent Moon and Eight Lotuses',
            'option4' => 'Peacock and Ashoka Chakra',
            'answer' => 3,
            'timeline' => 5,
            'points' => 3,
        ]);

        // $quiz5 = Quiz::create([
        //     'question' => '',
        //     'option1' => '',
        //     'option2' => '',
        //     'option3' => '',
        //     'option4' => '',
        //     'answer' => 2,
        //     'timeline' => 5,
        //     'points' => 3,
        // ]);




        // Insert an event
        $event1 = Event::create([
            'timeline' => 1,
            'q1_id' => 1,
            'q2_id' => 2,
            'q3_id' => 3,
            'q4_id' => 4,
            'q5_id' => 5,
            'q6_id' => 6,
            'q7_id' => 7,
            'points_required' => 0,
            'video_name' => 'olabs1',
            'char_name' => 'main-character',
            'side_char_name' => 'side-character.png',
            'bg_name' => 'event1.png',
            'year' => 1947,
        ]);

        $event2 = Event::create([
            'timeline' => 2,
            'q1_id' => 8,
            'q2_id' => 9,
            'q3_id' => 10,
            'q4_id' => 11,
            'q5_id' => 12,
            'q6_id' => 13,
            'q7_id' => 14,
            'points_required' => 13,
            'video_name' => 'olabs2',
            'char_name' => 'main-character',
            'side_char_name' => 'side-character.png',
            'bg_name' => 'event2.png',
            'year' => 1947,
        ]);

        $event3 = Event::create([
            'timeline' => 3,
            'q1_id' => 15,
            'q2_id' => 16,
            'q3_id' => 17,
            'q4_id' => 18,
            'q5_id' => 19,
            'q6_id' => 20,
            'q7_id' => 21,
            'points_required' => 26,
            'video_name' => 'olabs3',
            'char_name' => 'main-character',
            'side_char_name' => 'side-character.png',
            'bg_name' => 'event3.png',
            'year' => 1947,
        ]);

        $event4 = Event::create([
            'timeline' => 4,
            'q1_id' => 22,
            'q2_id' => 23,
            'q3_id' => 24,
            'q4_id' => 25,
            'q5_id' => 26,
            'q6_id' => 27,
            'q7_id' => 28,
            'points_required' => 39,
            'video_name' => 'olabs4',
            'char_name' => 'main-character',
            'side_char_name' => 'side-character.png',
            'bg_name' => 'event4.png',
            'year' => 1947,
        ]);

        $event5 = Event::create([
            'timeline' => 5,
            'q1_id' => 29,
            'q2_id' => 30,
            'q3_id' => 31,
            'q4_id' => 32,
            'q5_id' => 33,
            'q6_id' => 34,
            'q7_id' => 35,
            'points_required' => 52,
            'video_name' => 'olabs5',
            'char_name' => 'main-character',
            'side_char_name' => 'side-character.png',
            'bg_name' => 'event5.png',
            'year' => 1947,
        ]);

        $event6 = Event::create([
            'timeline' => 6,
            'q1_id' => 36,
            'q2_id' => 37,
            'q3_id' => 38,
            'q4_id' => 39,
            'q5_id' => 40,
            'q6_id' => 41,
            'q7_id' => 42,
            'points_required' => 0,
            'video_name' => 'olabs6',
            'char_name' => 'main-character',
            'side_char_name' => 'side-character.png',
            'bg_name' => 'event5.png',
            'year' => 1947,
        ]);

        // Insert a student record
        // Student::create([
        //     'user_id' => $user->id,
        //     'score' => 0,
        //     'timeline' => 1,
        //     'question' => 1,
        // ]);
    }
}
