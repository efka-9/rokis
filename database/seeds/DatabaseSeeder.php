<?php

use Illuminate\Database\Seeder;

use App\Src\Quiz;
use App\Src\Question;
use App\Src\Answer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quizes = [
            [
                'id' => 1,
                'name' => 'Matematika'
            ],
            [
                'id' => 2,
                'name' => 'Lietuviu'
            ]
        ];

        Quiz::insert($quizes);

        $questions = [
            [
                'id' => 1,
                'quiz_id' => 1,
                'name' => 'Kiek yra 2 + 2'
            ],
            [
                'id' => 2,
                'quiz_id' => 1,
                'name' => 'Kiek yra 8 + 8'
            ],
            [
                'id' => 3,
                'quiz_id' => 1,
                'name' => 'Kiek yra 16 + 16'
            ]
        ];

        Question::insert($questions);

        $answers = [
            [
                'question_id' => 1,
                'value' => 6,
                'points' => 0
            ],
            [
                'question_id' => 1,
                'value' => 4,
                'points' => 3
            ],
            [
                'question_id' => 2,
                'value' => 6,
                'points' => 0
            ],
            [
                'question_id' => 2,
                'value' => 16,
                'points' => 3
            ],
            [
                'question_id' => 3,
                'value' => 6,
                'points' => 0
            ],
            [
                'question_id' => 3,
                'value' => 32,
                'points' => 3
            ]
        ];

        Answer::insert($answers);
    }
}
