<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="title m-b-md">
        <h1>Products</h1>
    </div>
    <hr>
    <?php if(count($products) > 0): ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
            <h3><a href="/nilaigame2/public/products/<?php echo e($product->id); ?>"><?php echo e($product->name); ?></a></h3>
            <small>Released on <?php echo e($product->release); ?></small>
            <h3>Score: <?php echo e($product->avg_score); ?></h3>
            </div>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($products->links()); ?>

    <?php else: ?> 
        <p>No Products found</p>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nilaigame2\resources\views/products/index.blade.php ENDPATH**/ ?>