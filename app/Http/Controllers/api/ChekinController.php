<?php

namespace App\Http\Controllers\api;

use App\Chekin;
use App\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChekinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Chekin::whereNotNull('dateOutput')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $guest =  Guest::with('chekin')->findOrFail($id);


//       $guest = $guest->id;
//       $guest = $guest->name;
//       $guest = $guest->doc;


//       $guest['chekin'] = $guest['chekin']['dateEntry'];
//       $guest['chekin'] = $guest['chekin']['dateOutput'];

        if ($guest['chekin']['additionalVehicle']){
            $guest['chekin']['additionalVehicle'] = true;
        }else
        {
            $guest['chekin']['additionalVehicle'] = false;
        };


       return  response()->json($guest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
