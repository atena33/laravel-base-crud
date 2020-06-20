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

      <form action="{{route('store')}}" method="post">
        @csrf
        @method('POST')

        <label for="name">NAME</label>
        <input type="text" name="name" value="">
        <br>
        <label for="lastname">LASTNAME</label>
        <input type="text" name="lastname" value="">
        <br>
        <label for="address">ADDRESS</label>
        <input type="text" name="address" value=" ">
        <br>
        <label for="zip">ZIP</label>
        <input type="text" name="zip" value="">
        <br>
        <label for="state">STATE</label>
        <input type="text" name="state" value="">
        <br>
        <label for="phone_number">PHONE NUMBER</label>
        <input type="text" name="phone_number" value="">
        <br>
        <label for="role">ROLE</label>
        <input type="text" name="role" value="">
        <br>
        <input type="submit" name="submit" value="CREATE">
      </form>
    </div>
@endsection
