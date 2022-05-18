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
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Class Icon')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][class_icon]"
                           placeholder="<?php echo e(__('Class Icon')); ?>" value="<?php echo e($moduleAttributes['class_icon']); ?>"/>
                    <?php if($errors->has('class_icon')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('class_icon')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][heading]"
                           placeholder="<?php echo e(__('Heading')); ?>" value="<?php echo e($moduleAttributes['heading']); ?>">
                    <?php if($errors->has('heading')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('paragraph')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[<?php echo e($randomKey); ?>][section_with_icon][paragraph]" class="form-control" rows="3"
                              placeholder="<?php echo e(__('paragraph')); ?>"><?php echo e($moduleAttributes['paragraph']); ?></textarea>
                    <?php if($errors->has('paragraph')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('paragraph')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?><span
                            class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[<?php echo e($randomKey); ?>][section_with_icon][button_content]"
                           placeholder="<?php echo e(__('Button Content')); ?>" value="<?php echo e($moduleAttributes['button_content']); ?>">
                    <?php if($errors->has('button_content')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_content')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Url')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][section_with_icon][button_url]"
                           placeholder="<?php echo e(__('Button Url')); ?>" value="<?php echo e($moduleAttributes['button_url']); ?>">
                    <?php if($errors->has('button_url')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Class Icon')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[<?php echo e($randNumModule); ?>][section_with_icon][class_icon]"
                           placeholder="<?php echo e(__('Class Icon')); ?>"/>
                    <?php if($errors->has('class_icon')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('class_icon')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][section_with_icon][heading]"
                           placeholder="<?php echo e(__('Heading')); ?>">
                    <?php if($errors->has('heading')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('paragraph')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[<?php echo e($randNumModule); ?>][section_with_icon][paragraph]" class="form-control"
                              rows="3" placeholder="<?php echo e(__('paragraph')); ?>"></textarea>
                    <?php if($errors->has('paragraph')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('paragraph')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?><span
                            class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[<?php echo e($randNumModule); ?>][section_with_icon][button_content]"
                           placeholder="<?php echo e(__('Button Content')); ?>">
                    <?php if($errors->has('button_content')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_content')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Url')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"
                           name="mod[<?php echo e($randNumModule); ?>][section_with_icon][button_url]"
                           placeholder="<?php echo e(__('Button Url')); ?>">
                    <?php if($errors->has('button_url')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div><?php /**PATH F:\wamp64\www\new_vadecom\resources\views/admin/modules/style_of_modules/section_with_icon.blade.php ENDPATH**/ ?>