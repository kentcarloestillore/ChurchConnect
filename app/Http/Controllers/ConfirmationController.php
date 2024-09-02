<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmation;

class ConfirmationController extends Controller
{
    public function index(){

        $confirmations = Confirmation::orderBy('id');

        $confirmations->with('parishioner');
        $confirmations->with('church');
        $confirmations->with('sponsors');

        return view('retrieve.confirmation.confirmations-list', ['confirmations' => $confirmations->get()]);
    }

    public function show(Confirmation $confirmation){
        $confirmation->load('parishioner', 'church', 'sponsors');
        return view('retrieve.confirmation.confirmation-show', ['confirmation' => $confirmation]);
    }
}
