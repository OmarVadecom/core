<div class="col-sm-12">
    <div class="cta-mt-negative bg_cover">
        <div class="call-to-action-inner" style="background-image: url(<?php echo e(url('/')); ?>/assets/front/img/16131902461486580724.jpg);padding: 75px 35px;margin: 50px 0;border-radius: 50px">
            <div class="container">
                <?php if(app()->getLocale() == 'ar'): ?>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="section-title-two white-color">
                                <h3 class="title"><?php echo e($module['ar_heading']); ?></h3>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a class="main-btn small-size rounded-btn mt-md-gap-30" href="<?php echo e($module['ar_button_url']); ?>">
                                <i class="fal fa-comments"></i><?php echo e($module['ar_button_content']); ?>

                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row justify-content-between align-items-center call-border">
                    
                            <div class="col-lg-8 ">
                                <div class="section-title-two white-color">
                                    <h3 class="title"><?php echo e($module['heading']); ?></h3>
                                </div>
                            </div>
                        
                            <div class="col-auto ">
                                <a class="main-btn small-size rounded-btn mt-md-gap-30" href="<?php echo e($module['button_url']); ?>">
                                    <i class="fal fa-comments"></i><?php echo e($module['button_content']); ?>

                                </a>
                            </div>
                        
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/modules/themes_for_modules/call_to_action.blade.php ENDPATH**/ ?>