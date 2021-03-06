<?php $__env->startSection('content'); ?>;
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Customer</div>
      <div class="panel-body">
        <form action="<?php echo e(route('customer.update',$customer)); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <?php echo e(method_field('PATCH')); ?>

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?=$customer->name?>">
          </div>
          <div class="form-group">
            <label for="">phone</label>
            <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone Number" value="<?=$customer->phone?>">
          </div>
          <div class="form-group">
            <label for="">address</label>
            <textarea name="address" id="" cols="5" class="form-control" placeholder="Enter Your Address"><?=$customer->address?></textarea>
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