<link rel="shortcut icon" href="<?php echo e($favicon); ?>">

<?php $__env->startSection('main'); ?>
<div id="app-wrapper" class="sigin-riders" ng-controller="user">
   <div class="stage-wrapper narrow portable-one-whole forward" id="app-body" data-reactid="10">
      <div class="soft-tiny clearfix" data-reactid="11">
         <div data-reactid="12">
            <form class="push--top-small forward" method="POST" data-reactid="13">
               <input type="hidden" name="user_type" value="Rider" id="user_type">
               <div data-reactid="15" class="email_phone-sec">
                  <h4 data-reactid="14"><?php echo e(trans('messages.header.signin')); ?></h4>
                  <div style="-moz-box-sizing:border-box;font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:12px;line-height:24px;text-align:none;color:#939393;box-sizing:border-box;margin-bottom:0;margin-top:0;" data-reactid="16"></div>
                  <div style="width:100%;" data-reactid="17">
                     <div style="font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:14px;line-height:24px;text-align:none;color:#3e3e3e;box-sizing:border-box;margin-bottom:24px;" data-reactid="19">
                        <div class="_style_CZTQ8 input-group" data-reactid="20">
                           <select name="country_code" tabindex="-1" id="phone_country" class="text-select input-group-addon" data-reactid="21">
                             <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($value->phone_code); ?>" data-value="+<?php echo e($value->phone_code); ?>" data-id="<?php echo e($value->id); ?>" <?php echo e((canDisplayCredentials() && $value->id==227) ?' selected':''); ?>><?php echo e($value->long_name); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php echo Form::hidden('country_id', old('country_id'), array('id'=>'country_id')); ?>

                          </select> 
                           <input class="text-phone input-group-addon" id="email_phone" placeholder="<?php echo e(trans('messages.user.email_mobile')); ?>" autocorrect="off" autocapitalize="off" name="textInputValue" data-reactid="21" type="text" value="<?php echo e(canDisplayCredentials() ? '98765432106':''); ?>" ng-init="invalid_email= '<?php echo e(trans('messages.user.email_mobile')); ?>';" >
                        </div>
                        <span class="text-danger email-error"></span>
                     </div>
                  </div>
               </div>
               <h3 class="email_or_phone password-sec hide text-center" style="margin-top: 0px;margin-bottom: 20px;"></h3>
               <div data-reactid="15" class="password-sec hide">
                  <div style="-moz-box-sizing:border-box;font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:12px;line-height:24px;text-align:none;color:#939393;box-sizing:border-box;margin-bottom:0;margin-top:0;" data-reactid="16"></div>
                  <div style="width:100%;" data-reactid="17">
                     <div style="font-family:ff-clan-web-pro, &quot;Helvetica Neue&quot;, Helvetica, sans-serif;font-weight:500;font-size:14px;line-height:24px;text-align:none;color:#3e3e3e;box-sizing:border-box;margin-bottom:24px;" data-reactid="19">
                        <div class="_style_CZTQ8" data-reactid="20">
                           <input class="text-input input-group-addon password_btn" id="password" placeholder="<?php echo e(trans('messages.user.paswrd')); ?>" autocorrect="off" autocapitalize="off" name="password" data-reactid="21" type="password" value="<?php echo e(canDisplayCredentials() ? '123456':''); ?>">
                        </div>
                        <span class="text-danger email-error"></span>
                     </div>
                  </div>
               </div>
               <button class="btn btn--arrow btn--full blue-signin-btn singin_rider email_phone-sec-1" data-reactid="22" data-type='email'><span class="push-small--right" data-reactid="23"><?php echo e(trans('messages.user.next')); ?></span><i class="fa fa-long-arrow-right icon icon_right-arrow-thin"></i></button>
            </form>
         </div>
         <div class="small push-small--bottom push-small--top" id="sign-up-link-only" data-reactid="26">
            <p class=" display--inline email_phone-sec" data-reactid="27"><?php echo e(trans('messages.user.no_account')); ?><a href="<?php echo e(url('signup_rider')); ?>"><?php echo e(trans('messages.home.siginup')); ?></a></p>
            <p class="pull-right forgot password-sec hide">
               <a href="<?php echo e(url('forgot_password_rider')); ?>" class="forgot-password"><?php echo e(trans('messages.user.forgot_paswrd')); ?></a>
            </p>
         </div>
         <?php
         $social_logins = site_settings('social_logins');
         $social_logins = explode(',',$social_logins);
         ?>
         <?php if(count(array_filter($social_logins))>0): ?>
         <div data-reactid="28" class="email_phone-sec social-login">
            <h5 class="push-small--top or-text" data-reactid="29">
               <?php echo app('translator')->get('messages.home.or'); ?>
            </h5>

            <?php if(in_array('apple',$social_logins)): ?>
            <a href="<?php echo e(getAppleLoginUrl()); ?>" id="apple_login" class="col-md-offset-1 btn btn--arrow push-small--bottom black-btn">
               <i class="fa fa-apple push-half--right"></i>
               <span> <?php echo app('translator')->get('messages.user.continue_with_apple'); ?> </span>
               <i class="fa fa-long-arrow-right icon icon_right-arrow-thin google-ride"></i>
            </a>
            <?php endif; ?>

            <?php if(in_array('facebook',$social_logins)): ?>
            <a href="<?php echo e(url('facebook_login')); ?>" class="btn btn--arrow push-small--bottom violet-btn btn-facebook" style="background-color: rgb(59, 89, 152); border-color: rgb(246 201 47);">
               <i class="fa fa-facebook push-half--right"></i>
               <span class="push-small--right"><?php echo app('translator')->get('messages.user.continue_with'); ?></span> <i class="fa fa-long-arrow-right icon icon_right-arrow-thin facebook-ride"></i>
            </a>
            <?php endif; ?>

            <?php if(in_array('google',$social_logins)): ?>
            <a href="javascript:;" id="google_login" class="col-md-offset-1 google_login g-signin2 btn btn--arrow push-small--bottom white-btn google-btn" style="background: #6e9af7;color: #fff;">
               <i class="fa fa-google push-half--right"></i>
               <span> <?php echo app('translator')->get('messages.user.continue_with_google'); ?> </span>
               <i class="fa fa-long-arrow-right icon icon_right-arrow-thin google-ride"></i>
            </a>
            <?php endif; ?>

         </div>
         <?php endif; ?>
      </div>
   </div>
</div>
</main>
<style>

   .funnel
   {
      height: 0px !important;
   }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templatesign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mahen\OneDrive\Desktop\JEYIT SOLUTIONS\Laravel Projects\EasyGo\Project_Files\resources\views/user/signin_rider.blade.php ENDPATH**/ ?>