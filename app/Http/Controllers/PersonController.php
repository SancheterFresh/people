<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index(){
    	$people = Person::get(['id', 'fullname', 'imgpath']);
    	return view('people.index')->withPeople($people);
    }

    public function contacts(){
    	return view('people.contacts');
    }

    public function show($id){
    	$person = Person::find($id);
    	return view('people.person')->with(['person'=>$person]);
    }

    public function getPeople(){
    	return Person::all();
    }
    public function getPerson($id){
    	return Person::find($id);
    }
}
