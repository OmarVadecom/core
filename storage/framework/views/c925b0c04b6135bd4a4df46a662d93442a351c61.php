<div class="card">
    <?php
        $randNumModule = \Illuminate\Support\Str::random(10);
    ?>
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Small Icon with Text
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-small-icon-tab" data-toggle="tab" href="#nav-en-small-icon" role="tab" aria-controls="nav-en-small-icon" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-small-icon-tab" data-toggle="tab" href="#nav-ar-small-icon" role="tab" aria-controls="nav-ar-small-icon" aria-selected="false">عربي</a>
            </div>
        </nav>
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-small-icon"  role="tabpanel" aria-labelledby="nav-en-small-icon-tab">
                    
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][class_icon]"
                                placeholder="<?php echo e(__('Image')); ?>" value="<?php echo e($moduleAttributes['class_icon']); ?>"/>
                            <?php if($errors->has('class_icon')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('class_icon')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][heading]"
                                placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e(isset($moduleAttributes['heading']) ? $moduleAttributes['heading'] : ''); ?>">
                            <?php if($errors->has('heading')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Content')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randomKey); ?>][section_with_icon][paragraph]" class="form-control" rows="3"
                                    placeholder="<?php echo e(__('Content')); ?>"><?php echo e(isset($moduleAttributes['paragraph']) ? $moduleAttributes['paragraph'] : ''); ?></textarea>
                            <?php if($errors->has('paragraph')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('paragraph')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Link')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][button_url]"
                                placeholder="<?php echo e(__('Link')); ?>" value="<?php echo e(isset($moduleAttributes['button_url']) ? $moduleAttributes['button_url'] : ''); ?>">
                            <?php if($errors->has('button_url')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-small-icon" role="tabpanel" aria-labelledby="nav-ar-small-icon-tab">
                    
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('الصورة')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][ar_class_icon]"
                                placeholder="<?php echo e(__('الصورة')); ?>" value="<?php echo e(isset($moduleAttributes['ar_class_icon']) ? $moduleAttributes['ar_class_icon'] : ''); ?>"/>
                            <?php if($errors->has('ar_class_icon')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_class_icon')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][ar_heading]"
                                placeholder="<?php echo e(__('العنوان')); ?>" value="<?php echo e(isset($moduleAttributes['ar_heading']) ? $moduleAttributes['ar_heading'] : ''); ?>">
                            <?php if($errors->has('ar_heading')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_heading')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('المحتوي')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randomKey); ?>][section_with_icon][ar_paragraph]" class="form-control" rows="3"
                                    placeholder="<?php echo e(__('المحتوي')); ?>"><?php echo e(isset($moduleAttributes['ar_paragraph']) ? $moduleAttributes['ar_paragraph'] : ''); ?></textarea>
                            <?php if($errors->has('ar_paragraph')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_paragraph')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('الرابط')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][ar_button_url]"
                                placeholder="<?php echo e(__('الرابط')); ?>" value="<?php echo e(isset($moduleAttributes['ar_button_url']) ? $moduleAttributes['ar_button_url'] : ''); ?>">
                            <?php if($errors->has('ar_button_url')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_button_url')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-en-small-icon"  role="tabpanel" aria-labelledby="nav-en-small-icon-tab">
            
                <div class="form-group row my-3">
                    <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="mod[<?php echo e($randNumModule); ?>][section_with_icon][class_icon]"
                            placeholder="<?php echo e(__('Image')); ?>"/>
                        <?php if($errors->has('class_icon')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('class_icon')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][section_with_icon][heading]"
                            placeholder="<?php echo e(__('Title')); ?>">
                        <?php if($errors->has('heading')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"><?php echo e(__('Content')); ?></label>
                    <div class="col-sm-10">
                        <textarea name="mod[<?php echo e($randNumModule); ?>][section_with_icon][paragraph]" class="form-control"
                                rows="3" placeholder="<?php echo e(__('Content')); ?>"></textarea>
                        <?php if($errors->has('paragraph')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('paragraph')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"><?php echo e(__('Link')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="mod[<?php echo e($randNumModule); ?>][section_with_icon][button_url]"
                            placeholder="<?php echo e(__('Link')); ?>">
                        <?php if($errors->has('button_url')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-ar-small-icon" role="tabpanel" aria-labelledby="nav-ar-small-icon-tab">
              
                <div class="form-group row my-3">
                    <label class="col-sm-2 control-label"><?php echo e(__('الصورة')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="mod[<?php echo e($randNumModule); ?>][section_with_icon][ar_class_icon]"
                            placeholder="<?php echo e(__('Image')); ?>"/>
                        <?php if($errors->has('ar_class_icon')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('ar_class_icon')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][section_with_icon][ar_heading]"
                            placeholder="<?php echo e(__('العنوان')); ?>">
                        <?php if($errors->has('ar_heading')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('ar_heading')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"><?php echo e(__('المحتوي')); ?></label>
                    <div class="col-sm-10">
                        <textarea name="mod[<?php echo e($randNumModule); ?>][section_with_icon][ar_paragraph]" class="form-control"
                                rows="3" placeholder="<?php echo e(__('المحتوي')); ?>"></textarea>
                        <?php if($errors->has('ar_paragraph')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('ar_paragraph')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"><?php echo e(__('الرابط')); ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            name="mod[<?php echo e($randNumModule); ?>][section_with_icon][ar_button_url]"
                            placeholder="<?php echo e(__('الرابط')); ?>">
                        <?php if($errors->has('ar_button_url')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('ar_button_url')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/modules/style_of_modules/section_with_icon.blade.php ENDPATH**/ ?>