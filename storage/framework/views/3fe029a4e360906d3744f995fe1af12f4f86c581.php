<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="section-content text-center mb-30">
        <div class="col-lg-6 col-md-8">
            <div class="about-thumb" style="width: 550px;height: 650px;text-align: center; line-height: 650px;">
                <img src="<?php echo e($module['text_img'] ?  asset('' . $module['text_img']) : asset('assets/admin/img/img-demo.jpg')); ?>" alt="Image">
            </div>
        </div>
    <?php if(app()->getLocale() == 'ar'): ?>
            <h4 class="title"><?php echo e($module['ar_title']); ?></h4>
            <p><?php echo e($module['ar_content']); ?></p>
    <?php else: ?>
            <h4 class="title"><?php echo e($module['title']); ?></h4>
            <p><?php echo e($module['content']); ?></p>
    <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/modules/themes_for_modules/text_content_center.blade.php ENDPATH**/ ?>