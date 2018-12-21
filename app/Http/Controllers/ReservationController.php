<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = Reservation::create(
			$request->input() + [
                'date_debut' => '2000/01/01'
            ]
		);

        /*je sais pas si c'esst bon*/
        $user=Auth::user();
        $res->users()->attach($user->id);


		flash('Reservation enregistré !')->success();
		return redirect()->route('reservations.show', ['reservation'=>$res]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $res = Reservation::findOrFail($id);
        return view('reservations.show')->with('reservation', $res);
    }