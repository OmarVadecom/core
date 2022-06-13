
<?php $__env->startSection('meta-keywords', "$seo->team_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->team_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e(__('Team')); ?></h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e(__('Team')); ?></li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->
    
<!--====== LEADERSHIP PART START ======-->

<div class="leadership-area section-gap">
	<div class="container">
		<div class="row">
			<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="team-member mb-30">
					<div class="member-photo">
						<img src="<?php echo e(asset('assets/front/img/team/'.$item->image)); ?>" alt="Member-Photo">
						<div class="social-icon">
							<?php if($item->url1 && $item->icon1): ?>
								<a href="<?php echo e($item->url1); ?>">
									<i class="<?php echo e($item->icon1); ?>"></i>
								</a>
							<?php endif; ?>
							<?php if($item->url2 && $item->icon2): ?>
								<a href="<?php echo e($item->url2); ?>">
									<i class="<?php echo e($item->icon2); ?>"></i>
								</a>
							<?php endif; ?>
							<?php if($item->url3 && $item->icon3): ?>
								<a href="<?php echo e($item->url3); ?>">
									<i class="<?php echo e($item->icon3); ?>"></i>
								</a>
							<?php endif; ?>
							<?php if($item->url4 && $item->icon4): ?>
								<a href="<?php echo e($item->url4); ?>">
									<i class="<?php echo e($item->icon4); ?>"></i>
								</a>
							<?php endif; ?>
							<?php if($item->url5 && $item->icon5): ?>
								<a href="<?php echo e($item->url5); ?>">
									<i class="<?php echo e($item->icon5); ?>"></i>
								</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="team-content">
						<h5 class="name"><a href="<?php echo e(route('front.team_details', $item->id)); ?>"><?php echo e($item->name); ?></a></h5>
						<span class="position"><?php echo e($item->dagenation); ?></span>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div> <!-- row -->
		<div class="row mt-30">
			<div class="col-lg-12 text-center">
				<div class="d-inline-block">
					<?php echo e($teams->links()); ?>

				</div>
			</div>
		</div>
	</div> <!-- container -->
</div>
<!--====== LEADERSHIP PART ENDS ======-->

	<!-- Team Area Start -->
	
	<!-- Team Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/team.blade.php ENDPATH**/ ?>