<div class="col-lg-4 col-md-6 col-sm-8">
    <?php if(app()->getLocale() == 'ar'): ?>
        <div class="section-content text-center mb-30">
            <div class="icon">
                <i class="<?php echo e($module['ar_class_icon']); ?>"></i>
            </div>
            <h4 class="title"><a href="<?php echo e($module['ar_button_url']); ?>" class="link"><?php echo e($module['ar_heading']); ?></a></h4>
            <p class="module-text"><?php echo e($module['ar_paragraph']); ?></p>
        </div>
    <?php else: ?>
        <div class="section-content text-center mb-30">
            <div class="icon">
                <i class="<?php echo e($module['class_icon']); ?>"></i>
            </div>
            <h4 class="title"><a href="<?php echo e($module['button_url']); ?>" class="link"><?php echo e($module['heading']); ?></a></h4>
            <p class="module-text"><?php echo e($module['paragraph']); ?></p>
        </div>
    <?php endif; ?>
</div><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/modules/themes_for_modules/section_with_icon.blade.php ENDPATH**/ ?>