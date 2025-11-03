@extends('layouts.main', ['title' => 'Multiple Choice'])

@section('content')
   
    <div class="quiz-container">
        
        <h1>Question : {{ $question_number }}</h1>
        <div class="quiz-question">
            <h1>{{ $question }}</h1>
            <p class="kana-type">Hiragana</p>
        </div>

        <form action="{{ route('quiz.process') }}" method="POST">
            @csrf
            <div class="quiz-choices">
                @foreach ($choices['options'] as $choice)
                   
                    
                    <button type="submit" name="choice" value="{{ $choice->id }}"
                        class="choice-btn clickable-sound">
                        {{ $choice->romaji }}
                    </button>
                
                    
                @endforeach
            </div>

        </form>

        <div class="view-result-container">
            <form action="{{ route('quiz.result') }} " method="get">  
                @if ($question_number >= 2)
                    <button type="submit" class="btn-view-result result-sound">Finish & View Result</button>
                @endif
            </form>
        </div>
    </div>
@endsection
