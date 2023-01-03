<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <h2>Logo</h2>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user->username); ?></h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153 </strong> posts</div>
                <div class="pr-5"><strong>233 </strong> followers</div>            
                <div class="pr-5"><strong>355 </strong> following</div>            
            </div>
            <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><?php echo e($user->profile->url); ?></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://bi.im-g.pl/im/79/92/17/z24715385IH,Las.jpg">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LarvaInsta/resources/views/home.blade.php ENDPATH**/ ?>