@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
  <div class="row">

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Administre suas reservas</h4>
          <p class="card-text">Modifique sua reserva atual</p>
          <a href="/dashboard/reservas" class="btn btn-primary">Minhas reservas</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Encontre um quarto</h4>
          <p class="card-text">Pesquise no catálogo de hotéis</p>
          <a href="/hotels" class="btn btn-primary">Nossos hotéis</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection