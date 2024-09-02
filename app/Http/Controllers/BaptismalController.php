<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baptismal;

class BaptismalController extends Controller
{
    public function index(){

        $baptismals = Baptismal::orderBy('id');

        $baptismals->with('parishioner');
        $baptismals->with('church');
        $baptismals->with('godparents');

        return view('retrieve.baptismal.baptismals-list', ['baptismals' => $baptismals->get()]);
    }

    public function show(Baptismal $baptismal){
        $baptismal->load('parishioner', 'church', 'godparents');
        return view('retrieve.baptismal.baptismal-show', ['baptismal' => $baptismal]);
    }

    public function create(){
        return view('register.baptismal.create-parishioner');
    }
}
