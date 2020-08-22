@extends('index')
@section('title', 'Home')
@section('content')
<div class="jumbotron jumbotron-fluid text-light" style="background-image: url('https://vaipromundo.com.br/blog/wp-content/uploads/2019/01/destaque-vpm-dubai.jpg')">
  <div class="container">
    <h1 class="display-4 font-weight-bold">Faça reservas de hotel de forma fácil</h1>
    <p class="lead font-weight-bold">Este site é um trabalho para a disciplina de Laravel da Pós Graduaçãoe em Desenvolimento de Distemas Web e Mobile da Faculdade Guairacá, seu objetivo é cadastrar reservas de viagem.</p>
    <a href="/login" class="btn btn-success btn-lg my-2">Cadastre-se para ver todos os hotéis</a>
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