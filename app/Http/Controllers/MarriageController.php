<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marriage;

class MarriageController extends Controller
{
    public function index(){

        $marriages = Marriage::orderBy('id');

        $marriages->with('husband');
        $marriages->with('wife');
        $marriages->with('church');
        $marriages->with('sponsors');

        return view('retrieve.marriage.marriages-list', ['marriages' => $marriages->get()]);
    }

    public function show(Marriage $marriage){
        $marriage->load('husband', 'wife', 'church', 'sponsors');
        return view('retrieve.marriage.marriage-show', ['marriage' => $marriage]);
    }
}
