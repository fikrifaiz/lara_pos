@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/order/create') }}" class="btn btn-primary btn-sm">Add Order <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Cutomer Name</th>
              <th>Item Name</th>
              <th>Seller</th>
              <th>Courier</th>
              <th>Status</th>
              {{-- <th>Action</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $order->name }}</td>
              <td>{{ $order->item_name }}</td>
              <td>{{ $order->seller_name }}</td>
              <td>{{ $order->courier_name }}</td>
              <td>
                  <?php 
                    if($order->status == 'Delivery'){
                      echo "<div class='btn btn-success'>";
                      echo $order->status;
                      echo "</div>";
                    }else{
                      echo "<div class='btn btn-warning'>";
                      echo $order->status;
                      echo "</div>";
                    }
                  ?>
              </td>
              {{-- <td>{{ $order->price }}</td> --}} 
              {{-- <td>
                <a href="{{ route('item.edit', $item) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('item.destroy',$item) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td> --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()