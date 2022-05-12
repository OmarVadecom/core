<?php $__env->startSection('meta-keywords', "$job->meta_tags"); ?>
<?php $__env->startSection('meta-description', "$job->meta_description"); ?>
<?php $__env->startSection('content'); ?>
  <?php if(isset($job) && Auth::guard('admin')->check()): ?>  
                <div  style="position:fixed;top:0px;height: 25px;z-index:5555555; width:100%; border-bottom-left-radius: 10px; background-color:#cce5ff; border-bottom-right-radius: 10px;">
                    <a  target="_blank" style="text-decoration: underline; text-align: center; margin: auto; display: block; color: #ffffff; font-weight: 700; font-size: 14px;" href="<?php echo e(route('admin.job.edit',['id'=>$job->id])); ?>"><i class="far fa-edit"></i> Edit this Page</a>
                </div>
  <?php endif; ?>
 <!--====== PAGE TITLE PART START ======-->
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e($job->title); ?></h2>
					
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e($job->title); ?></li>
						</ul>
					
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div>        

<!--====== PAGE TITLE PART ENDS ======-->


 <!--====== ABOT FAQ PART START ======-->
         
 <div class="blog-standard-area pt-120 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="jobdetails-area">
                    <h3 class="job_name"><i class="fas fa-briefcase"></i> <?php echo e($job->title); ?></h3>
                    
                    <?php if($job->job_responsibility != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Job Responsibilities')); ?></h4>
                        <p>
                            <?php echo $job->job_responsibility; ?>

                        </p>
                    </div> 
                    <?php endif; ?>
                    
                    <?php if($job->job_context != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Job Context')); ?></h4>
                        <p>
                            <?php echo $job->job_context; ?>

                        </p>
                    </div>
                    <?php endif; ?>
                   
                    <?php if($job->education_requirement != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Educational Requirements')); ?></h4>
                        <p>
                            <?php echo $job->education_requirement; ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->experience_requirement != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Experience Requirements')); ?></h4>
                        <p>
                            <?php echo $job->experience_requirement; ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->additional_requirement != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Additional Requirements')); ?></h4>
                        <p>
                            <?php echo $job->additional_requirement; ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->job_location != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Job Location')); ?></h4>
                        <p>
                            <?php echo e($job->job_location); ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->employment_status != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Employment Status')); ?></h4>
                        <p>
                            <?php echo e($job->employment_status); ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->salary != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Salary')); ?></h4>
                        <p>
                            <?php echo e($job->salary); ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->vacancy != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Vacancy')); ?></h4>
                        <p>
                            <?php echo e($job->vacancy); ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->position != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Position')); ?></h4>
                        <p>
                            <?php echo e($job->position); ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->company_name != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Company Name')); ?></h4>
                        <p>
                            <?php echo e($job->company_name); ?>

                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if($job->other_benefits != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Compensation & Other Benefits')); ?></h4>
                        <p>
                            <?php echo $job->other_benefits; ?>

                        </p>
                    </div>
                    <?php endif; ?>
                  
                    <?php if($job->deadline != null): ?>
                    <div class="j-info">
                        <h4><?php echo e(__('Deadline')); ?></h4>
                        <p>
                            <?php echo e($job->deadline); ?>

                        </p>
                    </div>
                    <?php endif; ?>


                    <a href="#" class="main-btn" data-toggle="modal" data-target="#applyjob"><?php echo e(__('Apply For Job')); ?></a>
                </div>
                
            </div>
			<div class="col-lg-4  order-first order-lg-last">
				<div class="blog-sidebar">
				<div class="widget search-widget">
					<h4 class="widget-title"><?php echo e(__('Search Job')); ?></h4>
					<div class="sidebar-search-item text-center mt-35">
						<form action="<?php echo e(route('front.career', ['category' => request()->input('category') ])); ?>" method="GET">
							<div class="input-box">
								<input name="category" type="hidden" value="<?php echo e(request()->input('category')); ?>">
								<input name="term" type="text" placeholder="<?php echo e(__('Search Job')); ?>..." value="<?php echo e(request()->input('term')); ?>">
								<button type="submit"><i class="fal fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
				<div class="widget categories-widget">
                    <h4 class="widget-title"><?php echo e(__('All Categories')); ?></h4>
                        <ul>
                            <li >
                                <a href="<?php echo e(route('front.career')); ?>" class="<?php if(empty(request()->input('category'))): ?> active <?php endif; ?>"><?php echo e(__('All')); ?>

									<span><?php echo e($alljobs->count()); ?></span></a>
								</a>
                            </li>
                          <?php $__currentLoopData = $jcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('front.career',['category'=>$item->slug])); ?>" class=" <?php if(request()->input('category') == $item->slug): ?> active <?php endif; ?>
                                "><?php echo e($item->name); ?>

								<span><?php echo e($item->jobs->count()); ?></span></a></li>
							</a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                  </div>
				  <div class="widget social-links">
					<h4 class="widget-title"><?php echo e(__('Never Miss News')); ?></h4>
						<ul>
						  <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						  <li><a href="<?php echo e($item->url); ?>"><i class="<?php echo e($item->icon); ?>"></i></a></li>
						  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
				</div>
				</div>
			</div>
		</div> 
	</div> <!-- container -->
</div> 

<!--====== ABOT FAQ PART ENDS ======-->

 <!-- Apply Job Modal -->
 <div class="modal fade" id="applyjob" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><?php echo e(__('Apply for This Job')); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo e(route('job.apply.submit')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" value="<?php echo e($job->id); ?>" name="job_id">
          <div class="modal-body">
            <div class="form-group">
              <input class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('Your Name')); ?>">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('Email Address')); ?>">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="<?php echo e(__('Phone Number')); ?>">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="expected_salary" value="<?php echo e(old('expected_salary')); ?>" placeholder="<?php echo e(__('Your Expected Salary')); ?>">
              </div>

            <div class="form-group">
              <textarea name="message" class="form-control textarea"  placeholder="<?php echo e(__('Your Message')); ?>"><?php echo e(old('message')); ?></textarea>
            </div>
            <div class="form-group">
              <label for="">Accept (PDF) File.</label>
              <input class="form-control" type="file" name="file">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="main-btn"><?php echo e(__('Apply Now')); ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Carer Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/jobdetails.blade.php ENDPATH**/ ?>