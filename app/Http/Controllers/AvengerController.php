<?php

namespace App\Http\Controllers;
use App\Models\avenger;
use Illuminate\Http\Request;

class AvengerController extends Controller
{
    function getData(){
        $data = avenger::all();
        return view('list', ['datas' => $data]);
    }
    function showData($id){
        $data = avenger::find($id);
        return view('show',  ['data' => $data]);
    }
    function addData(Request $data){
        $error = array();
        if( empty($data->name) ||
            empty($data->knownAs) ||
            empty($data->ability) ||
            empty($data->uses) ||
            empty($data->villain) || 
            empty($data->gender) )
        {
            $error['empty'] = 'Please Fill up All the Fields';
        }
        if(count($error) == 0)
        {
            $avngr = new avenger;
            $avngr->name = $data->name;
            $avngr->knownAs = $data->knownAs;
            $avngr->ability = $data->ability;
            $avngr->uses = $data->uses;
            $avngr->villain = $data->villain;
            $avngr->gender = $data->gender;
            if($data->hasFile('image')){
                $file = $data->file('image');
                $filename = uniqid(). $file->getClientOriginalName();
                $file->move('uploads/images', $filename);
                $avngr->image = $filename;
            }
            $avngr->save();
            return redirect('/');
        }else{
            return view('add', ['error' => $error, 'data' => $data]);
        }

    }
    function deleteData($id){
        $data = avenger::find($id);
        $data->delete();
        return redirect('/');

    }
}