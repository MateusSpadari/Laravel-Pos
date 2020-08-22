<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Hotel;
use App\Models\Quarto;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::with('quarto', 'quarto.hotel')
            ->orderBy('arrival', 'asc')
            ->get();

        return view('dashboard.reservas')->with('reservas', $reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hotel_id)
    {
        $hotelInfo = Hotel::with('quartos')->get()->find($hotel_id);

        return view('dashboard.reservaCriar', compact('hotelInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['usuario_id' => 1]);
        Reserva::create($request->all());

        return redirect('dashboard/reservas')->with('success', 'Reserva criada com successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        $reserva = Reserva::with('quarto', 'quarto.hotel')->get()->find($reserva->id);
        $hotel_id = $reserva->quarto->hotel_id;
        $hotelInfo = Hotel::with('quartos')->find($hotel_id);

        return view('dashboard.reservaMostrar', compact('reserva', 'hotelInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        $reserva = Reserva::with('quarto', 'quarto.hotel')->get()->find($reserva->id);
        $hotel_id = $reserva->quarto->hotel_id;
        $hotelInfo = Hotel::with('quartos')->get()->find($hotel_id);

        return view('dashboard.reservaEditar', compact('reserva', 'hotelInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        $reserva->usuario_id = 1;
        $reserva->save();

        return redirect('dashboard/reservas')->with('success', 'Reserva atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        $reserva = Reserva::find($reserva->id);
        $reserva->delete();

        return redirect('dashboard/reservas')->with('success', 'Reserva excluida com sucesso!');
    }
}
