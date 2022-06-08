<?php $__env->startSection('content'); ?>


    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created at</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <span class="badge bg-success">admin</span>
                    </td>
                    <td><?php echo e($user->created_at); ?></td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary" href="../user">Show</a>
                        <button class="btn btn-sm btn-outline-info" type="button">Edit</button>
                        <button class="btn btn-sm btn-outline-danger" type="button">Delete</button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/users.blade.php ENDPATH**/ ?>