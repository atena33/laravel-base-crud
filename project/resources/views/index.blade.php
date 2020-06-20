@extends('layouts.general_layout')

@section('content')
  <div class="main">

    @if (session('success'))
      <h1>{{session('success')}}</h1>
    @endif

    <a href="{{route('create')}}">CREATE NEW OMINO</a>

    @foreach ($omini as $omino)
       <ul>
        <li>
           <a href="{{route('show', $omino['id'])}}">
             {{$omino['name']}} {{$omino['lastname']}}
           </a>
        </li>
       </ul>
    @endforeach
  </div>
@endsection
