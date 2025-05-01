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
            echo __('Country ID:') . $country->id . ' ' . __('includes the comment ID:') . $comment->id . PHP_EOL;
        }
    }
}
