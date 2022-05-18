<div class="card">
    <?php
        $randNumModule = \Illuminate\Support\Str::random(10);
    ?>
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Call to Action
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][heading]" placeholder="<?php echo e(__('Heading')); ?>" value="<?php echo e($moduleAttributes['heading']); ?>" >
                    <?php if($errors->has('heading')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][button_content]" placeholder="<?php echo e(__('Button Content')); ?>" value="<?php echo e($moduleAttributes['button_content']); ?>" >
                    <?php if($errors->has('button_content')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_content')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Url')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][button_url]" placeholder="<?php echo e(__('Button Url')); ?>" value="<?php echo e($moduleAttributes['button_url']); ?>" >
                    <?php if($errors->has('button_url')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][heading]" placeholder="<?php echo e(__('Heading')); ?>" >
                    <?php if($errors->has('heading')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][button_content]" placeholder="<?php echo e(__('Button Content')); ?>" >
                    <?php if($errors->has('button_content')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_content')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Button Url')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][button_url]" placeholder="<?php echo e(__('Button Url')); ?>" >
                    <?php if($errors->has('button_url')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div><?php /**PATH F:\wamp64\www\new_vadecom\resources\views/admin/modules/style_of_modules/call_to_action.blade.php ENDPATH**/ ?>