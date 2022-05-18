
<div class="col-lg-12">
    <div class="section-title text-center pb-50 pt-50">
        <span class="title-tag"><?php echo e($module['title']); ?></span>
        <h2 class="title"><?php echo e($module['paragraph']); ?></h2>
    </div>
    <?php if(isset($module)): ?>
        <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
            <div class="buttons d-flex justify-content-center">
                <?php if(isset($module['red_button']) && $module['red_button']['url'] != null && $module['red_button']['text'] != null): ?>
                    <div class="red-button mr-2">
                        <a
                            href="<?php echo e($module['red_button']['url']); ?>"
                            class="red-btn-module btn-module"
                        ><?php echo e($module['red_button']['text']); ?></a>
                    </div>
                <?php endif; ?>
                <?php if(isset($module['yellow_button']) && $module['yellow_button']['url'] != null && $module['yellow_button']['text'] != null): ?>
                    <div class="yellow-button">
                        <a
                            href="<?php echo e($module['yellow_button']['url']); ?>"
                            class="yellow-btn-module btn-module"
                        ><?php echo e($module['yellow_button']['text']); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div><?php /**PATH F:\wamp64\www\new_vadecom\resources\views/admin/modules/themes_for_modules/title_paragraph.blade.php ENDPATH**/ ?>