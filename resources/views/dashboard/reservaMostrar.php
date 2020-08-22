@extends('index')
@section('title', 'Editar reserva')
@section('content')
<div class="container">
  <div class="card my-5">
    <div class="card-header">
      <h2>You're all booked for the {{ $hotelInfo->name }} in {{ $hotelInfo->location }}!</h2>
    </div>
  </div>

  <div class="card-body">
    <div class="card-body">
      <div class="row">

        <div class="col-sm-6">
          <img src="{{ $hotelInfo->imagem }}" class="img-fluid" alt="Imagem do hotel">
        </div>

        <div class="col-sm-6">
          <h3 class="card-title">
            {{ $hotelInfo->nome }} - <small>{{ $hotelInfo->localizacao }}</small>
          </h3>
          <p class="card-text">{{ $hotelInfo->descricao }}</p>
          <p class="card-text"><strong>Chegada: </strong>{{ $reserva->chegada }}</p>
          <p class="card-text"><strong>Partida: </strong>{{ $reserva->partida }}</p>
          <p class="card-text"><strong>Quarto: </strong>{{ $reserva->quarto['tipo'] }}</p>
          <p class="card-text"><strong>Convidados: </strong>{{ $reserva->num_de_convidados }}</p>
          <p class="card-text"><strong>Preço: </strong>${{ $reserva->quarto['preco'] }}</p>
        </div>
      </div>

      <div class="text-center mt-3">
        <a href="/dashboard/reservas/{{ $reserva->id }}/edit" class="btn btn-lg btn-success">Editar essa reserva</a>
        <a href="/dashboard/reservas/{{ $reserva->id }}/delete" class="btn btn-lg btn-danger">Excluir</a>
      </div>
    </div>

  </div>
</div>

@endsection