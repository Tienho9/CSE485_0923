<?php $__env->startSection('title','Welcome Page'); ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success my-3">Thêm sách</h3>
<form action="<?php echo e(route('books.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="author_id">Author_id:</label>
        <input type="text" name="author_id" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <textarea name="title" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CN Web\ThucHanh\laravel-crud\resources\views/books/create.blade.php ENDPATH**/ ?>