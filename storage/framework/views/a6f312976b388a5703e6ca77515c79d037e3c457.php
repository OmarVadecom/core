<footer
    class="footer-area footer-area-two"
    style="background-image: url(<?php echo e($setting->footer_bg_image ? asset('assets/front/img/' . $setting->footer_bg_image ) :
                                            asset('assets/front/img/footer_bg_image_default.jpg')); ?>);
              "
>
    <div
        class="footer-overlay"
        <?php if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'long_footer'): ?>
            style="padding-bottom: 50px"
        <?php endif; ?>
        <?php if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'short_footer'): ?>
            style="padding-top: 20px"
        <?php endif; ?>
    >
    <div class="container position-relative">
        <div
            class="row footer-widgets"
            <?php if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'short_footer'): ?>
                style="display: none"
            <?php endif; ?>
        >
            <div class="col-lg-2">
                <button class="btn btn-footer" id="web-design">
                    <?php echo e(__('web_deign')); ?>

                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled web-design">
                    <li>
                        <a href="<?php echo e($fLinks[0]['url'] ?? '#'); ?>">- <?php echo e($fLinks[0]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[1]['url'] ?? '#'); ?>">- <?php echo e($fLinks[1]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[2]['url'] ?? '#'); ?>">- <?php echo e($fLinks[2]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[3]['url'] ?? '#'); ?>">- <?php echo e($fLinks[3]['name'] ?? 'Default Link'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="graphic-design">
                    <?php echo e(__('graphic_design')); ?>

                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled graphic-design">
                    <li>
                        <a href="<?php echo e($fLinks[4]['url'] ?? '#'); ?>">- <?php echo e($fLinks[4]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[5]['url'] ?? '#'); ?>">- <?php echo e($fLinks[5]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[6]['url'] ?? '#'); ?>">- <?php echo e($fLinks[6]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[7]['url'] ?? '#'); ?>">- <?php echo e($fLinks[7]['name'] ?? 'Default Link'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="marketing">
                    <?php echo e(__('marketing')); ?>

                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled marketing">
                    <li>
                        <a href="<?php echo e($fLinks[8]['url'] ?? '#'); ?>">- <?php echo e($fLinks[8]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[9]['url'] ?? '#'); ?>">- <?php echo e($fLinks[9]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[10]['url'] ?? '#'); ?>">- <?php echo e($fLinks[10]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[11]['url'] ?? '#'); ?>">- <?php echo e($fLinks[11]['name'] ?? 'Default Link'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="services">
                    <?php echo e(__('services')); ?>

                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled services">
                    <li>
                        <a href="<?php echo e($fLinks[12]['url'] ?? '#'); ?>">- <?php echo e($fLinks[12]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[13]['url'] ?? '#'); ?>">- <?php echo e($fLinks[13]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[14]['url'] ?? '#'); ?>">- <?php echo e($fLinks[14]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[15]['url'] ?? '#'); ?>">- <?php echo e($fLinks[15]['name'] ?? 'Default Link'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="about">
                    <?php echo e(__('about_vadecom')); ?>

                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled about">
                    <li>
                        <a href="<?php echo e($fLinks[16]['url'] ?? '#'); ?>">- <?php echo e($fLinks[16]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[17]['url'] ?? '#'); ?>">- <?php echo e($fLinks[17]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[18]['url'] ?? '#'); ?>">- <?php echo e($fLinks[18]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo e($fLinks[19]['url'] ?? '#'); ?>">- <?php echo e($fLinks[19]['name'] ?? 'Default Link'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-footer" id="direction">
                    <?php echo e(__('direction')); ?>

                    <i class="fas fa-sort-down" aria-hidden="true"></i>
                </button>
                <ul class="list-unstyled direction">
                    <li><?php echo e(__('harem_branch')); ?></li>
                    <li>
                        <a href="<?php echo e($fLinks[20]['url'] ?? '#'); ?>">- <?php echo e($fLinks[20]['name'] ?? 'Default Link'); ?></a>
                    </li>
                    <li><?php echo e(__('faisal_branch')); ?></li>
                    <li>
                        <a href="<?php echo e($fLinks[21]['url'] ?? '#'); ?>">- <?php echo e($fLinks[21]['name'] ?? 'Default Link'); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="row  end-footer p py-4 mt-4"
            <?php if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'long_footer'): ?>
                style="display: none"
            <?php endif; ?>
            <?php if(isset($front_daynamic_page) && $front_daynamic_page->footer == 'short_footer'): ?>
                style="padding-top: 0 !important;margin-top: 0 !important;border-top: 0 !important"
            <?php endif; ?>
        >
            <div class="col-lg-5 justify-content-start">
                <p class="pr-1"><?php echo e(__('copyright')); ?> © <?php echo e((new DateTime)->format("Y")); ?> <?php echo e(__('all_rights_reserved')); ?></p>
                <a href="<?php echo e($fLinks[22]['url'] ?? '#'); ?>"> <?php echo e($fLinks[22]['name'] ?? 'Default Link'); ?></a>
            </div>
            <div class="col-lg-4">
                <a href="<?php echo e($fLinks[23]['url'] ?? '#'); ?>"><?php echo e($fLinks[23]['name'] ?? 'Default Link'); ?></a>
                <a href="<?php echo e($fLinks[24]['url'] ?? '#'); ?>"><?php echo e($fLinks[24]['name'] ?? 'Default Link'); ?></a>
                <a href="<?php echo e($fLinks[25]['url'] ?? '#'); ?>"><?php echo e($fLinks[25]['name'] ?? 'Default Link'); ?></a>
                <a href="<?php echo e($fLinks[26]['url'] ?? '#'); ?>"><?php echo e($fLinks[26]['name'] ?? 'Default Link'); ?></a>
            </div>
            <div class="col-lg-3 d-flex justify-content-end">
                <a href="<?php echo e($fLinks[27]['url'] ?? '#'); ?>">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </a>
                <a href="<?php echo e($fLinks[28]['url'] ?? '#'); ?>">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="<?php echo e($fLinks[29]['url'] ?? '#'); ?>">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                </a>
                <a href="<?php echo e($fLinks[30]['url'] ?? '#'); ?>">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="<?php echo e($fLinks[31]['url'] ?? '#'); ?>">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
</footer><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/partials/footer.blade.php ENDPATH**/ ?>