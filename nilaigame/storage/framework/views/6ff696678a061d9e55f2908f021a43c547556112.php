<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="title m-b-md">
        Post Review
    </div>
    <?php echo Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('score', 'score')); ?>

            <?php echo e(Form::number('score', '', ['class' => 'form-control', 'placeholder' => 'score', 'min'=>1, 'max'=>10])); ?>

        </div>
        <!-- temporary  -->
        <div class="form-group">
            <?php echo e(Form::label('product_id', 'product_id')); ?>

            <?php echo e(Form::number('product_id', '', ['class' => 'form-control', 'placeholder' => 'product id'])); ?>

        </div>      
        <div class="form-group">
            <?php echo e(Form::label('comment', 'comment')); ?>

            <?php echo e(Form::textarea('comment', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Please describe what you liked or disliked about this product and wheter you recommend it to others'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nilaigame2\resources\views/reviews/create.blade.php ENDPATH**/ ?>