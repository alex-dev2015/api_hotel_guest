<?php

namespace App\Http\Controllers\api;

use App\Chekin;
use App\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Guest::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guest = Guest::create($request->all());

        //Pega o id do hóspede que acabou de ser criado.
        $lastIdGuest = DB::getPdo()->lastInsertId();

        $chekin = new Chekin();

        $chekin->dateEntry = now();


        /*
         *   Verifica se for final de semana e insere o valor inicial da hospedagem
         *   Junto com o valor adicional do carro;
        */

        if (checkWeekend(now())){
            $request->additionalVehicle
              ? $carro = 20.00
              : $carro = 00.00;

          $chekin->value = 150.00 + $carro ;
        }else{

            $request->additionalVehicle
                ? $carro = 15.00
                : $carro = 00.00;

            $chekin->value = 120.00 + $carro ;
        }




        $chekin->additionalVehicle = $request->additionalVehicle;

        $chekin->id_guest = $lastIdGuest;

        $chekin->save();

        if ($guest){
            return response()->json([
                "message" => "Hóspede inserido com sucesso!"
            ], 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Guest::findOrFail($id);

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
        $guest = Guest::findOrFail($id);
        $guest->update($request->all());

        if ($guest){
            return response()->json([
                "message" => "Dados atualizados com sucesso!"
            ]);
        }else{
            return response()->json([
                "message" => "Hóspede não encontrado"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();

        if ($guest){
            return response()->json([
                "message" => "Hóspede deletado com sucesso!"
            ]);
        }else{
            return response()->json([
                "message" => "Hóspede não encontrado"
            ], 404);
        }

    }

    public function search(Request $request){

        $data = $request->all();

       return Guest::where($data)->get();

    }

}