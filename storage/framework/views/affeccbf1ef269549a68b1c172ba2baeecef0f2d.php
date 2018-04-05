<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="<?php echo e(url('/order/create')); ?>" class="btn btn-primary btn-sm">Add Order <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Cutomer Name</th>
              <th>Item Name</th>
              <th>Seller</th>
              <th>Courier</th>
              <th>Status</th>
              <?php /* <th>Action</th> */ ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach($orders as $order): ?>
            <tr>
              <td><?php echo e($no++); ?></td>
              <td><?php echo e($order->name); ?></td>
              <td><?php echo e($order->item_name); ?></td>
              <td><?php echo e($order->seller_name); ?></td>
              <td><?php echo e($order->courier_name); ?></td>
              <td>
                  <?php 
                    if($order->status == 'Delivery'){
                      echo "<div class='btn btn-success'>";
                      echo $order->status;
                      echo "</div>";
                    }else{
                      echo "<div class='btn btn-warning'>";
                      echo $order->status;
                      echo "</div>";
                    }
                  ?>
              </td>
              <?php /* <td><?php echo e($order->price); ?></td> */ ?> 
              <?php /* <td>
                <a href="<?php echo e(route('item.edit', $item)); ?>" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="<?php echo e(route('item.destroy',$item)); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td> */ ?>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>