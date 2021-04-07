<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountriesController extends Controller 
{
    public function show() 
    {
        $country = Country::first();
        $comments = $country->comments;
        foreach ($comments as $comment) {
            echo '國家代碼：' . $country->id . '，包括評論代碼：' . $comment->id . PHP_EOL;
        }
    }
}
