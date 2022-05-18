<?php $__env->startSection('meta-keywords', "$seo->gallery_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->gallery_meta_desc"); ?>
<?php $__env->startSection('content'); ?>
  <?php if(isset($galleries) && Auth::guard('admin')->check()): ?>  
                <div  style="position:fixed;top:0px;height: 25px;z-index:5555555; width:100%; border-bottom-left-radius: 10px; background-color:#cce5ff; border-bottom-right-radius: 10px;">
                    <a  target="_blank" style="text-decoration: underline; text-align: center; margin: auto; display: block; color: #ffffff; font-weight: 700; font-size: 14px;" href="<?php echo e(route('admin.gallery.index')); ?>"><i class="far fa-edit"></i> Edit this Page</a>
                </div>
  <?php endif; ?>
 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e(__('Gallery')); ?></h2>
					
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e(__('Gallery')); ?></li>
						</ul>
					
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->


  <!-- Gallery Area Start -->
  <div class="project-gallery" id="project-gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="project-gallery-filter d-flex justify-content-center">
            <ul class="project-gallery-menu d-inline-block">
              <li class="filter active" data-filter="all">All</li>
              <?php $__currentLoopData = $gcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="filter" data-filter=".cat-<?php echo e($gcategory->id); ?>"><?php echo e($gcategory->name); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>

          <div class="row project-gallery-item">
              <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="mix col-md-6 col-lg-4 gallery-item cat-<?php echo e($gallery->category_id); ?>">
                <div class="gallery-item-content">
                  <div class="item-thumbnail">
                    <div class="img" style="background-image: url(<?php echo e(asset('assets/front/img/gallery/'.$gallery->image)); ?>)"></div>
                    <div class="content-overlay">
                      <div class="content">
                        <div class="links">
                          <?php if($gallery->video_link !== null): ?>
                          <a class="img-popup image-preview  mfp-iframe" href="<?php echo e($gallery->video_link); ?>">
                            <i class="fas fa-video"></i>
                          </a>
                          <?php else: ?> 
                          <a class="img-popup image-preview" href="<?php echo e(asset('assets/front/img/gallery/'.$gallery->image)); ?>">
                            <i class="far fa-image"></i>
                          </a>
                          <?php endif; ?>
                        </div>
                        <div class="info">
                          <p class="tag"><?php echo e($gallery->gcategory->name); ?></p>
                          <h4 class="project-name"><?php echo e($gallery->title); ?>

                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery Area End -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/gallery.blade.php ENDPATH**/ ?>