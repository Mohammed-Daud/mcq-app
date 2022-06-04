<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionAnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $qusAnswers = [
            'PHP' => [
                [
                    'question' => 'PHP stands for',
                    'correct_answer' => 'option1',
                    'option1' => 'Hypertext Preprocessor',
                    'option2' => 'Pretext Hypertext Preprocessor',
                    'option3' => 'Personal Home Processor',
                    'option4' => 'None of the above',
                ],
                [
                    'question' => 'Who is known as the father of PHP?',
                    'correct_answer' => 'option3',
                    'option1' => 'Drek Kolkevi',
                    'option2' => 'List Barely',
                    'option3' => 'Rasmus Lerdrof',
                    'option4' => 'None of the above',
                ],
                [
                    'question' => 'Variable name in PHP starts with',
                    'correct_answer' => 'option2',
                    'option1' => '! (Exclamation)',
                    'option2' => '$ (Dollar)',
                    'option3' => '& (Ampersand)',
                    'option4' => '# (Hash)',
                ],
                [
                    'question' => 'Which of the following is the default file extension of PHP?',
                    'correct_answer' => 'option1',
                    'option1' => '.php',
                    'option2' => '.hphp',
                    'option3' => '.xml',
                    'option4' => '.html',
                ],
                [
                    'question' => 'Which of the following is not a variable scope in PHP?',
                    'correct_answer' => 'option1',
                    'option1' => 'Extern',
                    'option2' => 'Local',
                    'option3' => 'Static',
                    'option4' => 'Global',
                ],
            ],
            'AJAX' => [
                [
                    'question' => 'AJAX Stands for',
                    'correct_answer' => 'option1',
                    'option1' => 'Asynchronous Javascript and XML',
                    'option2' => 'Abstract JSON and XML',
                    'option3' => 'Another Java Abstraction for X-Windows',
                    'option4' => 'Another Java and XML Library',
                ],
                [
                    'question' => 'Which one of these technologies is NOT used in AJAX',
                    'correct_answer' => 'option4',
                    'option1' => 'CSS',
                    'option2' => 'DOM',
                    'option3' => 'DHTML',
                    'option4' => 'Flash',
                ],
                [
                    'question' => 'Choose the client-side JavaScript object?',
                    'correct_answer' => 'option2',
                    'option1' => 'Database',
                    'option2' => 'FileUpLoad',
                    'option3' => 'File',
                    'option4' => 'Cursor',
                ],
                [
                    'question' => 'What is the official name of JavaScript?',
                    'correct_answer' => 'option3',
                    'option1' => 'NetscapeScript',
                    'option2' => 'XMLScript',
                    'option3' => 'ECMAScript',
                    'option4' => 'WebScript',
                ],
                [
                    'question' => 'Why so JavaScript and Java have similar name?',
                    'correct_answer' => 'option2',
                    'option1' => 'JavaScript is a stripped-down version of Java',
                    'option2' => 'JavaScript\'s syntax is loosely based on Java',
                    'option3' => 'They both originated on the island of Java',
                    'option4' => 'None of the above',
                ],
            ],
            'JQUERY' => [
                [
                    'question' => 'jQuery is a',
                    'correct_answer' => 'option2',
                    'option1' => 'JavaScript method',
                    'option2' => 'JavaScript library',
                    'option3' => 'JSON library',
                    'option4' => 'PHP method',
                ],
                [
                    'question' => 'Which of the following sign is used as a shortcut for jQuery?',
                    'correct_answer' => 'option2',
                    'option1' => 'the % sign',
                    'option2' => 'the & sign',
                    'option3' => 'the $ sign',
                    'option4' => 'the @ sign',
                ],
                [
                    'question' => '$(this) in jQuery is used when',
                    'correct_answer' => 'option2',
                    'option1' => 'an HTML element references the entire document',
                    'option2' => 'an HTML element references its own action',
                    'option3' => 'an HTML element references the action of its parent element',
                    'option4' => 'All of the above',
                ],
                [
                    'question' => 'Which of the following jQuery method is used to hide the selected elements?',
                    'correct_answer' => 'option2',
                    'option1' => 'The hidden() method',
                    'option2' => 'The hide() method',
                    'option3' => 'The visible(false) method',
                    'option4' => 'The display(none) method',
                ],
                [
                    'question' => 'Which jQuery method is used to set one or more style properties to the selected element?',
                    'correct_answer' => 'option3',
                    'option1' => 'The html() method',
                    'option2' => 'The style() method',
                    'option3' => 'The css() method',
                    'option4' => 'All of the above',
                ],
            ],
            'HTML' => [
                [
                    'question' => 'HTML stands for',
                    'correct_answer' => 'option3',
                    'option1' => 'HighText Machine Language',
                    'option2' => 'HyperText and links Markup Language',
                    'option3' => 'HyperText Markup Language',
                    'option4' => 'None of these',
                ],
                [
                    'question' => 'The correct sequence of HTML tags for starting a webpage is',
                    'correct_answer' => 'option3',
                    'option1' => 'Head, Title, HTML, body',
                    'option2' => 'HTML, Body, Title, Head',
                    'option3' => 'HTML, Head, Title, Body',
                    'option4' => 'Body, Head, Title, HTML',
                ],
                [
                    'question' => 'Which of the following element is responsible for making the text bold in HTML?',
                    'correct_answer' => 'option3',
                    'option1' => '<pre>',
                    'option2' => '<a>',
                    'option3' => '<b>',
                    'option4' => '<br>',
                ],
                [
                    'question' => 'Which of the following tag is used for inserting the largest heading in HTML?',
                    'correct_answer' => 'option2',
                    'option1' => '<h3>',
                    'option2' => '<h1>',
                    'option3' => '<h5>',
                    'option4' => '<h6>',
                ],
                [
                    'question' => 'Which of the following tag is used to insert a line-break in HTML?',
                    'correct_answer' => 'option1',
                    'option1' => '<br>',
                    'option2' => '<a>',
                    'option3' => '<p>',
                    'option4' => '<b>',
                ],
            ],
        ];

        $qa = new QuestionAnswer;
        $qa->question = '';
        $qa->question = '';
        $qa->question = '';
        $qa->question = '';
        $qa->question = '';
        $qa->question = '';
        $qa->question = '';
        $qa->save();
    }
}