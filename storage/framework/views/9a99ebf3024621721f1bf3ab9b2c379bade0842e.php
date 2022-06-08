<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Projects</h2>
    </div>

    <div>
        <a class="btn btn-sm btn-outline-primary" href="<?php echo e(route('project.create')); ?>">Добавить проект</a>
    </div>

    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($project->id); ?></td>
                    <td><?php echo e($project->name); ?></td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary"
                           href="<?php echo e(route('project.show', $project->id)); ?>">Tasks</a>

                        <a href="<?php echo e(route('label.index', ['project_id'=> $project->id])); ?>"
                           class="btn btn-sm btn-outline-secondary">Labels</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/project/index.blade.php ENDPATH**/ ?>