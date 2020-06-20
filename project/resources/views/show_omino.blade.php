@extends('layouts.general_layout')

@section('content')
  @if (session('success'))
    <h1>{{session('success')}}</h1>
  @endif
    <ul>
      <li>
        NAME : {{$omino['name']}}
      </li>
      <li>
        LASTNAME : {{$omino['lastname']}}
      </li>
      <li>
        ADDRESS : {{$omino['address']}}
      </li>
      <li>
        ZIP : {{$omino['zip']}}
      </li>
      <li>
        STATE : {{$omino['state']}}
      </li>
      <li>
        PHONE NUMBER: {{$omino['phone_number']}}
      </li>
      <li>
        ROLE : {{$omino['role']}}
      </li>
    </ul>
    <a href="{{route('edit', $omino['id'])}}">EDIT</a>
    <br>
    <a href="{{route('delete', $omino['id'])}}">DELETE</a>
@endsection
