<!--ket thua tep co ten la app.balde.php trong thu muc layout-->

<?php $__env->startSection('title','Welcome Page'); ?>
<?php $__env->startSection('content'); ?>
<h3 class="text-center text-success my-3">Danh sách tác giả</h3>
<div class="container mt-3">
        <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-success">Add New Author</a>
</div>
<table class="table col-10 ms-5 mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Author Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>     
    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($author->id); ?></td>
        <td><?php echo e($author->name); ?></td>
        <td><a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="btn btn-primary">Edit</a></td>
        <td>
          <i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo e($author->id); ?>"></i>
          <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo e($author->id); ?>">Delete</button> -->
        </td>  
      </tr>   
      <!-- Modal -->
      <div class="modal fade" id="deleteModal-<?php echo e($author->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this author?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bsdismiss="modal">Close</button>
              <form action="<?php echo e(route('authors.destroy', $author->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CN Web\ThucHanh\laravel-crud\resources\views/authors/index.blade.php ENDPATH**/ ?>