<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function userIndex()
    {
        return view('reservations.userIndex')
            ->with('reservations', Auth::user()->reservations);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservations.index')
            ->with('reservations', Reservation::all()
                ->where('place_id', null));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = Reservation::create(
            $request->input() + ['user_id' => Auth::id()]
        );

        /*je sais pas si c'esst bon*/

        /*$user = Auth::user();
        $res->users()->attach($user->id);*/


        flash('Reservation enregistré !')->success();
        return redirect()->action('ReservationController@userIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $res = Reservation::findOrFail($id);
        return view('reservations.show')->with('reservation', $res);
    }

    public function update(Request $request, $id)
    {
        $res = Reservation::findOrFail($id);
        $res->update($request->input());

        return redirect()->route('reservations.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        // Places compatibles uniquement
        $places = Place::all()
            ->where('longueur', '>=', $reservation->longueur)
            ->where('largeur', '>=', $reservation->largeur);

        return view('reservations.edit')
            ->with('reservation', $reservation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::findOrFail($id)->delete();
        return redirect()->route('reservations.index');
    }
}