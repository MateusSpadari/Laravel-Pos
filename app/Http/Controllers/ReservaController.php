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
            ->where('usuario_id', \Auth::user()->getUserInfo()['sub'])
            ->orderBy('chegada', 'asc')
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
        $user_id = \Auth::user()->getUserInfo()['sub'];
        $request->request->add(['usuario_id' => $user_id]);

        dd($request);

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

        if ($reserva->usuario_id === \Auth::user()->getUserInfo()['sub']) {
            $hotel_id = $reserva->quarto->hotel_id;
            $hotelInfo = Hotel::with('quartos')->find($hotel_id);

            return view('dashboard.reservaMostrar', compact('reserva', 'hotelInfo'));
        } else {
            return redirect('dashboard/reservas')->with('error', 'Você não está autorizado para acessar essa rota do site.');
        }
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

        if ($reserva->usuario_id === \Auth::user()->getUserInfo()['sub']) {
            $hotel_id = $reserva->quarto->hotel_id;
            $hotelInfo = Hotel::with('quartos')->get()->find($hotel_id);

            return view('dashboard.reservaEditar', compact('reserva', 'hotelInfo'));
        } else {
            return redirect('dashboard/reservas')->with('error', 'Você não está autorizado para acessar essa rota do site.');
        }
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
        if ($reserva->usuario_id === \Auth::user()->getUserInfo()['sub'])
            return redirect('dashboard/reservas')->with('error', 'Você não está autorizado para acessar essa rota do site.');

        $usuario_id = \Auth::user()->getUserInfo()['sub'];
        $reserva->usuario_id = $usuario_id;
        $reserva->num_de_convidados = $request->num_de_convidados;
        $reserva->chegada = $request->chegada;
        $reserva->partida = $request->partida;
        $reserva->quarto_id = $request->quarto_id;
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

        if ($reserva->usuario_id === \Auth::user()->getUserInfo()['sub']) {
            $reserva->delete();

            return redirect('dashboard/reservas')->with('success', 'Reserva excluida com sucesso!');
        } else {
            return redirect('dashboard/reservas')->with('error', 'Você não está autorizado para acessar essa rota do site.');
        }
    }
}
