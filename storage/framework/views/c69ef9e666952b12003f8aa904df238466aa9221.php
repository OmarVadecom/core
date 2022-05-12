


<?php $__env->startSection('meta-keywords', "$seo->portfolio_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->portfolio_meta_desc"); ?>
<?php $__env->startSection('content'); ?>
<?php if(isset($portfolios)&&Auth::guard('admin')->check()): ?>  
            <div  style="position:fixed;top:0px;height: 25px;z-index:5555555; width:100%; border-bottom-left-radius: 10px; background-color:#cce5ff; border-bottom-right-radius: 10px;">
                <a  target="_blank" style="text-decoration: underline; text-align: center; margin: auto; display: block; color: #ffffff; font-weight: 700; font-size: 14px;" href="<?php echo e(route('admin.portfolio.index')); ?>"><i class="far fa-edit"></i> Edit this Page</a>
            </div>
<?php endif; ?>
 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e(__('Portfolio')); ?></h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e(__('Portfolio')); ?></li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== NEWS PART START ======-->
                   
 <div class="blog-area portfolio-page section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row blog-grid-items">
                    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6">
                        <a href="<?php echo e(route('front.portfolio.details', $item->slug)); ?>" class="single-blog-grid mb-30">
                            <div class="img" style="background-image: url(<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>)"></div>
                            <span class="cat" href="#"><?php echo e($item->service->title); ?></span>
                            <div class="blog-grid-overlay">
                                <h5 class="title"><?php echo e($item->title); ?></h5>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="d-inline-block"> <?php echo e($portfolios->links()); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 blog-sidebar order-first order-lg-last">
                <div class="widget categories-widget">
                    <h4 class="widget-title"><?php echo e(__('All Categories')); ?></h4>
                
                    <ul>
                        <li >
                            <a href="<?php echo e(route('front.portfolio')); ?>" class="<?php if(empty(request()->input('category'))): ?> active <?php endif; ?>"><?php echo e(__('All')); ?></a>
                        </li>
                        <?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('front.portfolio',['category'=>$item->slug])); ?>" class=" 
                            <?php if(request()->input('category') == $item->slug): ?> active <?php endif; ?>
                            "><?php echo e($item->title); ?></a></li>
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
                  <div class="side-bar-contact mt-30" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->contact_form_image)); ?>);">
                    <div class="overlay"></div>
                    <div class="content">
                      <h3><?php echo e(__('Make a call for any type query.')); ?></h3>
                        <i class="fas fa-headset"></i>
                    <h4 class="call">
                      <?php
                      $fnumber = explode( ',', $commonsetting->number );
                      for ($i=0; $i < count($fnumber); $i++) { 
                          echo '<a class="d-block" href="tel:'.$fnumber[$i].'">'.$fnumber[$i].'</a>';
                      }
                      ?>
                    </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<!--====== NEWS PART ENDS ======-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/portfolio.blade.php ENDPATH**/ ?>