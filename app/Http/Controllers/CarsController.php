<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class CarsController extends Controller
{
    //
    public function create()
    {
        return view('carcreate');
    }
    public function store(Request $request)
    {
        $car=new Car();
        $car->make = $request->get('make');
        $car->model = $request->get('model');
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully added');
    }
    public function index()
    {
        $cars=Car::all();
        return view('carindex',compact('cars'));
    }
    public function edit($id)
    {
        $car = Car::find($id);
        return view('caredit',compact('car','id'));
    }
    public function update(Request $request, $id)
    {
        $car= Car::find($id);
        $car->make = $request->get('make');
        $car->model = $request->get('model');
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully updated');
    }
    public function destroy($id)
    {
        $animal = Car::find($id);
        $animal->delete();
        return redirect('car')->with('success','Car has been  deleted');
    }

}
