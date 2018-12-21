<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Boats;
use Illuminate\Http\Request;

class BoatsController extends Controller
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
        return view('boats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boat = Boats::create(
			$request->input() + [
                'date_construction' => '2000/01/01'
            ]
		);

        $boat->users()->attach(Auth::id());

		flash('Nouveau bateau enregistré !')->success();
		return redirect()->route('boats.show', ['boat'=>$boat]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $boat = Boats::findOrFail($id);
        return view('boats.show')->with('boat', $boat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boat = Boats::findOrFail($id);
        return view ('boats.edit')->with('boat',$boat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boat->update(
			$request->input()
		);
		return redirect()
			->route('boats.edit', $boat)
			->with('message', 'Bateau correctement mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boat = Boats::findOrFail($id);
        $boat->delete();
		return redirect('profil')
			->with('message', 'Le bateau a été correctement effacé');
    }
}
