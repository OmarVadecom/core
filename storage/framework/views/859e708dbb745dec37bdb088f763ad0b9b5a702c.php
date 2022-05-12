

<?php $__env->startSection('meta-keywords', "$seo->faq_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->faq_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e($sinfo->faq_sub_title); ?></h2>
					
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e($sinfo->faq_sub_title); ?></li>
						</ul>
					
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->


 <!--====== ABOT FAQ PART START ======-->
         
 <div class="faq-section section-gap">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6 col-md-10">
					<div class="accordion-three accordion-three-two" id="accordionExample">
						<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="card">
							<div class="card-header" id="heading<?php echo e($item->id); ?>">
								<a class="<?php echo e($loop->first ? '' : 'collapsed'); ?>" href="" data-toggle="collapse" data-target="#collapse<?php echo e($item->id); ?>" aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($item->id); ?>">
									<?php echo e($item->title); ?>

								</a>
							</div>

							<div id="collapse<?php echo e($item->id); ?>" class="collapse  <?php echo e($loop->first ? 'show' : ''); ?>" aria-labelledby="headingO<?php echo e($item->id); ?>" data-parent="#accordionExample">
								<div class="card-body">
									<?php echo $item->content; ?>

								</div>
							</div>
						</div> <!-- card -->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
			</div>
			<div class="col-lg-6">
				<div class="faq-video-thumb-area">
					<div class="tile-gallery-three mt-md-gap-50">
						<div class="img-one"> <img src="<?php echo e(asset('assets/front/img/'.$sinfo->faq_image2)); ?>" alt="Image"> </div>
						<div class="img-two text-right"> <img src="<?php echo e(asset('assets/front/img/'.$sinfo->faq_image1)); ?>" alt="Image"> </div>
					</div>
				</div>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== ABOT FAQ PART ENDS ======-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/faq.blade.php ENDPATH**/ ?>