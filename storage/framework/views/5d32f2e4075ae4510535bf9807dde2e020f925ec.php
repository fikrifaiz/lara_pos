<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Order</div>
          <div class="panel-body">
            <form action="<?php echo e(url('/order/create')); ?>" method="post">
              <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <label for="">Customer Name</label>
                  <select name="customer_id" id="" class="form-control">
                    <?php foreach($customers as $c): ?>
                    <option value="<?=$c->id?>"><?=$c->name?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Item Name</label>
                  <select name="item_id" id="" class="form-control">
                    <?php foreach($items as $i): ?>
                    <option value="<?=$i->id?>"><?=$i->item_name?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Seller Name</label>
                  <select name="seller_id" id="" class="form-control">
                    <?php foreach($sellers as $s): ?>
                    <option value="<?=$s->id?>"><?=$s->seller_name?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Courier Name</label>
                    <select name="courier_id" id="" class="form-control">
                      <?php foreach($couriers as $courier): ?>
                      <option value="<?=$courier->id?>"><?=$courier->courier_name?></option>
                      <?php endforeach; ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>