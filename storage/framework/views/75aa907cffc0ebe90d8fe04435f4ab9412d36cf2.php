<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="<?php echo e(url('/customer/create')); ?>" class="btn btn-primary btn-sm">Add Customer <i class="fa fa-plus"></i></a>
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
            <?php foreach($customers as $customer): ?>
            <tr>
              <td><?php echo e($no++); ?></td>
              <td><?php echo e($customer->name); ?></td>
              <td><?php echo e($customer->phone); ?></td>
              <td><?php echo e($customer->address); ?></td>
              <td>
                <a href="<?php echo e(route('customer.edit', $customer)); ?>" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="<?php echo e(route('customer.destroy',$customer)); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>