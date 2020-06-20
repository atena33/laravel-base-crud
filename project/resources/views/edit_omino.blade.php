@extends('layouts.general_layout')

@section('content')

    <div class="main">

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{route('update', $omino['id'])}}" method="post">
        @csrf
        @method('POST')

        <label for="name">NAME</label>
        <input type="text" name="name" value="{{$omino['name']}}">
        <br>
        <label for="lastname">LASTNAME</label>
        <input type="text" name="lastname" value="{{$omino['lastname']}}">
        <br>
        <label for="address">ADDRESS</label>
        <input type="text" name="address" value=" {{$omino['address']}}">
        <br>
        <label for="zip">ZIP</label>
        <input type="text" name="zip" value="{{$omino['zip']}}">
        <br>
        <label for="state">STATE</label>
        <input type="text" name="state" value="{{$omino['state']}}">
        <br>
        <label for="phone_number">PHONE NUMBER</label>
        <input type="text" name="phone_number" value="{{$omino['phone_number']}}">
        <br>
        <label for="role">ROLE</label>
        <input type="text" name="role" value="{{$omino['role']}}">
        <br>
        <input type="submit" name="submit" value="UPDATE">
      </form>
    </div>
@endsection
