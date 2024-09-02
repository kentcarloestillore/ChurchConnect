<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Death;
use Carbon\Carbon;

class DeathController extends Controller
{
    public function index(){

        $deaths = Death::orderBy('id');

        $deaths->with('parishioner');
        $deaths->with('church');

        return view('retrieve.death.deaths-list', ['deaths' => $deaths->get()]);
    }

    public function show(Death $death){
        $death->load('parishioner', 'church');

        $dateOfBirth = Carbon::parse($death->parishioner->date_of_birth);
        $dateOfDeath = Carbon::parse($death->date_of_death);
        $age = (int) $dateOfBirth->diffInYears($dateOfDeath);

        return view('retrieve.death.death-show', ['death' => $death, 'age' => $age]);
    }
}
