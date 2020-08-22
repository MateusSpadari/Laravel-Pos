@extends('index')
@section('title', 'Reservas')
@section('content')
<div class="container mt-5">
  <h2>Suas reservas</h2>

  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Hotel</th>
        <th scope="col">Chegada</th>
        <th scope="col">Partida</th>
        <th scope="col">tipo</th>
        <th scope="col">Convidados</th>
        <th scope="col">Preço</th>
        <th scope="col">Administrar</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($reservas as $reserva)
      <tr>
        <td>{{ $reserva->quarto->hotel['nome'] }}</td>
        <td>{{ $reserva->chegada }}</td>
        <td>{{ $reserva->partida }}</td>
        <td>{{ $reserva->quarto['tipo'] }}</td>
        <td>{{ $reserva->num_de_convidados }}</td>
        <td>${{ $reserva->quarto['preco'] }}</td>
        <td><a href="/dashboard/reservas/{{ $reserva->id }}/edit" class="btn btn-sm btn-success">Editar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @if(!empty(Session::get('success')))
  <div class="alert alert-success"> {{ Session::get('success') }}</div>
  @endif
  @if(!empty(Session::get('error')))
  <div class="alert alert-danger"> {{ Session::get('error') }}</div>
  @endif
</div>
@endsection