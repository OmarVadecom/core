<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>

<?php $__env->startSection('content'); ?>
   <?php if(isset($sliders) && Auth::guard('admin')->check()): ?>  
                <div  style="position:fixed;top:0px;height: 25px;z-index:5555555; width:100%; border-bottom-left-radius: 10px; background-color:#cce5ff; border-bottom-right-radius: 10px;">
                    <a  target="_blank" style="text-decoration: underline; text-align: center; margin: auto; display: block; color: #ffffff; font-weight: 700; font-size: 14px;" href="<?php echo e(route('admin.about_section')); ?>"><i class="far fa-edit"></i> Edit this Page</a>
                </div>
    <?php endif; ?>
    <?php if($visibility->is_t3_hero_section == 1): ?>
        <?php if($visibility->is_video_hero == 1): ?>
            <section id="herovideo" class="banner-section-three" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->hero_bg_image )); ?>);">
                <div
                    id="bgndVideo"
                    data-property="{videoURL:' <?php echo e($commonsetting->hero_section_video_link); ?>',
                                    containment:'#herovideo', quality:'large', autoPlay:true, loop:true, mute:true, opacity:1}
                                    "
                ></div>
                <div class="overlay" style="padding-top: 250px; padding-bottom: 100px">
                    <div class="container position-relative">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="banner-content text-center">
                                    <span class="title-tag wow fadeInDown" data-wow-delay="0.3s"><?php echo e($sinfo->hero_sub_title); ?></span>
                                    <h1 class="title wow fadeInLeft" data-wow-delay="0.5s"><?php echo e($sinfo->hero_title); ?></h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.7s"><?php echo e($sinfo->hero_text); ?></p>
                                    <ul class="banner-btns">
                                        <li class="wow fadeInUp" data-wow-delay="0.7s">
                                            <a class="main-btn rounded-btn" href="<?php echo e(route('front.quot')); ?>"><?php echo e(__('Gate A Quote')); ?></a>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-delay="0.8s">
                                            <a
                                                class="main-btn transparent-border-btn rounded-btn"
                                                href="<?php echo e(route('front.about')); ?>"
                                            ><?php echo e(__('Learn More')); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php else: ?>
            <div class="banner-section-two" style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->hero_bg_image )); ?>);">
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="banner-content text-center">
                                <span class="title-tag wow fadeInDown" data-wow-delay="0.3s"><?php echo e($sinfo->hero_sub_title); ?></span>
                                <h1 class="title wow fadeInLeft" data-wow-delay="0.5s"><?php echo e($sinfo->hero_title); ?></h1>
                                <p><?php echo e($sinfo->hero_text); ?></p>
                                <ul class="banner-btns">
                                    <li class="wow fadeInUp" data-wow-delay="0.7s">
                                        <a class="main-btn rounded-btn" href="<?php echo e(route('front.quot')); ?>"><?php echo e(__('Gate A Quote')); ?></a>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="0.8s">
                                        <a
                                            class="main-btn transparent-border-btn rounded-btn"
                                            href="<?php echo e(route('front.about')); ?>"
                                        ><?php echo e(__('Learn More')); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <!--====== SERVICES PART START ======-->
    <?php if($visibility->is_t3_service_section == 1): ?>
        <div class="service-section section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-50">
                            <span class="title-tag"><?php echo e($sinfo->service_sub_title); ?></span>
                            <h2 class="title"><?php echo e($sinfo->service_title); ?></h2>
                        </div><!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row service-items justify-content-center">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-duration=".1s"
                             data-wow-delay=".3s">
                            <div class="service-item-six text-center mt-30">
                                <div class="icon">
                                    <i class="<?php echo e($item->icon); ?>"></i>
                                </div>
                                <h4 class="title"><?php echo e($item->title); ?></h4>
                            <!-- <p> </p> -->
                                <p><?php echo e(substr(strip_tags($item->content), 0, 175) . '...'); ?></p>
                                <a href="<?php echo e(route('front.service.details', $item->slug)); ?>" class="service-link"><i
                                            class="fal fa-angle-right"></i> <?php echo e(__('Read More')); ?></a>
                            </div> <!-- singke services -->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    <?php endif; ?>
    <!--====== SERVICES PART ENDS ======-->

    <!--====== VIDEO PART START ======-->
    <?php if($visibility->is_t3_portfolio_section == 1): ?>
        <div class="intro-video-area-two"
             style="background-image: url(<?php echo e(asset('assets/front/')); ?>/images/video-bg.jpg);">
            <div class="container">
                <div class="video-item text-center">
                    <a class="video-popup" href="<?php echo e($sinfo->video_link); ?>"><i class="fal fa-play"></i></a><br>
                </div>
            </div> <!-- container -->
            <div class="video-thumb-1 wow fadeInLeft" data-wow-delay="0.3s">
                <img src="<?php echo e(asset('assets/front/img/'.$sinfo->video_image_left)); ?>" alt="">
            </div>
            <div class="video-thumb-2 wow fadeInRight" data-wow-delay="0.3s">
                <img src="<?php echo e(asset('assets/front/img/'.$sinfo->video_image_right)); ?>" alt="">
            </div>
        </div>
    <?php endif; ?>
    <!--====== VIDEO PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->
    <?php if($visibility->is_t3_portfolio_section == 1): ?>
        <div class="portfolio-area portfolio-mt-negative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-title-two text-center white-color mb-60">
                            <span class="title-tag"><?php echo e($sinfo->portfolio_sub_title); ?></span>
                            <h2 class="title" style="text-align: center !important"><?php echo e($sinfo->portfolio_title); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="portfolio-items portfolio-slider-three row">
                    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-auto">
                            <a href="<?php echo e(route('front.portfolio.details', $item->slug)); ?>"
                               class="portfolio-item-two mb-30">
                                <div class="portfolio-img"
                                     style="background-image: url(<?php echo e(asset('assets/front/img/portfolio/'.$item->featured_image)); ?>);"></div>

                                <div class="portfolio-content" style="height: 175px">
                                    <span class="category"><?php echo e($item->service->title); ?>2</span>
                                    <h5 class="title">
                                        <?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?>

                                    </h5>
                                    <p><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->content))) > 120) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 120) . '...' : strip_tags(Helper::convertUtf8($item->content))); ?></p>
                                </div>
                            </a> <!-- single portfolio -->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    <?php endif; ?>
    <!--====== PORTFOLIO PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    <?php if($visibility->is_t3_testimonial_section == 1): ?>
        <section class="testimonials-section section-gap soft-blue-bg">
            <div class="container">
                <div class="section-title text-center mb-60">
                    <span class="title-tag"><?php echo e($sinfo->testimonial_subtitle); ?></span>
                    <h2 class="title"><?php echo e($sinfo->testimonial_title); ?></h2>
                </div>

                <div class="testimonials-slider row">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4">
                            <div class="testimonial-box color-1s">

                                <p>
                        <span class="d-block">
                                 <?php for($i = 0; $i < $item->rating; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                    </span>
                                    <?php echo e($item->message); ?>

                                </p>
                                <div class="author d-flex align-items-center">
                                    <div class="photo">
                                        <img src="<?php echo e(asset('assets/front/img/'.$item->image)); ?>" alt="Image">
                                    </div>
                                    <div class="desc">
                                        <h6> <?php echo e($item->name); ?></h6>
                                        <span class="position"><?php echo e($item->position); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== FAQ PART START ======-->
    <?php if($visibility->is_t3_faq_section == 1): ?>
        <div class="counter-faq-section section-gap">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="section-title-two mb-50">
                            <span class="title-tag"><?php echo e($sinfo->faq_sub_title); ?></span>
                            <h2 class="title"><?php echo e($sinfo->faq_title); ?></h2>
                        </div> <!-- section title -->
                        <div class="accordion-three" id="accordionExample">
                            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo e($item->id); ?>">
                                        <a class="<?php echo e($loop->first ? '' : 'collapsed'); ?>" href="" data-toggle="collapse"
                                           data-target="#collapse<?php echo e($item->id); ?>"
                                           aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>"
                                           aria-controls="collapse<?php echo e($item->id); ?>">
                                            <?php echo e($item->title); ?>

                                        </a>
                                    </div>

                                    <div id="collapse<?php echo e($item->id); ?>" class="collapse  <?php echo e($loop->first ? 'show' : ''); ?>"
                                         aria-labelledby="heading<?php echo e($item->id); ?>" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p><?php echo $item->content; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="faq-counter-boxes mt-md-gap-50 row">
                            <?php $__currentLoopData = $counters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="counter-box-four counter-active mt-30">

                                        <div class="counter-wrap">
                                            <span class="counter"><?php echo e($item->number); ?></span>
                                        </div>
                                        <span class="title"><?php echo e($item->title); ?></span>
                                        <p><?php echo e($item->text); ?></p>
                                        <i class="<?php echo e($item->icon); ?>"></i>
                                    </div> <!-- single faq -->
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    <?php endif; ?>
    <!--====== FAQ PART ENDS ======-->

    <!--====== TEAM PART START ======-->
    <?php if($visibility->is_t3_team_section == 1): ?>
        <div class="team-area team-section-extra-padding soft-blue-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title-two text-center mb-50">
                            <span class="title-tag"><?php echo e($sinfo->team_sub_title); ?></span>
                            <h2 class="title"><?php echo e($sinfo->team_title); ?></h2>
                        </div><!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="team-member-four text-center mt-30">
                                <div class="member-photo">
                                    <img src="<?php echo e(asset('assets/front/img/team/'.$item->image)); ?>" alt="">
                                </div>
                                <div class="member-content">
                                    <h5 class="title"><a
                                                href="<?php echo e(route('front.team_details', $item->id)); ?>"><?php echo e($item->name); ?></a>
                                    </h5>
                                    <span class="position"><?php echo e($item->dagenation); ?></span>
                                </div>
                            </div> <!-- single team -->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    <?php endif; ?>
    <!--====== TEAM PART ENDS ======-->

    <!--====== ACTION PART START ======-->
    <?php if($visibility->is_t3_meet_us_section == 1): ?>
        <div class="call-to-action-three cta-mt-negative bg_cover">
            <div class="call-to-action-inner"
                 style="background-image: url(<?php echo e(asset('assets/front/img/'.$sinfo->meeet_us_bg_image )); ?>);">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="section-title-two white-color">
                                <h3 class="title"><?php echo e($sinfo->meeet_us_text); ?></h3>
                            </div> <!-- action content -->
                        </div>
                        <div class="col-auto">
                            <a class="main-btn small-size rounded-btn mt-md-gap-30" href="<?php echo e(route('front.contact')); ?>"><i
                                        class="fal fa-comments"></i><?php echo e($sinfo->meeet_us_button_text); ?></a>
                        </div>
                    </div>
                </div> <!-- container -->
            </div>
        </div>
    <?php endif; ?>
    <!--====== ACTION PART ENDS ======-->

    <!--====== BLOG PART START ======-->
    <?php if($visibility->is_t3_news_section == 1): ?>
        <?php
        $cURLConnection = curl_init();
        if ($currentLang->code == "ar") {
            curl_setopt($cURLConnection, CURLOPT_URL, 'https://vadecom.net/blog/ar/wp-json/wp/v2/posts?_embed&per_page=3&orderby=modified&order=desc');
        } else {
            curl_setopt($cURLConnection, CURLOPT_URL, 'https://vadecom.net/blog/wp-json/wp/v2/posts?_embed&per_page=3&orderby=modified&order=desc');
        }
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        $postsList = curl_exec($cURLConnection);
        curl_close($cURLConnection);
        $jsonArrayResponse = json_decode($postsList);
        ?>

        <section class="latest-news section-gap" style="padding: 90px 0 0 0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title-two text-center mb-50">
                            <span class="title-tag"><?php echo e($sinfo->blog_sub_title); ?></span>
                            <h2 class="title"><?php echo e($sinfo->blog_title); ?></h2>
                        </div>
                    </div>
                </div> <!-- row -->
                <div class="row justify-content-center">
                    <?php if(isset($jsonArrayResponse)): ?>
                        <?php $__currentLoopData = $jsonArrayResponse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $image=get_object_vars($post->_embedded);
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-8 fadeInUp">
                                <a href="<?php echo e($post->link); ?>" target="_blank">
                                    <div class="latest-news-box mt-30">
                                        <div class="post-thumb">
                                            <?php if(isset($image['wp:featuredmedia'][0]->source_url)): ?>
                                                <img src="<?php echo e($image['wp:featuredmedia'][0]->source_url); ?>" class="w-100 h-100">
                                            <?php else: ?>
                                                <img
                                                    src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png?w=640"
                                                    class="w-100 h-100"
                                                    alt="Image"
                                                />
                                            <?php endif; ?>
                                        </div>
                                        <div class="post-content">
    
    
    
    
    
    
                                            <h4 class="title">
                                                <?php echo $post->title->rendered; ?>

                                            </h4>
    
    
    
    
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    <?php endif; ?>
    <!--====== BLOG PART ENDS ======-->


    <!--====== BRAND 2 PART START ======-->
    <?php if($visibility->is_t3_client_section == 1): ?>
        <div class="brand-section" style="padding: 20px 0 80px 0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider">
                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($item->link); ?>" class="brand-item">
                                    <img style="width: 85%" src="<?php echo e(asset('assets/front/img/client/'.$item->image)); ?>"
                                         alt="<?php echo e($item->name); ?>">
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div> <!-- brand item -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    <?php endif; ?>
    <!--====== BRAND 2 PART ENDS ======-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\core\resources\views/front/themes/theme3.blade.php ENDPATH**/ ?>