@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Seller</div>
      <div class="panel-body">
        <form action="{{ route('seller.update',$seller) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="seller_name" class="form-control" placeholder="Enter Your Name" value="<?=$seller->seller_name?>">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" value="<?=$seller->email?>">
          </div>
          <div class="form-group">
            <label for="">phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone Number" value="<?=$seller->phone?>">
          </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();