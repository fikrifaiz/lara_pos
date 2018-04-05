@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/seller/create') }}" class="btn btn-primary btn-sm">Add Seller <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phobe</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($sellers as $seller)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $seller->seller_name }}</td>
              <td>{{ $seller->email }}</td>
              <td>{{ $seller->phone }}</td>
              <td>
                <a href="{{ route('seller.edit', $seller) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('seller.destroy',$seller) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;" onclick=return Confirm('Anda Yakin Akan ??')>Delete</button>
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