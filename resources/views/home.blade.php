@extends('index')
@section('title', 'Home')
@section('content')
<div class="jumbotron jumbotron-fluid text-light" style="background-image: url('https://images.unsplash.com/photo-1525935944571-4e99237764c9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjF9&auto=format&fit=crop&w=1951&q=80')">
  <div class="container">

    @if(Auth::user())
    <h1 class="display-4">Bem vindo novamente, {{ Auth::user()->nickname }}!</h1>
    <p class="lead">Seu balcão único para gerenciamento de reservas.</p>
    <a href="/dashboard" class="btn btn-success btn-lg my-2">Visualize seu painel administrativo</a>
    @else
    <h1 class="display-4 font-weight-bold">Faça reservas de hotel de forma fácil</h1>
    <p class="lead font-weight-bold">Este site é um trabalho para a disciplina de Laravel da Pós Graduaçãoe em Desenvolimento de Distemas Web e Mobile da Faculdade Guairacá, seu objetivo é cadastrar reservas de viagem.</p>
    <a href="/login" class="btn btn-success btn-lg my-2">Cadastre-se para ver todos os hotéis</a>
    @endif

  </div>
</div>

<div class="container">
  <div class="row">

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Conveniente</h5>
          <p class="card-text">Administre as reservas do seu hotel em apenas um lugar.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Melhores preços</h5>
          <p class="card-text">Temos descontos especiais para os melhores hotéis.</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fácil de usar</h5>
          <p class="card-text">Edite e atualize suas reservas com apenas um clique.</p>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection