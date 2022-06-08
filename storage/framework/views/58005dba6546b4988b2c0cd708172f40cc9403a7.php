<?php $__env->startSection('content'); ?>

    <div>
        <a href="<?php echo e(route('task.create', ['project_id'=>$project->id])); ?>" class="btn btn-sm btn-primary">Create</a>
    </div>

    <?php echo $__env->make('task.table', ['tasks' => $tasks], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/task/index.blade.php ENDPATH**/ ?>