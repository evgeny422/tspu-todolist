<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Project</th>
        <th>Date range</th>
        <th>Executors</th>
        <th>Tags</th>
        <th>Created at</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($task->id); ?></td>
            <td><?php echo e($task->name); ?></td>
            <td><?php echo e($task->project->name); ?></td>
            <td><?php echo e($task->date_start); ?> - <?php echo e($task->date_end); ?></td>
            <td>
                <?php $__currentLoopData = $task->executor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $executor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('users.show', ['user'=> $executor->id])); ?>" class="badge bg-success">
                        <?php echo e($executor->name); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td>
                <?php $__currentLoopData = $task->labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($label->name); ?>,
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td><?php echo e($task->created_at); ?></td>
            <td>
                <a class="btn btn-sm btn-outline-primary"
                   href="<?php echo e(route('task.show', ['project_id'=> $task->project->id, 'task'=> $task->id])); ?>">Show</a>

                <form method="post" action="<?php echo e(route('task.done', ['project_id'=> $task->project->id, 'task'=> $task->id])); ?>" class="d-inline-block">
                    <?php echo csrf_field(); ?>

                    <button class="btn btn-sm btn-outline-success" type="submit">Done</button>
                </form>


                <form action="<?php echo e(route('task.destroy', ['project_id'=> $task->project->id,'task'=> $task->id])); ?>"
                      method="post" class="d-inline-block">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="delete">



                    <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH D:\LaravellProjects\todo\resources\views/task/table.blade.php ENDPATH**/ ?>