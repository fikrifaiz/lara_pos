<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
class ItemController extends Controller
{
    public function index(){
        $items = Item::All();
        $data = array(
            'title' => 'point of sale',
            'items' => $items,
            'no'    => 1
        );
        return view('item.index',$data);
    }
    public function create(){
        $data = array('title'   => 'point of sale');
        return view('item.create',$data);
    }
    public function store(){
        Item::create([
            'item_name'  => request('item_name'),
            'qty'        => request('qty'),
            'price'      => request('price')
        ]);
        return redirect('/item');
    }
    public function edit(Item $item){
        $data = array(
            'title'  => 'edit data',
            'item'   => $item
        );
        return view('item.edit',$data);
    }
    public function update(Item $item)
    {   
        $item->update([
            'item_name' => request('item_name'),
            'qty'       => request('qty'),
            'price'     => request('price')
        ]);
        return redirect('/item');
    }
    public function destroy(Item $item){
        $item->delete();
        return redirect()->route('item.index');
    }
}
