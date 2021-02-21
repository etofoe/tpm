<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    //

    protected $database;

    public function __construct()
    {
        $this->database = app('firebase.database');

    }

    public function create(){
        return view('studentcreate');
    }

    public function index(){
        $reference = $this->database->getReference('students');
        $snapshot =  $reference->getSnapshot();
        $students = $snapshot->getValue();
//        print_r($students);
        return view('studentindex')->with('students',$students);
//        $new_post = $this->database->getReference('users')->set(["title" => "something"]);
//        print_r( $new_post->getSnapshot());
    }

    public function store(Request $request){
        $student = $this->database
            ->getReference('students')
            ->push([
                "name" => $request->name,
                "id"   => $request->id
            ]);
        return redirect('student')->with('success', 'Car has been successfully added');
    }

    public function edit($id){
        $reference = $this->database->getReference('students');
           $val=$reference->orderByChild('id')->equalTo($id)
            ->getSnapshot()->getValue();
           $student = new Student($val);
           return view('studentedit')->with('student',$student);

//        return view('caredit',compact('car','id'));
    }

    public function update(Request $request){
        $updates = [
            'students/'.$request->ref_id.'/id'=>$request->id,
            'students/'.$request->ref_id.'/name'=>$request->name
        ];
        $reference = $this->database->getReference();
        $val = $reference->push()->getKey();
        $reference->update($updates);
        return redirect('student');
    }

    public function delete(Request $request){
        $reference = $this->database->getReference('students/'.$request->ref_id)->remove();
        return redirect('student');
    }

}
