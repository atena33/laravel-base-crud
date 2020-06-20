<?php

namespace App\Http\Controllers;
use App\Omino;

use Illuminate\Http\Request;

class OminoController extends Controller
{
  public function index(){

    $omini = Omino::all();

    return view('index', compact('omini'));
  }

  public function show($id){

      $omino = Omino::findOrFail($id);

      return view('show_omino', compact('omino'));
    }

    public function edit($id){

        $omino = Omino::findOrFail($id);

        return view('edit_omino', compact('omino'));
      }

      public function update(Request $request, $id){

          $validateData = $request -> validate([
            'name' => 'required|alpha',
            'lastname' => 'required|alpha',
            'address' => 'required',
            'zip' => 'required',
            'state' => 'required',
            'phone_number' => 'required',
            'role' => 'required'
          ]);

          $omino = Omino::findOrFail($id);

          $omino -> name = $validateData['name'];
          $omino -> lastname = $validateData['lastname'];
          $omino -> address = $validateData['address'];
          $omino -> zip = $validateData['zip'];
          $omino -> state = $validateData['state'];
          $omino -> phone_number = $validateData['phone_number'];
          $omino -> role = $validateData['role'];

          $omino -> save();

          return redirect() ->
            route('show', $id) ->
            withSuccess('Update'
                        . $omino['name'] .
                        $omino['lastname'] .
                        ' was successfull');
      }

      public function delete($id){

        $omino = Omino::findOrFail($id);
        $omino -> delete();

        return redirect() ->
          route('home') ->
          withSuccess('Delete '
                      . $omino['name'] .
                        $omino['lastname'] .
                        ' was successfull');

      }

      public function create() {
        return view ('create_omino');
      }

      public function store(Request $request){

          $validateData = $request -> validate([
            'name' => 'required|alpha',
            'lastname' => 'required|alpha',
            'address' => 'required',
            'zip' => 'required',
            'state' => 'required',
            'phone_number' => 'required',
            'role' => 'required'
          ]);

          $omino = new Omino;

          $omino -> name = $validateData['name'];
          $omino -> lastname = $validateData['lastname'];
          $omino -> address = $validateData['address'];
          $omino -> zip = $validateData['zip'];
          $omino -> state = $validateData['state'];
          $omino -> phone_number = $validateData['phone_number'];
          $omino -> role = $validateData['role'];

          $omino -> save();

          return redirect() ->
            route('home') ->
            withSuccess('Create '
                        . $omino['name'] .
                        $omino['lastname'] .
                        ' was successfull');
      }


}
