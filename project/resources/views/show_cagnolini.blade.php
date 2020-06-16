@extends('general_layout')

@section('content')
  <div class="main">

    <ul>
      <li>
        NOME : {{$cagnolino['nome']}}
      </li>
      <li>
        TIPO : {{$cagnolino['tipo']}}
      </li>
      <li>
        ALTEZZA : {{$cagnolino['altezza']}}
      </li>
      <li>
        PESO : {{$cagnolino['peso']}}
      </li>
    </ul>

  </div>
@endsection
