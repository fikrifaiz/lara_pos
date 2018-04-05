@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Order</div>
          <div class="panel-body">
            <form action="{{ url('/order/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Customer Name</label>
                  <select name="customer_id" id="" class="form-control">
                    @foreach($customers as $c)
                    <option value="<?=$c->id?>"><?=$c->name?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Item Name</label>
                  <select name="item_id" id="" class="form-control">
                    @foreach($items as $i)
                    <option value="<?=$i->id?>"><?=$i->item_name?></option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Seller Name</label>
                  <select name="seller_id" id="" class="form-control">
                    @foreach($sellers as $s)
                    <option value="<?=$s->id?>"><?=$s->seller_name?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Courier Name</label>
                    <select name="courier_id" id="" class="form-control">
                      @foreach($couriers as $courier)
                      <option value="<?=$courier->id?>"><?=$courier->courier_name?></option>
                      @endforeach
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