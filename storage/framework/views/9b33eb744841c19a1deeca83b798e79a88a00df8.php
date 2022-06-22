<div class="col-sm-12 m-0 p-0">
    <section class="about-section " >
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 col-md-12 m-0 p-0">
                    <div class="about-thumb">
                    <?php if(isset($module['bannar_type_en'])): ?>
                        <?php if($module['bannar_type_en'] == 'b_1' ): ?>
                            <div class="page-title-area" style="background-image: url('<?php echo e($module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png')); ?>" alt="broken Image">
                            
                            <?php if(app()->getLocale() == 'ar'): ?>
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title"><?php echo e($module['ar_title']); ?></h2>
                                        </div>
                                        <p><?php echo e($module['ar_content']); ?></p>
                                    </div>
                                    <?php if(isset($module)): ?>
                                        <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                                            <div class="buttons d-flex mt-4 justify-content-center">
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
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title"><?php echo e($module['title']); ?></h2>
                                        </div>
                                        <p><?php echo e($module['content']); ?></p>
                                    </div>
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
                            <?php endif; ?>
                            </div>
                        <?php elseif($module['bannar_type_en'] == 'b_2'): ?>
                            <div class="page-title-area " style="background-image: url('<?php echo e($module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png')); ?>" alt="broken Image">
                            
                            <?php if(app()->getLocale() == 'ar'): ?>
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title"><?php echo e($module['ar_title']); ?></h2>
                                        </div>
                                        <p><?php echo e($module['ar_content']); ?></p>
                                    </div>
                                    <?php if(isset($module)): ?>
                                        <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                                            <div class="buttons d-flex mt-4 justify-content-center">
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
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title"><?php echo e($module['title']); ?></h2>
                                        </div>
                                        <p><?php echo e($module['content']); ?></p>
                                    </div>
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
                            <?php endif; ?>
                            </div>
                        <?php elseif($module['bannar_type_en'] == 'b_3'): ?>
                            <div class="page-title-area text-right" style="background-image: url('<?php echo e($module['image'] ? asset('' . $module['image']) : asset('assets/front/images/ss.png')); ?>" alt="broken Image">
                            
                            <?php if(app()->getLocale() == 'ar'): ?>
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title"><?php echo e($module['ar_title']); ?></h2>
                                        </div>
                                        <p><?php echo e($module['ar_content']); ?></p>
                                    </div>
                                    <?php if(isset($module)): ?>
                                        <?php if(isset($module['red_button']) || isset($module['yellow_button'])): ?>
                                            <div class="buttons d-flex mt-4 justify-content-center">
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
                                <div class="col-lg-12 col-md-10">
                                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                                        <div class="section-title mb-40">
                                            <h2 class="title"><?php echo e($module['title']); ?></h2>
                                        </div>
                                        <p><?php echo e($module['content']); ?></p>
                                    </div>
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
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
























<?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/modules/themes_for_modules/bannar.blade.php ENDPATH**/ ?>