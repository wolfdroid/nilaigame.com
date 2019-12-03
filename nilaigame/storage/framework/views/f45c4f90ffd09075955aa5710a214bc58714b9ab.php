<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="title m-b-md">
        Post Product
    </div>
    <?php echo Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name', 'Product Name')); ?>

            <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Product Name'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('price', 'Price')); ?>

            <?php echo e(Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Price'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('developer_id', 'Developer ID')); ?>

            <?php echo e(Form::number('developer_id', '', ['class' => 'form-control', 'placeholder' => 'Developer ID'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('publisher_id', 'Publisherr ID')); ?>

            <?php echo e(Form::number('publisher_id', '', ['class' => 'form-control', 'placeholder' => 'Publisher ID'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('release', 'Release Date')); ?>

            <?php echo e(Form::date('release', '', ['class' => 'form-control', 'placeholder' => 'Release Date'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description', 'Description')); ?>

            <?php echo e(Form::textarea('description', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nilaigame2\resources\views/products/create.blade.php ENDPATH**/ ?>