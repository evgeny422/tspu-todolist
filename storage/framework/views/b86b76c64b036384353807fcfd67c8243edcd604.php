<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Task: <strong><?php echo e($task->name); ?></strong></h1>
    </div>
    <div class="main-content">
        <div class="col-8">
            <div>
                <p>
                    <strong>Range Date</strong>: <span
                            class="badge bg-danger"><?php echo e($task->date_start); ?> - <?php echo e($task->date_end); ?></span>
                </p>
            </div>
            <div>
                <p>
                    <strong>Executors</strong>:
                    <?php $__currentLoopData = $task->executor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $executor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('users.show', ['user'=> $executor->id])); ?>" class="badge bg-success">
                            <?php echo e($executor->name); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
            </div>
            <div>
                <p><strong>Description</strong>:</p>
                <p>
                   <?php echo e($task->description); ?>

                </p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/task/show.blade.php ENDPATH**/ ?>