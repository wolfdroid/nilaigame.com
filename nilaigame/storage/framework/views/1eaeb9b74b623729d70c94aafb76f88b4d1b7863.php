<?php $__env->startSection('content'); ?>


<div class="zoomIn animated">
    <h1 class = "Verdana"> Games dengan Rating Terbaik </h1>
</div>

<!-- 
============================= Carousel -->
<div class="fadeIn animated">
    <section id="slider">
        <input type="radio" name="slider" id="s1" checked>
        <input type="radio" name="slider" id="s2">
        <input type="radio" name="slider" id="s3">
        <input type="radio" name="slider" id="s4">
        <input type="radio" name="slider" id="s5">
    
        <label for="s1" id="slide1">Watch Dogs 2</label>
        <label for="s2" id="slide2">Middle - Earth : </br>Shadow of War</label>
        <label for="s3" id="slide3">Dragons - Dogma : </br>Dark Arisen</label>
        <label for="s4" id="slide4">Dark Souls III</label>
        <label for="s5" id="slide5">Frostpunk</label>
    </section>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nilaigame2\resources\views/pages/index.blade.php ENDPATH**/ ?>