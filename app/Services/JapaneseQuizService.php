<?php
namespace App\Services;
use App\Models\Character;

class JapaneseQuizService
{
    public function generateMultipleChoiceQuestion(int $level)
    {
        $correctAnswer = Character::where('id', '<=', $level)->inRandomOrder()->first();

        $wrongAnswers = Character::where('id', '!=', $correctAnswer->id)
            ->where('type', '=', $correctAnswer->type)
            ->where('id', '<=', $level)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $options = $wrongAnswers->push($correctAnswer)->shuffle();

        $choices = [];
        $choices['options'] = $options;
        $choices['correctAnswer'] = $correctAnswer;

        return $choices;
     
    }

    public function prepareAnswers(array $items): array
    {
        $enrichedItems = [];

        foreach ($items as $item) {
            
            $enrichedItems[] = [
                'correct_answer' => Character::where('id',$item['correctAsnwerID'])
                ->first(),
                'user_choice' => Character::where('id',$item['user_choiceID'])
                ->first(),
            ];
        }

        return $enrichedItems;
    }
}

?>