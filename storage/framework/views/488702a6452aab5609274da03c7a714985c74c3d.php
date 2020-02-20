

<?php $__env->startSection('guest'); ?>
  <?php $c_or_e = old('candidate_or_employer', 'candidate');    ?>

    <link href="<?php echo e(asset('tamplate/css/simple-line-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('tamplate/dest/style.css')); ?>" rel="stylesheet">

    <div class="container py-md-5" >
        <div class="row py-md-5">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card-group ">
                    <div class="card p-a-2">
                        <div class="card-block">
                            <h2><?php echo e(__('Login')); ?>   </h2>

                              <form method="POST" id="login_form" action="/login" aria-label="<?php echo e(__('Candidate')); ?>">
                              <div class="form-check text-muted">
   <input class="form-check-input" type="radio" name="candidate_or_employer"
   checked="checked" <?php echo e(($c_or_e == 'candidate')? 'checked="checked"':''); ?>  value="candidate" />&nbsp; &nbsp;&nbsp;

  <label class="form-check-label" for="candidate_or_employer">
 <?php echo e(__('Candidate')); ?>

  </label>
</div>

                              <div class="form-check text-muted ">
   <input class="form-check-input" type="radio" name="candidate_or_employer"
   <?php echo e(($c_or_e == 'employer')? 'checked="checked"':''); ?>  value="employer" />&nbsp; &nbsp;&nbsp;

  <label class="form-check-label" for="candidate_or_employer">
 <?php echo e(__('Employer')); ?>

  </label>
</div>



                        <?php echo csrf_field(); ?>
                             <div class="input-group m-b-1">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                         <input id="email" type="email" placeholder="<?php echo e(__('E-Mail Address')); ?>" class="form-control ar <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> text-right"   name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                          <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                         </div>
                            <div class="input-group m-b-2">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                 <input id="password" type="password" placeholder="<?php echo e(__('Password')); ?>" class="form-control ar <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> text-right" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>




                               <div class="input-group m-b-2">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>

                        </div>


                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <button type="submit" class="btn btn-primary p-x-2">
                                        <i class="icon-login"></i>
                                         <?php echo e(__('Login')); ?>  </button>
                                </div>
                                <div class="col-xs-12 col-md-6  ">
                                    <a href="<?php echo e(route('password.request')); ?>" class="btn btn-link p-x-0"> &nbsp;&nbsp;<?php echo e(__('Forgot Your Password')); ?> &nbsp;&nbsp; </a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary p-y-3"  >
                        <div class="card-block text-xs-center">
                            <div>
                                <h2><?php echo e(__('New User')); ?> ? </h2>
                                <p> <?php echo e(__('Join Parttime Partner app partners close to your career and get additional income')); ?> </p>
                                <a  href="<?php echo e(route('register')); ?>"   class="btn btn-primary active m-t-1"> <?php echo e(__('Register Here')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
 <?php if($c_or_e == 'candidate'): ?>
<script>
$("#login_form").attr('action', '/login');
$("input[name='email']").attr('placeholder', '<?php echo e(__("Candidate E-Mail Address")); ?>');
 </script>
 <?php else: ?>
 <script>
  $("#login_form").attr('action', '/login');
  $("input[name='email']").attr('placeholder', '<?php echo e(__("Employer E-Mail Address")); ?>');
   </script>
 <?php endif; ?>
<script>

$(function(){
    $('input:radio[name="candidate_or_employer"]').change(function() {
        if(this.value == "candidate") {
          $("#login_form").attr('action', '/login');
          $("input[name='email']").attr('placeholder', '<?php echo e(__("Candidate E-Mail Address")); ?>');
        }   else {
         $("#login_form").attr('action', '/login');
           $("input[name='email']").attr('placeholder', '<?php echo e(__("Employer E-Mail Address")); ?>'); 
        }
    });
});
</script>
<?php $__env->stopPush(); ?>




<?php echo $__env->make('front-end.layouts.webapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>