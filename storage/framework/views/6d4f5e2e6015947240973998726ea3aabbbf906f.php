<div class="col-sm-12">
    <section class="about-section section-gap" style="margin-bottom: 70px">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="about-thumb about-thumb-right" style="width: 550px;height: 650px; text-align: center; line-height: 650px;">
                        <img
                            src="<?php echo e(isset($module['image']) ? asset('' . $module['image'])  : asset('assets/admin/img/img-demo.jpg')); ?>"
                            alt="Image"
                        />
                    </div>
                </div>
            <?php if(app()->getLocale() == 'ar'): ?>
                    <div class="col-lg-6 col-md-10">
                        <div class="about-text-block pl-lg-5 mt-md-gap-60">
                            <div class="section-title mb-40">
                                <h2 class="title"><?php echo e(isset($module['ar_heading']) ? $module['ar_heading'] : ''); ?></h2>
                            </div>
                            <p class="module-text"><?php echo e(isset($module['ar_paragraph']) ? $module['ar_paragraph'] : ''); ?></p>
                        </div>
                        <?php if(isset($module)): ?>
                            <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                                <div class="buttons pl-lg-5 d-flex mt-4">
                                    <?php if(isset($module['red_button']) && $module['red_button']['ar_url'] != null && $module['red_button']['ar_text'] != null): ?>
                                        <div class="red-button mr-2">
                                            <a
                                                href="<?php echo e($module['red_button']['ar_url']); ?>"
                                                class="red-btn-module btn-module"
                                            ><?php echo e($module['red_button']['ar_text']); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(isset($module['yellow_button']) && $module['yellow_button']['ar_url'] != null && $module['yellow_button']['ar_text'] != null): ?>
                                        <div class="yellow-button">
                                            <a
                                                href="<?php echo e($module['yellow_button']['ar_url']); ?>"
                                                class="yellow-btn-module btn-module"
                                            ><?php echo e($module['yellow_button']['ar_text']); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div> 
            <?php else: ?>
                    <div class="col-lg-6 col-md-10">
                        <div class="about-text-block pl-lg-5 mt-md-gap-60">
                            <div class="section-title mb-40">
                                <h2 class="title"><?php echo e(isset($module['heading']) ? $module['heading'] : ''); ?></h2>
                            </div>
                            <p class="module-text"><?php echo e(isset($module['paragraph']) ? $module['paragraph'] : ''); ?></p>
                        </div>
                        <?php if(isset($module)): ?>
                            <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                                <div class="buttons pl-lg-5 d-flex mt-4">
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
            <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/modules/themes_for_modules/text_with_right_image.blade.php ENDPATH**/ ?>