<?php $__env->startSection('content'); ?>
<!-- 
<?php echo e($ave = App\Review::select('product_id', DB::raw('avg(score) as avg_score'))
        ->where('product_id', $product->id)
        ->groupBy('product_id')
        ->first()); ?>

        
<?php echo e($reviews = App\Review::where('product_id', $product->id)->get()); ?>


<?php echo e($users = App\User::select('id as user_id', 'name as user_name')->get()); ?>


-->
<div class="content">
    <div class="title m-b-md">
        <h1><?php echo e($product->name); ?></h1>
    </div>
    <div style="background-color:lightblue">
        <small>Release Date <?php echo e($product->release); ?></small>
        <h3>Price: <?php echo e($product->price); ?></h3>
        <h3>Developer: <?php echo e($product->developer_id); ?></h3>
        <h3>Publisher: <?php echo e($product->publisher_id); ?></h3>
        <p>Description: <?php echo e($product->description); ?></p>
        <h3>Score: <?php echo e($ave->avg_score); ?></h3>
    </div> 
    <div style="background-color:lightred">
        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <h3><?php echo e($user = App\User::where('id', $review->user_id)->value('name')); ?></h3>
            <h3><?php echo e($review->score); ?></h3>
            <p><?php echo e($review->comment); ?></p>
        </div>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <hr>
    <?php if(auth()->guard()->check()): ?>
    <?php echo Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('score', 'score')); ?>

            <?php echo e(Form::number('score', '', ['class' => 'form-control', 'placeholder' => 'score', 'min'=>1, 'max'=>10])); ?>

        </div>
        <!-- temporary -->
        <?php echo e(Form::hidden('product_id', $product->id)); ?>

        
        <div class="form-group">
            <?php echo e(Form::label('comment', 'comment')); ?>

            <?php echo e(Form::textarea('comment', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Please describe what you liked or disliked about this product and wheter you recommend it to others'])); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>    
    <?php endif; ?>

    <a href="/nilaigame2/public/products/<?php echo e($product->id); ?>/edit" class="btn btn-primary">Edit</a>
    
    <?php echo Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nilaigame2\resources\views/products/show.blade.php ENDPATH**/ ?>