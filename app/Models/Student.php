<?php

namespace App\Models;

class Student{

    public $ref_id ;
    public $id;
    public  $name;

    public function __construct($FirebaseArray){
        foreach ($FirebaseArray as $key => $value){
            $this->ref_id = $key;
            $this->name = $value['name'];
            $this->id = $value['id'];
        }
    }
    public function update($id,$name){

    }
}
