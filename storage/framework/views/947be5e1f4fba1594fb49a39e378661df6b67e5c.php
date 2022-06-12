<div class="col-sm-12">
    <section class="about-section section-gap" style="padding-bottom: 185px">
        <div class="container">
            <?php if(app()->getLocale() == 'ar'): ?>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about-thumb" style="width: 550px;height: 650px;text-align: center; line-height: 650px;">
                            <img src="<?php echo e($module['ar_image'] ? asset('assets/front/img/text_with_left_image/' . $module['ar_image']) : asset('assets/admin/img/img-demo.jpg')); ?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="about-text-block pl-lg-5 mt-md-gap-60">
                            <div class="section-title mb-10">
                                <h2 class="title"><?php echo e($module['ar_title']); ?></h2>
                                <?php if(isset($module['ar_title_2'])): ?>
                                <h4 class=""><?php echo e($module['ar_title_2']); ?></h4>
                                <?php endif; ?>
                            </div>
                            <p><?php echo e($module['ar_content']); ?></p>
                        </div>
                        <?php if(isset($module)): ?>
                            <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                                <div class="buttons d-flex mt-4">
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
                </div>
            <?php else: ?>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about-thumb" style="width: 550px;height: 650px;text-align: center; line-height: 650px;">
                            <img src="<?php echo e($module['image'] ? asset('assets/front/img/text_with_left_image/' . $module['image']) : asset('assets/admin/img/img-demo.jpg')); ?>" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="about-text-block pl-lg-5 mt-md-gap-60">
                            <div class="section-title mb-10">
                                <h2 class="title"><?php echo e($module['title']); ?></h2>
                                <?php if(isset($module['title_2'])): ?>
                                <h4 class=""><?php echo e($module['title_2']); ?></h4>
                                <?php endif; ?>
                            </div>
                            <p><?php echo e($module['content']); ?></p>
                        </div>
                        <?php if(isset($module)): ?>
                            <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                                <div class="buttons d-flex mt-4">
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
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>
<?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/modules/themes_for_modules/bannar.blade.php ENDPATH**/ ?>