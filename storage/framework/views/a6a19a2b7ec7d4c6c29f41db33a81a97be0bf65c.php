<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="<?php echo e(url('/courier/create')); ?>" class="btn btn-primary btn-sm">Add Couriers <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($couriers as $c): ?>
            <tr>
              <td><?php echo e($no++); ?></td>
              <td><?php echo e($c->courier_name); ?></td>
              <td>
                <?php 
                  if($c->status == 'Delivery'){
                    echo "<div class='btn btn-success'>";
                    echo $c->status;
                    echo "</div>";
                  }else{
                    echo "<div class='btn btn-warning'>";
                    echo $c->status;
                    echo "</div>";
                  }
                ?>
              </td>
              <td>
                <a href="<?php echo e(route('courier.edit', $c)); ?>" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="<?php echo e(route('courier.destroy',$c)); ?>" method="post">
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