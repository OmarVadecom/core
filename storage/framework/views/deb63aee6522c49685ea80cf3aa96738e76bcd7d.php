<div class="card">
    <?php
        $randNumModule = \Illuminate\Support\Str::random(10);
    ?>
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Text Content
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Text')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[<?php echo e($randomKey); ?>][text_editor][text]"
                        class="form-control summernote"
                        placeholder="<?php echo e(__('Text')); ?>"
                        rows="3"
                    ><?php echo e($moduleAttributes['text']); ?></textarea>
                    <?php if($errors->has('text')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('text')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">
                    Red Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="red-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="red-button-text">
                                    <input
                                        name="mod[<?php echo e($randomKey); ?>][text_editor][red_button][text]"
                                        value="<?php echo e(isset($moduleAttributes['red_button']['name']) ? $moduleAttributes['red_button']['text'] : ''); ?>"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[<?php echo e($randomKey); ?>][text_editor][red_button][url]"
                                        value="<?php echo e(isset($moduleAttributes['red_button']['url']) ? $moduleAttributes['red_button']['url'] : ''); ?>"
                                        placeholder="Red Button Url"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">
                    Yellow Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[<?php echo e($randomKey); ?>][text_editor][yellow_button][text]"
                                        value="<?php echo e(isset($moduleAttributes['yellow_button']['name']) ? $moduleAttributes['yellow_button']['text'] : ''); ?>"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[<?php echo e($randomKey); ?>][text_editor][yellow_button][url]"
                                        value="<?php echo e(isset($moduleAttributes['yellow_button']['url']) ? $moduleAttributes['yellow_button']['url'] : ''); ?>"
                                        placeholder="Yellow Button Url"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Text')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[<?php echo e($randNumModule); ?>][text_editor][text]"
                        class="form-control summernote"
                        placeholder="<?php echo e(__('Text')); ?>"
                        rows="3"
                    ></textarea>
                    <?php if($errors->has('text')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('text')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">
                    Red Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="red-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="red-button-text">
                                    <input
                                        name="mod[<?php echo e($randNumModule); ?>][text_editor][red_button][text]"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[<?php echo e($randNumModule); ?>][text_editor][red_button][url]"
                                        placeholder="Red Button Url"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">
                    Yellow Button
                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <div class="yellow-button-text-url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="yellow-button-text">
                                    <input
                                        name="mod[<?php echo e($randNumModule); ?>][text_editor][yellow_button][text]"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[<?php echo e($randNumModule); ?>][text_editor][yellow_button][url]"
                                        placeholder="Yellow Button Url"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/modules/style_of_modules/text_editor.blade.php ENDPATH**/ ?>