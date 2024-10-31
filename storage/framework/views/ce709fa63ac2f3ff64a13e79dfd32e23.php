<?php $__env->startSection('main'); ?>
<div class="cls_signin">
  <div class="container">
    <div class="col-lg-12">
      <h2 class="title"><?php echo e(trans('messages.header.signin')); ?></h2>
       <?php if(Auth::user()==null): ?>
      <div class="col-lg-4">
        <div class="cls_signintext">
          <h4 ><?php echo e(trans('messages.profile.driver')); ?></h4>
          <p ><?php echo e(trans('messages.profile.track_every')); ?></p>
          <a href="<?php echo e(url('signin_driver')); ?>"><?php echo e(trans('messages.profile.driver_signin')); ?> <img src="images/new/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="cls_signintext">
          <h4 ><?php echo e(trans('messages.profile.rider')); ?></h4>
          <p ><?php echo e(trans('messages.profile.trip_history')); ?></p>
          <a href="<?php echo e(url('signin_rider')); ?>"><?php echo e(trans('messages.profile.rider_signin')); ?> <img src="images/new/arrow-right.svg" alt="arrow">
          </a>
        </div>
      </div>  
       <?php endif; ?>
        <?php if(Auth::guard('company')->user()==null): ?>
         <div class="col-lg-4">
            <div class="cls_signintext">
              <h4 ><?php echo e(trans('messages.home.company')); ?></h4>
              <p ><?php echo e(trans('messages.home.company_history')); ?></p>
              <a href="<?php echo e(url('signin_company')); ?>"><?php echo e(trans('messages.home.company_signin')); ?> <img src="images/new/arrow-right.svg" alt="arrow">
              </a>
            </div>
          </div>  
       <?php endif; ?>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templatesign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mahen\OneDrive\Desktop\JEYIT SOLUTIONS\Laravel Projects\EasyGo\Project_Files\resources\views/user/signin.blade.php ENDPATH**/ ?>