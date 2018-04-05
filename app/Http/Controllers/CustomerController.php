<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::All();
        $data = array(
            'title'   => 'point of sale',
            'customers' => $customers,
            'no'        => 1
        );
        return view('customer.index',$data);
    }
    public function create(){
        $data = array('title'   => 'point of sale');
        return view('customer.create',$data);
    }
    public function store(){
        Customer::create([
            'name'      => request('name'),
            'phone'     => request('phone'),
            'address'   => request('address'),
        ]);
        return redirect('/customer');
    }
    public function edit(Customer $customer){
        // $post = Post::find($id);
        // $categories = category::All();
        $data = array(
            'title'         => 'edit data',
            'customer'          => $customer
            // 'categories'    => $categories
        );
        return view('customer.edit',$data);
    }
    public function update(Customer $customer)
    {   
        // $post = Post::find($id);
        $customer->update([
            'name'      => request('name'),
            'phone'     => request('phone'),
            'address'   => request('address')
        ]);
        // dd($customer);
        return redirect('/customer');
    }
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customer.index');
    }
}