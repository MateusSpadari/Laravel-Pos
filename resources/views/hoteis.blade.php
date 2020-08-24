@extends('index')
@section('title', 'Hotéis')
@section('content')
<div class="container my-5">
  <div class="row">

    @foreach($hoteis as $hotel)
    <div class="col-sm-4">
      <div class="card mb-3">
        <div style="background-image:url('{{ $hotel->imagem }}');height:300px;background-size:cover;" class="img-fluid" alt="Imagem do hotel"></div>
        <div class="card-body">
          <h5 class="card-title">{{ $hotel->name }}</h5>
          <small class="text-muted">{{ $hotel->location }}</small>
          <p class="card-text">{{ $hotel->description }}</p>
          <a href="/dashboard/reservas/create/{{ $hotel->id }}" class="btn btn-primary">Reservar agora</a>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
</div>
@endsection