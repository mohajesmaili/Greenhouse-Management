<?php

namespace App\Http\Controllers;

use App\Seed;

use Illuminate\Http\Request;

class SeedController extends Controller{

    public function show_seed(){

        $data["seed"]=Seed::all();

        return view("show_seed",$data);
    }

    public function add_seed2(Request $request){

        $seed=new Seed();

        $seed->name=$request->name;
        $seed->name_en=$request->name_en;
        $seed->number=$request->number;
        $seed->seed_category=$request->seed_category;

        $seed->save();

        return $this->show_seed();
    }

    public function edit_Seed($id){

        $seed=Seed::find($id);

        return view("edit_seed",compact("seed"));

    }

    public function edit_Seed2(Request $request,$id){

        $seed=Seed::find($id);

        $seed->name=$request->name;
        $seed->name_en=$request->name_en;
        $seed->number=$request->number;
        $seed->seed_category=$request->seed_category;

        $seed->save();

        return $this->show_seed();

    }

    public function delete_seed($id){

        Seed::find($id)->delete();

        return $this->show_seed();
    }

}
