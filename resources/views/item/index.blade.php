@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/item/create') }}" class="btn btn-primary btn-sm">Add Items <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Item Name</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($items as $item)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $item->item_name }}</td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->qty }}</td>
              <td>
                <a href="{{ route('item.edit', $item) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('item.destroy',$item) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()