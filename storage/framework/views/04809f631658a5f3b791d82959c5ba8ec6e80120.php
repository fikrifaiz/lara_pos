<?php $__env->startSection('content'); ?>;
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Items</div>
      <div class="panel-body">
        <form action="<?php echo e(route('item.update',$item)); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <?php echo e(method_field('PATCH')); ?>

          <div class="form-group">
            <label for="">Item Name</label>
            <input type="text" name="item_name" class="form-control" placeholder="Enter Your Item Name" value="<?=$item->item_name?>">
          </div>
          <div class="form-group">
              <label for="">Price</label>
              <input type="text" name="price" class="form-control" placeholder="Enter Your Price" value="<?=$item->price?>">
            </div>
          <div class="form-group">
            <label for="">Quantity</label>
            <input type="text" name="qty" class="form-control" placeholder="Enter Your Quantity" value="<?=$item->qty?>">
          </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>