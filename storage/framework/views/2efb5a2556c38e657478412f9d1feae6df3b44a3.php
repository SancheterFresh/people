<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

<div class="row no-gutters">
<?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 d-sm-flex d-md-flex d-lg-flex p-3">
<div class="card small">
  <div class="card-body">
   
   <h5 ><img src="<?php echo e($person->imgpath); ?>" class="rounded-circle" align="left"><?php echo e($person->fullname); ?></h5>

  <p><a class="btn btn-outline-primary" href="<?php echo e(route('showPerson', ['id'=>$person->id])); ?>">Подробнее</a></p>
  </div>
</div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/alexking/people/resources/views/people/index.blade.php ENDPATH**/ ?>