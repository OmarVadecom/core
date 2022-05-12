

<?php $__env->startSection('meta-keywords', "$seo->blog_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->blog_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e(__('Blog')); ?></h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e(__('Blog')); ?></li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->

 <!--====== BLOG STANDARD PART START ======-->
         
 <div class="section-gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="blog-standard">
					<?php if(count($blogs) == 0): ?>
						<div class="col-md-12">
							<div class="bg-light py-5">
							<h3 class="text-center"><?php echo e(__('NO BLOG FOUND')); ?></h3>
							</div>
						</div>
					<?php else: ?>
					<div class="row">
						<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
							<div class="latest-news-box mb-30">
								<div class="post-thumb">
									<img src="<?php echo e(asset('assets/front/img/blog/'.$item->image)); ?>" alt="Image">
								</div>
								<div class="post-content">
									<ul class="post-meta">
										<li><a href="#">By Admin,</a></li>
										<li><a href="#"><?php echo e(date ( 'd M, Y', strtotime($item->created_at) )); ?></a></li>
									</ul>
									<h4 class="title">
										<a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>">
											<?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?>

										</a>
									</h4>
									<a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>" class="read-more-btn"><?php echo e(__('Read More')); ?> <i class="fal fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<?php endif; ?>
				</div>
				<div class="row mt-30">
					<div class="col-lg-12 text-center">
						<div class="d-inline-block">
							<?php echo e($blogs->appends(['language' => request()->input('language')])->links()); ?>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4  order-first order-lg-last">
				<div class="blog-sidebar">
					<div class="widget search-widget">
						<h4 class="widget-title"><?php echo e(__('Search Blog')); ?></h4>
							<form action="<?php echo e(route('front.blogs', ['category' => request()->input('category'), 'month' => request()->input('month'), 'year' => request()->input('year')])); ?>" method="GET">
								<div class="input-box">
									<input name="category" type="hidden" value="<?php echo e(request()->input('category')); ?>">
									<input name="month" type="hidden" value="<?php echo e(request()->input('month')); ?>">
									<input name="year" type="hidden" value="<?php echo e(request()->input('year')); ?>">
									<input name="term" type="text" placeholder="<?php echo e(__('Search Blog')); ?>..." value="<?php echo e(request()->input('term')); ?>">
									<button type="submit"><i class="fal fa-search"></i></button>
								</div>
							</form>
					</div>
					<div class="widget categories-widget">
						<h4 class="widget-title"><?php echo e(__('Categories')); ?></h4>
					
							<ul>
								<?php $__currentLoopData = $bcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="<?php echo e(route('front.blogs',  ['term'=>request()->input('term'), 'category'=>$bcategory->slug,  'month' => request()->input('month'), 'year' => request()->input('year')])); ?>"  class="<?php if(request()->input('category') == $bcategory->slug): ?> active <?php endif; ?>"><?php echo e($bcategory->name); ?><span><?php echo e($bcategory->blogs->count()); ?></span></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
					</div>
					<div class="widget news-feed-widget">
						<h4 class="widget-title"><?php echo e(__('Latest News')); ?></h4>
						<div class="sidebar-feeds mt-45">
							
							<div class="news-feed-items">
								<?php $__currentLoopData = $latestblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="news-feed-item">
                                    <a href="<?php echo e(route('front.blogdetails', $latestblog->slug)); ?>">
										<h4 class="title">
										<?php echo e((strlen(strip_tags(Helper::convertUtf8($latestblog->title))) > 50) ? substr(strip_tags(Helper::convertUtf8($latestblog->title)), 0, 50) . '...' : strip_tags(Helper::convertUtf8($latestblog->title))); ?>

										</h4>
									</a>
									<span><i class="fal fa-calendar-alt"></i><?php echo e(date ( 'd M, Y', strtotime($latestblog->created_at) )); ?></span>
                                    <img src="<?php echo e(asset('assets/front/img/blog/'.$latestblog->image)); ?>" alt="Image">
                                </div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							
						</div>
					</div>

					<div class="widget tags-widget">
						<h4 class="widget-title"><?php echo e(__('Arcive')); ?></h4>
						<ul>
							<?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php
									$myArr = explode('/', $archive->date);

									$monthNum  = $myArr[0];
									$dateObj   = DateTime::createFromFormat('!m', $monthNum);
									$monthName = $dateObj->format('F');
								?>
								<li><a 
									class="single-category <?php if(request()->input('month') == $myArr[0] && request()->input('year') == $myArr[1]): ?> active <?php endif; ?>"
									
									href="<?php echo e(route('front.blogs', ['term'=>request()->input('term'), 'category'=>request()->input('category'),'month'=>$myArr[0], 'year'=>$myArr[1]])); ?>" 
									>
									<?php echo e($monthName); ?> <?php echo e($myArr[1]); ?>

									</a>
							</li>
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
	</div>
</div> 

 <!--====== BLOG STANDARD PART End ======-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/blogs.blade.php ENDPATH**/ ?>