<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="<?php echo e(asset('images/'.$post->image)); ?>" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <p>
                    <span class="font-weight_bold">
                        <a href="/profile/<?php echo e($post->user->id); ?>">
                            <span class="text-dark"><?php echo e($post->user->username); ?></span>
                        </a>
                    </span> <?php echo e($post->caption); ?>

                </p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LarvaInsta/resources/views/posts/show.blade.php ENDPATH**/ ?>