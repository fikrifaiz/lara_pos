<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create Seller</div>
          <div class="panel-body">
            <form action="<?php echo e(url('/seller/create')); ?>" method="post">
              <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="seller_name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                  <label for="">Phone</label>
                  <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone Number">
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