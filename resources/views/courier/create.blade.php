@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create Couriers</div>
          <div class="panel-body">
            <form action="{{ url('/courier/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="courier_name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label for="">Status</label>
                  <select name="status" id="" class="form-control">
                    <option value="Delivery">Delivery</option>
                    <option value="Pending">Pending</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()