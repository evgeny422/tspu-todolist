<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('task.store', ['project_id' => $project_id])); ?>" method="POST">
        <?php echo e(csrf_field()); ?>


        <input type="hidden" name="project_id" value="<?php echo e($project_id); ?>">

        <div class="form-group row">
            <label for="name" class="col-sm-1-12 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group row mt-2">
            <div class="col-sm-3">
                <label for="date" class="col-sm-1-12 col-form-label">Date start</label>
                <input type="date" class="form-control" name="date_start" placeholder="Date start">
            </div>
            <div class="col-sm-3">
                <label for="date" class="col-sm-1-12 col-form-label">Date end</label>
                <input type="date" class="form-control" name="date_end" placeholder="Date end">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="detail">Detail</label>
            <div class="col-sm-6">
                <textarea name="description" id="detail" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row mt-2">
            <label for="labels">Tags</label>

            <div class="col-sm-6">
                <select name="labels[]" id="labels" multiple class="form-control">
                    <?php $__currentLoopData = $project->labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($label->id); ?>"><?php echo e($label->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

        </div>

        <div class="form-group row mt-2">
            <label for="authors">Executor</label>
            <div class="col-sm-6">
                <select name="users[]" id="executor" multiple class="form-control">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group mt-5 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LaravellProjects\todo\resources\views/task/create.blade.php ENDPATH**/ ?>