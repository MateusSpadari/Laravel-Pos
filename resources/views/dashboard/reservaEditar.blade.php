@extends('index')
@section('title', 'Editar reserva')
@section('content')

<div class="container">
  <div class="card my-5">

    <div class="card-header">
      <h2>{{ $hotelInfo->nome }} - <small class="text-muted">{{ $hotelInfo->localizacao }}</small></h2>
    </div>

    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">Reserve já a sua estadia no resort mais magnífico do mundo!</p>
      <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
          
          <div class="col-sm-8">
            <div class="form-group">
              <label for="room">Tipo do quarto</label>
              <select class="form-control" name="quarto_id" value="{{ old('quarto_id', $reserva->quarto_id) }}">
                @foreach ($hotelInfo->quartos as $opcoes)
                <option value="{{$option->id}}">{{ $opcoes->tipo }} - ${{ $opcoes->preco }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label for="guests">Número de convidados</label>
              <input class="form-control" name="num_de_convidados" value="{{ old('num_de_convidados', $reserva->num_de_convidados) }}">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="arrival">Chegada</label>
              <input type="date" class="form-control" name="chegada" placeholder="03/21/2020" value="{{ old('chegada', $reserva->chegada) }}">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label for="departure">Partida</label>
              <input type="date" class="form-control" name="partida" placeholder="03/23/2020" value="{{ old('partida', $reserva->partida) }}">
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-lg btn-primary">Enviar</button>

      </form>
    </div>
  </div>

  <form action="{{ route('reserva.destroy', $reserva->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <p class="text-right">
      <button type="submit" class="btn btn-sm text-danger">Excluir reserva</button>
    </p>
  </form>
</div>

@endsection