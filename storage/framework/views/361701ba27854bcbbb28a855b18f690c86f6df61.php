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
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-call-to-action-tab" data-toggle="tab" href="#nav-en-call-to-action" role="tab" aria-controls="nav-en-call-to-action" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-call-to-action-tab" data-toggle="tab" href="#nav-ar-call-to-action" role="tab" aria-controls="nav-ar-call-to-action" aria-selected="false">عربي</a>
            </div>
        </nav>
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-call-to-action"  role="tabpanel" aria-labelledby="nav-en-call-to-action-tab">
                
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][heading]" placeholder="<?php echo e(__('Heading')); ?>" value="<?php echo e(isset($moduleAttributes['heading']) ? $moduleAttributes['heading'] : ''); ?>" >
                            <?php if($errors->has('heading')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][button_content]" placeholder="<?php echo e(__('Button Content')); ?>" value="<?php echo e(isset($moduleAttributes['button_content']) ? $moduleAttributes['button_content'] : ''); ?>" >
                            <?php if($errors->has('button_content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('button_content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Button Url')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][button_url]" placeholder="<?php echo e(__('Button Url')); ?>" value="<?php echo e(isset($moduleAttributes['button_url']) ? $moduleAttributes['button_url'] : ''); ?>" >
                            <?php if($errors->has('button_url')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                
                </div>

                <div class="tab-pane fade" id="nav-ar-call-to-action" role="tabpanel" aria-labelledby="nav-ar-call-to-action-tab">

                
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][ar_heading]" placeholder="<?php echo e(__('العنوان')); ?>" value="<?php echo e(isset($moduleAttributes['ar_heading']) ? $moduleAttributes['ar_heading'] : ''); ?>" >
                            <?php if($errors->has('ar_heading')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_heading')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][ar_button_content]" placeholder="<?php echo e(__('Button Content')); ?>" value="<?php echo e(isset($moduleAttributes['ar_button_content']) ? $moduleAttributes['ar_button_content'] : ''); ?>" >
                            <?php if($errors->has('ar_button_content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_button_content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('الرابط')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][call_to_action][ar_button_url]" placeholder="<?php echo e(__('الرابط')); ?>" value="<?php echo e(isset($moduleAttributes['ar_button_url']) ? $moduleAttributes['ar_button_url'] : ''); ?>" >
                            <?php if($errors->has('ar_button_url')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_button_url')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-call-to-action"  role="tabpanel" aria-labelledby="nav-en-call-to-action-tab">
            
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][heading]" placeholder="<?php echo e(__('Heading')); ?>" >
                            <?php if($errors->has('heading')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][button_content]" placeholder="<?php echo e(__('Button Content')); ?>" >
                            <?php if($errors->has('button_content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('button_content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Button Url')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][button_url]" placeholder="<?php echo e(__('Button Url')); ?>" >
                            <?php if($errors->has('button_url')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('button_url')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-call-to-action" role="tabpanel" aria-labelledby="nav-ar-call-to-action-tab">
            
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][ar_heading]" placeholder="<?php echo e(__('العنوان')); ?>" >
                            <?php if($errors->has('ar_heading')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_heading')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Button Content')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][ar_button_content]" placeholder="<?php echo e(__('Button Content')); ?>" >
                            <?php if($errors->has('ar_button_content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_button_content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('الرابط')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][call_to_action][ar_button_url]" placeholder="<?php echo e(__('الرابط')); ?>" >
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
<div class="clearfix"></div><?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/modules/style_of_modules/call_to_action.blade.php ENDPATH**/ ?>