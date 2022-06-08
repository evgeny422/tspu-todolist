<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(route('label.store', ['project_id'=>$project_id])); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group row">
            <label for="name" class="col-sm-1-12 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>

        <input type="hidden" name="project_id" value="<?php echo e($project_id); ?>">

        <div class="form-group mt-5 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/label/create.blade.php ENDPATH**/ ?>