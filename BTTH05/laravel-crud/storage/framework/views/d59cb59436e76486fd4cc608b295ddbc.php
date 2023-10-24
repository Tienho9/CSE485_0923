<?php $__env->startSection('title','Welcome Page'); ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success my-3">Sửa Tác Giả</h3>
<form action="<?php echo e(route('authors.update', $author->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" name="id" class="form-control" value="<?php echo e($author->id); ?>" readonly>
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($author->name); ?>" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
 </form>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CN Web\ThucHanh\laravel-crud\resources\views/authors/edit.blade.php ENDPATH**/ ?>