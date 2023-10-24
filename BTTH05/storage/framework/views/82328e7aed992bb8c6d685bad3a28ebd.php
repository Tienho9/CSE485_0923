<?php $__env->startSection('title','Welcome Page'); ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success my-3">Thêm Tác Giả</h3>

<form action="<?php echo e(route('authors.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control">
    </div>
    
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="form-group mt-3">
        <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-warning text-white">Back</a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CN Web\ThucHanh\laravel-crud\resources\views/authors/create.blade.php ENDPATH**/ ?>