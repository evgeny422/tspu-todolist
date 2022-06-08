<?php $__env->startSection('content'); ?>
    <div class="table-responsive">
            <?php echo $__env->make('task.table', ['tasks'=>$tasks], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/dashboard.blade.php ENDPATH**/ ?>