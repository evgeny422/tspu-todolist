<?php $__env->startSection('content'); ?>

    <div>
        <a href="<?php echo e(route('label.create', ['project_id'=> $project->id])); ?>" class="btn btn-primary">Create</a>
    </div>


    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $project->labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($label->id); ?></td>
                <td><?php echo e($label->name); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/label/index.blade.php ENDPATH**/ ?>