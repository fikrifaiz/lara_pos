<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Courier;

class CourierController extends Controller
{
    public function index(){
        $couriers = Courier::All();
        $data = array(
            'title'     => 'point of sale',
            'couriers'  => $couriers,
            'no'        => 1
        );
        return view('courier.index',$data);
    }
    public function create(){
        $data = array('title'   => 'point of sale');
        return view('courier.create',$data);
    }
    public function store(){
        Courier::create([
            'courier_name'      => request('courier_name'),
            'status'    => request('status'),
        ]);
        return redirect('/courier');
    }
    public function edit(Courier $courier){
        $data = array(
            'title'   => 'edit data',
            'courier' => $courier
        );
        return view('courier.edit',$data);
    }
    public function update(Courier $courier)
    {   
        $courier->update([
            'courier_name'      => request('courier_name'),
            'status'     => request('status')
        ]);
        return redirect('/courier');
    }
    public function destroy(Courier $courier){
        $courier->delete();
        return redirect()->route('courier.index');
    }
}
