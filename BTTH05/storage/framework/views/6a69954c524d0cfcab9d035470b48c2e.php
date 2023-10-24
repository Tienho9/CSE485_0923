<?php $__env->startSection('title','Welcome Page'); ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success my-3">Sửa Sách</h3>
<form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" name="id" class="form-control" value="<?php echo e($book->id); ?>" readonly>
    </div>
    <div class="form-group">
        <label for="author_id">Author_id:</label>
        <input type="text" name="author_id" class="form-control" value="<?php echo e($book->author_id); ?>" required>
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <textarea name="title" class="form-control" required><?php echo e($book->title); ?></textarea>
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    <div class="form-group mt-3 d-flex">
        <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-warning text-white">Back</a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CN Web\ThucHanh\laravel-crud\resources\views/books/edit.blade.php ENDPATH**/ ?>