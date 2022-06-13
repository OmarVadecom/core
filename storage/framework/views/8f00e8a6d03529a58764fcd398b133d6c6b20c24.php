
<div class="col-lg-12">
    <div class="section-title text-center pb-50 pt-50">
        <h2><?php echo e($module['title']); ?></h2>
        <p class="title"><?php echo $module['text']; ?></p>
        <?php if(isset($module)): ?>
            <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                <div class="buttons d-flex mt-4 justify-content-center">
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
    </div>
</div><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/modules/themes_for_modules/text_editor.blade.php ENDPATH**/ ?>