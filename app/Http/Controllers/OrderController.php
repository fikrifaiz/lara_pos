<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\Item;
use App\Courier;
use App\Customer;
use App\Seller;
use DB;
class OrderController extends Controller
{
    public function index()
    {
        $orders = order::All();
        $orders = DB::table('orders')
            ->join('items', 'items.id', '=', 'orders.item_id')
            ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->join('sellers', 'sellers.id', '=', 'orders.seller_id')
            ->join('couriers', 'couriers.id', '=', 'orders.courier_id')
            // ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        $data = array(
            'title' => 'index',
            'no'    => 1,
            'orders'  => $orders
        );
        return view('order.index',$data);
    }
    public function create()
    {
        // $orders = Order::All();
        $items      = Item::All();
        $couriers   = Courier::All();
        $customers  = Customer::All();
        $sellers    = Seller::All();
        $data = array(
            'items'     => $items,
            'couriers'  => $couriers,
            'customers' => $customers,
            'sellers'   => $sellers,
        );
        return view('order.create',$data);
    }
    public function store()
    {
     Order::create([
         'item_id'      => request('item_id'),
         'courier_id'   => request('courier_id'),
         'customer_id'  => request('customer_id'),
         'seller_id'    => request('seller_id'),
     ]);
     return redirect('/order');
    }
}
