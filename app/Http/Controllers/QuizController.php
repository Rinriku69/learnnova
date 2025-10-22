<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Services\JapaneseQuizService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Psr\Http\Message\ServerRequestInterface;

class QuizController extends Controller
{
    function start(): RedirectResponse{
        session()->forget('correct_answer');
        session()->forget('quiz_answers');

        return redirect()->route('quiz.choice');
    }
    
    function quizForm(JapaneseQuizService $quizGenerate): View
    {
        $course = Course::where('code','J101')->firstorfail();
        Gate::authorize('courseContentView',$course);
        $level = 46;
        $choices = $quizGenerate->generateMultipleChoiceQuestion($level);
        $question = $choices['correctAnswer']->character;

        $get_collection = session()->get('quiz_answers', []);

        $question_number = count($get_collection) + 1;

        $correct_answer =  (int) $choices['correctAnswer']->id;

        session()->put('correct_answer', $correct_answer);



        return view(
            'quiz.multipleChoice',
            [
                'choices' => $choices,
                'question' => $question,
                'question_number' => $question_number
            ]
        );
    }

    function process(ServerRequestInterface $request): RedirectResponse
    {
        $data = $request->getParsedBody();
        $answer_collect = session()->get('quiz_answers', []);


        $correctAnswerID = session()->get('correct_answer', []);

        $answer_collect[] = [
            'correctAsnwerID' => (int) $correctAnswerID,
            'user_choiceID' => (int) $data['choice']
        ];
        session()->put('quiz_answers', $answer_collect);
        session()->forget('correct_answer');


        return redirect()->route('quiz.choice');
    }

    function result(JapaneseQuizService $quizInfo): view
    {
        $answer_collect = session()->get('quiz_answers', []);


        $score = 0;

        foreach ($answer_collect as $answer) {

            if ($answer['correctAsnwerID'] === $answer['user_choiceID']) {
                $score++;
            }
        }
        $answer_info = $quizInfo->prepareAnswers($answer_collect);
        $total = count($answer_info);
        session()->forget('quiz_answers');

        return view(
            'quiz.result',
            [
                'answer_collect' => $answer_info,
                'score' => $score,
                'total' => $total
            ]
        );
    }
}
