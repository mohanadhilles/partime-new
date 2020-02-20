
  <?php $__empty_1 = true; $__currentLoopData = $functional_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functional_area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

      <!--Job start-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="front">
                                <div class="job_count d-flex justify-content-center align-items-center flex-column"
                                     style='background: url("<?php echo e(asset('images/job_bg.png')); ?>") '>
                                    <span><?php echo e($functional_area->count_jobs); ?></span>
                                    <p>مرشح بارتايم</p>
                                   <p> Average partime cost par hour </p>
                                   <p style="color: var(--mainFontColor);font-family: 'main-bold';font-size:  large;" dir="ltr">
                                     <?php echo e($functional_area->average_partime_cost); ?>   SR
                                    </p>

                                </div>
                                <div class="title d-flex justify-content-center align-items-center">
                                    <h3><?php echo e($functional_area->title); ?></h3>
                                </div>
                            </div>
                            <div class="overlay d-flex justify-content-center align-items-center flex-column">
                                <a href="" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
                                <a href="" class="btn btn-blue-light w-100">أنضم بارتايم</a>
                            </div>
                        </div>
                    </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

   <center>      لا يوجد بيانات      </center>


<?php endif; ?>
