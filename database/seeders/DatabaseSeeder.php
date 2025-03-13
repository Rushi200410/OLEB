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
            'option1' => 'Satyagraha',
            'option2' => 'Armed rebellion',
            'option3' => 'Boycott',
            'option4' => 'Civil disobedience',
            'answer' => 1,
            'timeline' => 1,
            'points' => 3,
        ]);

        $quiz12 = Quiz::create([
            'question' => 'Where did Mahatma Gandhi first organize a Satyagraha movement in India?',
            'option1' => 'Kheda',
            'option2' => 'Ahmedabad',
            'option3' => 'Champaran',
            'option4' => 'Amritsar',
            'answer' => 3,
            'timeline' => 1,
            'points' => 3,
        ]);

        $quiz13 = Quiz::create([
            'question' => 'The Rowlatt Act (1919) allowed the British government to:',
            'option1' => 'Grant independence to India',
            'option2' => 'Detain political prisoners without trial',
            'option3' => 'Reduce taxes on Indian farmers',
            'option4' => 'Promote Indian businesses',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz14 = Quiz::create([
            'question' => 'Who was the British officer responsible for the Jallianwala Bagh massacre?',
            'option1' => 'Lord Irwin',
            'option2' => 'General Dyer',
            'option3' => 'Lord Mountbatten',
            'option4' => 'Sir John Simon',
            'answer' => 2,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz15 = Quiz::create([
            'question' => 'On which date did the Jallianwala Bagh massacre occur?',
            'option1' => '13 April 1919',
            'option2' => '15 August 1919',
            'option3' => '10 April 1919',
            'option4' => '6 April 1919',
            'answer' => 1,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz16 = Quiz::create([
            'question' => 'The Non-Cooperation Movement was launched in response to:',
            'option1' => 'The partition of Bengal',
            'option2' => 'The Indian Councils Act',
            'option3' => 'The Quit India Movement',
            'option4' => 'The Jallianwala Bagh massacre and Rowlatt Act',
            'answer' => 4,
            'timeline' => 1,
            'points' => 3,
        ]);
        $quiz17 = Quiz::create([
            'question' => 'The Khilafat Movement was started to protest against:',
            'option1' => 'The Jallianwala Bagh massacre',
            'option2' => 'The British salt tax',
            'option3' => 'The unfair treatment of the Ottoman Empire',
            'option4' => 'The Rowlatt Act',
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
            'question' => 'What was the economic impact of the Non-Cooperation Movement?',
            'option1' => 'Rise in the price of Indian goods',
            'option2' => 'Increase in government revenue',
            'option3' => 'Increase in foreign trade',
            'option4' => 'Decline in the import of foreign cloth',
            'answer' => 4,
            'timeline' => 2,
            'points' => 3,
        ]);

        $quiz23 = Quiz::create([
            'question' => 'Who led the peasant movement in Awadh?',
            'option1' => 'Bhagat Singh',
            'option2' => 'Rajendra Prasad',
            'option3' => 'Baba Ramchandra',
            'option4' => 'Alluri Sitarama Raju',
            'answer' => 3,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz24 = Quiz::create([
            'question' => 'Alluri Sitarama Raju was a leader in:',
            'option1' => 'Punjab',
            'option2' => 'Andhra Pradesh',
            'option3' => 'Bihar',
            'option4' => 'Bengal',
            'answer' => 2,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz25 = Quiz::create([
            'question' => 'Which law restricted the movement of plantation workers in Assam?',
            'option1' => 'Rowlatt Act',
            'option2' => 'Simon Commission Act',
            'option3' => 'Inland Emigration Act',
            'option4' => 'Government of India Act, 1919',
            'answer' => 3,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz26 = Quiz::create([
            'question' => 'What did freedom mean for the plantation workers in Assam?',
            'option1' => 'Higher wages',
            'option2' => 'Right to move freely in and out of the plantations',
            'option3' => 'Land redistribution',
            'option4' => 'Abolition of the zamindari system',
            'answer' => 2,
            'timeline' => 2,
            'points' => 3,
        ]);
        $quiz27 = Quiz::create([
            'question' => 'What was the main issue faced by the plantation workers under the Inland Emigration Act of 1859?',
            'option1' => 'Low wages',
            'option2' => 'Forced recruitment',
            'option3' => 'Restrictions on movement',
            'option4' => 'High rents',
            'answer' => 3,
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
            'question' => 'What was the reaction of the British government to the Civil Disobedience Movement?',
            'option1' => 'They ignored the protests',
            'option2' => 'They arrested thousands of leaders and activists',
            'option3' => 'They reduced the salt tax',
            'option4' => 'They granted India independence immediately',
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
            'question' => 'Who was known as the Frontier Gandhi and led the movement in North-West Frontier Province?',
            'option1' => 'Subhas Chandra Bose',
            'option2' => 'Lala Lajpat Rai',
            'option3' => 'Abdul Ghaffar Khan',
            'option4' => 'Vallabhbhai Patel',
            'answer' => 3,
            'timeline' => 3,
            'points' => 3,
        ]);

        $quiz36 = Quiz::create([
            'question' => 'Why did rich peasants such as the Patidars of Gujarat and Jats of Uttar Pradesh participate in the movement?',
            'option1' => 'To demand a separate electorate',
            'option2' => 'To protest against high land revenue taxes',
            'option3' => 'To gain more control over village administration',
            'option4' => 'To support the British government',
            'answer' => 2,
            'timeline' => 3,
            'points' => 3,
        ]);

        $quiz37 = Quiz::create([
            'question' => 'What was the attitude of Indian merchants and industrialists towards the Civil Disobedience Movement?',
            'option1' => 'They fully supported it and provided financial aid',
            'option2' => 'They opposed the movement to protect their businesses',
            'option3' => 'They were indifferent to the movement',
            'option4' => 'They formed their own political party',
            'answer' => 1,
            'timeline' => 3,
            'points' => 3,
        ]);

        $quiz41 = Quiz::create([
            'question' => 'Why did the working class not participate in large numbers in the Civil Disobedience Movement?',
            'option1' => 'They supported British rule',
            'option2' => 'They were not allowed to protest',
            'option3' => 'The Congress did not include workers’ demands in the movement',
            'option4' => 'They were given special benefits by the British',
            'answer' => 3,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz42 = Quiz::create([
            'question' => 'Why did Dalits (untouchables) not participate widely in the Civil Disobedience Movement?',
            'option1' => 'Congress did not focus on their specific concerns',
            'option2' => 'They supported British rule',
            'option3' => 'They had no interest in politics',
            'option4' => 'They were financially strong and unaffected',
            'answer' => 1,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz43 = Quiz::create([
            'question' => 'Who led the Dalit movement and demanded separate electorates for Dalits?',
            'option1' => 'Mahatma Gandhi',
            'option2' => 'Dr. B.R. Ambedkar',
            'option3' => 'Jawaharlal Nehru',
            'option4' => 'Subhas Chandra Bose',
            'answer' => 2,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz44 = Quiz::create([
            'question' => 'What was the outcome of the Poona Pact (1932) between Gandhi and Ambedkar?',
            'option1' => 'Separate electorates were granted to Dalits',
            'option2' => 'Dalits were given reserved seats in legislatures under joint electorates',
            'option3' => 'Gandhi refused to negotiate',
            'option4' => 'British rule ended',
            'answer' => 2,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz45 = Quiz::create([
            'question' => 'Why did Muslims not fully support the Civil Disobedience Movement?',
            'option1' => 'They feared Hindu domination in a free India',
            'option2' => 'They were not interested in politics',
            'option3' => 'They were given special rights by the British',
            'option4' => 'Gandhi refused to include them',
            'answer' => 1,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz46 = Quiz::create([
            'question' => 'Who among the following was a strong advocate for a separate Muslim nation?',
            'option1' => 'Subhas Chandra Bose',
            'option2' => 'Muhammad Iqbal',
            'option3' => 'Bhagat Singh',
            'option4' => 'Vallabhbhai Patel',
            'answer' => 2,
            'timeline' => 4,
            'points' => 3,
        ]);

        $quiz47 = Quiz::create([
            'question' => 'Which event marked a major turning point in Hindu-Muslim relations in India?',
            'option1' => 'Formation of the Swaraj Party',
            'option2' => 'Poona Pact',
            'option3' => 'Collapse of the Hindu-Muslim unity after the Khilafat Movement',
            'option4' => 'Formation of the Indian National Congress',
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
            'question' => 'Who painted the famous Bharat Mata image in 1905?',
            'option1' => 'Rabindranath Tagore',
            'option2' => 'Abanindranath Tagore',
            'option3' => 'Raja Ravi Varma',
            'option4' => 'M.F. Husain',
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
            'question' => 'Why did some non-Hindus feel excluded from nationalist symbols?',
            'option1' => 'Nationalist symbols often had Hindu religious imagery',
            'option2' => 'The British forced them to reject nationalism',
            'option3' => 'They were not interested in Indian independence',
            'option4' => 'They only participated in economic movements',
            'answer' => 1,
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
