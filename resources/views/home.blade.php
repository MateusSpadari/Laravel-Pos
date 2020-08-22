@extends('index')
@section('title', 'Home')
@section('content')
<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1600x900/?nature')">
  <div class="container">
    <h1 class="display-3">Faça reservas de hotel de forma fácil</h1>
    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
    <a href="/login" class="btn btn-success btn-lg my-2">Cadastre-se para ver todos os hotéis</a>
  </div>
</div>

<div class="container">
  <div class="row">

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Conveniente</h5>
          <p class="card-text">Administre as reservas do seu hotel em apenas um lugar</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Melhores preços</h5>
          <p class="card-text">Temos discontos especiais para os melhores hotéis</p>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fácil de usar</h5>
          <p class="card-text">Edite e atualize reservas com um clique</p>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection