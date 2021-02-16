<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
class SchoolController extends Controller
{
    //
    public function create()
    {
        return view('schoolcreate');
    }
    public function store(Request $request)
    {
        $school=new School();
        $school->name = $request->get('name');
        $school->location = $request->get('location');
        $school->save();
        return redirect('school')->with('success', 'school has been successfully added');
    }
    public function index()
    {
        $schools=School::all();
        return view('schoolindex',compact('schools'));
    }
    public function edit($id)
    {
        $school = School::find($id);
        return view('schooledit',compact('school','id'));
    }
    public function update(Request $request, $id)
    {
        $school= School::find($id);
        $school->name = $request->get('name');
        $school->location = $request->get('location');
        $school->save();
        return redirect('school')->with('success', 'school has been successfully updated');
    }
    public function destroy($id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect('school')->with('success','school has been  deleted');
    }
}
