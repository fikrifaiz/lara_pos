<?php $__env->startSection('content'); ?>;
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Couriers</div>
      <div class="panel-body">
        <form action="<?php echo e(route('courier.update',$courier)); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <?php echo e(method_field('PATCH')); ?>

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="courier_name" class="form-control" placeholder="Enter Your Name" value="<?=$courier->courier_name?>">
          </div>
          <div class="form-group">
            <label for="">Status</label>
            <select name="status" id="" class="form-control">
              <option value="Delivery"<?php if($courier->status == 'Delivery'){echo 'selected';}?>>Delivery</option>
              <option value="Pending"<?php if($courier->status == 'Pending'){echo 'selected';}?>>Pending</option>
            </select>
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