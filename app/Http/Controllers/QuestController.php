<?php

namespace App\Http\Controllers;

use App\Result;
use App\Question as Quest;
use Illuminate\Http\Request;
use Alert;

class QuestController extends Controller
{
    public function show()
    {
        $user = auth()->user()->name;
        $quest = Quest::inRandomOrder()->get();

        Alert::message($user, 'Selamat Mengerjakan!');

        return view('quest', compact('quest'));
    }

    public function submit()
    {
        $quest = Quest::all();
        $score = 0;
        $answer = [
            request('answer1'),
            request('answer2'),
            request('answer3'),
            request('answer4'),
            request('answer5'),
            request('answer6'),
            request('answer7'),
            request('answer8'),
            request('answer9'),
            request('answer10'),
            request('answer11'),
            request('answer12'),
            request('answer13'),
            request('answer14'),
            request('answer15'),
            request('answer16'),
            request('answer17'),
            request('answer18'),
            request('answer19'),
            request('answer20'),
        ];

        foreach ($quest as $id => $quest) {
            switch ($answer[$id]) {
                case 'a':
                    if ($quest->answer_key == 'a') {
                        $score += 5;
                    }
                    break;
                case 'b':
                    if ($quest->answer_key == 'b') {
                        $score += 5;
                    }
                    break;
                case 'c':
                    if ($quest->answer_key == 'c') {
                        $score += 5;
                    }
                    break;
                case 'd':
                    if ($quest->answer_key == 'd') {
                        $score += 5;
                    }
                    break;
            }
        }

        if (Result::where('user_id', auth()->id())->exists()) {
            Result::where('user_id', auth()->id())->update([
                'score' => $score
            ]);
        } else {
            Result::create([
                'user_id' => auth()->id(),
                'score' => $score
            ]);
        }
        return redirect()->route('result.show');
    }
}