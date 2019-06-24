<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person

class ApiSearchController extends Controller
{
    $error = ['error' => 'No results found, please try with different keywords.'];

        if($request->has('q')) {

            $posts = Person::search($request->get('q'))->get();

            return $posts->count() ? $posts : $error;

        }

     
        return $error;
    }
}
