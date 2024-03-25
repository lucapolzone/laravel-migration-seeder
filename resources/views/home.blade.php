@extends('layouts.app')

@section('title', 'Migration Seeder')

@section('main-content')

  <main>
    <div class="container">
      <h1>Elenco treni</h1>
      <div class="row">
        
        @foreach ($trains as $train)
          <div class="col-4">
            <div class="card">
              <h2><strong>Compagnia: </strong>{{ $train['company'] }}</h2>
              <h2><strong>Stazione di partenza: </strong>{{ $train['departure_station'] }}</h2>
              <h2><strong>Stazione di arrivo: </strong>{{ $train['arrival_station'] }}</h2>
              <h2><strong>Orario di partenza: </strong>{{ $train['departure_time'] }}</h2>
              <h2><strong>Orario di arrivo: </strong>{{ $train['arrival_time'] }}</h2>
              <h2><strong>Codice treno: </strong>{{ $train['train_code'] }}</h2>
              <h2><strong>Numero carrozze: </strong>{{ $train['number_of_carriages'] }}</h2>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
  </main>

@endsection