@extends('general_layout')

@section('content')
  <div class="main">
  <h1>I cagnolini sono: </h1>
    @foreach ($cagnolini as $cagnolino)
       <ul>
        <li>
           <a href="{{route('show', $cagnolino['id'])}}">
             {{$cagnolino['nome']}}
           </a>
        </li>
       </ul>
    @endforeach
  </div>
@endsection
