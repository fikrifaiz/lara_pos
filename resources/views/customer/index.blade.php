@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/customer/create') }}" class="btn btn-primary btn-sm">Add Customer <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($customers as $customer)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->phone }}</td>
              <td>{{ $customer->address }}</td>
              <td>
                <a href="{{ route('customer.edit', $customer) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('customer.destroy',$customer) }}" method="post">
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