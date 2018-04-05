<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Seller;

class SellerController extends Controller
{
    public function index(){
        $sellers = Seller::All();
        $data = array(
            'title'   => 'point of sale',
            'sellers' => $sellers,
            'no'        => 1
        );
        return view('seller.index',$data);
    }
    public function create(){
        $data = array('title'   => 'point of sale');
        return view('seller.create',$data);
    }
    public function store(){
        Seller::create([
            'seller_name'  => request('seller_name'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);
        return redirect('/seller');
    }
    public function edit(Seller $seller){
     
        $data = array(
            'title' => 'edit data',
            'seller'=> $seller
        );
        return view('seller.edit',$data);
    }
    public function update(Seller $seller)
    {   
        $seller->update([
            'seller_name'      => request('seller_name'),
            'email'     => request('email'),
            'phone'     => request('phone'),
        ]);
        return redirect('/seller');
    }
    public function destroy(Seller $seller){
        $seller->delete();
        return redirect()->route('seller.index');
    }
}
