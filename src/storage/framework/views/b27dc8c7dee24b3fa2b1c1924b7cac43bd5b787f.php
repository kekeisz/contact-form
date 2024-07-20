<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/thanks.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>お問い合わせありがとうございます</h2>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/thanks.blade.php ENDPATH**/ ?>