<div class="card">
    <?php
        $randNumModule = \Illuminate\Support\Str::random(10);
    ?>
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Text with Image (Left)
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <img
                        src="<?php echo e(isset($moduleAttributes['image']) ? asset('assets/front/img/text_with_left_image/' . $moduleAttributes['image']) : asset('assets/admin/img/img-demo.jpg')); ?>"
                        class="mw-400 mb-3 show-img img-demo"
                        alt=""
                    >
                    <div class="custom-file">
                        <label
                            class="custom-file-label"
                            for="image"
                        ><?php echo e(__('Choose Image')); ?></label>
                        <input
                            name="images[<?php echo e($randomKey); ?>][text_with_left_image][imageFile]"
                            class="custom-file-input up-img"
                            type="file"
                            id="image"
                        />
                        <input
                            name="mod[<?php echo e($randomKey); ?>][text_with_left_image][image]"
                            value="<?php echo e(isset($moduleAttributes['image'])); ?>"
                            class="file-image-value"
                            type="hidden"
                        />
                    </div>
                    <?php if($errors->has('image')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input
                        name="mod[<?php echo e($randomKey); ?>][text_with_left_image][heading]"
                        value="<?php echo e(isset($moduleAttributes['heading'])); ?>"
                        placeholder="<?php echo e(__('Heading')); ?>"
                        class="form-control"
                        type="text"
                    />
                    <?php if($errors->has('heading')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label">
                    <?php echo e(__('paragraph')); ?>

                    <span class="text-danger">*</span>
                </label>
                <div class="col-sm-10">
                    <textarea
                        name="mod[<?php echo e($randomKey); ?>][text_with_left_image][paragraph]"
                        placeholder="<?php echo e(__('paragraph')); ?>"
                        class="form-control"
                        rows="3"
                    ><?php echo e(isset($moduleAttributes['paragraph']) ? $moduleAttributes['paragraph'] : ''); ?></textarea>
                    <?php if($errors->has('paragraph')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('paragraph')); ?> </p>
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
                                        name="mod[<?php echo e($randomKey); ?>][text_with_left_image][red_button][text]"
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
                                        name="mod[<?php echo e($randomKey); ?>][text_with_left_image][red_button][url]"
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
                                        name="mod[<?php echo e($randomKey); ?>][text_with_left_image][yellow_button][text]"
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
                                        name="mod[<?php echo e($randomKey); ?>][text_with_left_image][yellow_button][url]"
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
                <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <img class="mw-400 mb-3 show-img img-demo d-block" src="<?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                    <div class="custom-file">
                        <label class="custom-file-label" for="image"><?php echo e(__('Choose Image')); ?></label>
                        <input type="file" class="custom-file-input up-img" name="images[<?php echo e($randNumModule); ?>][text_with_left_image][imageFile]" id="image">
                        <input type="hidden" class="file-image-value" name="mod[<?php echo e($randNumModule); ?>][text_with_left_image][image]" value="">
                    </div>
                    <?php if($errors->has('image')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('Heading')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][text_with_left_image][heading]" placeholder="<?php echo e(__('Heading')); ?>" >
                    <?php if($errors->has('heading')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('heading')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 control-label"><?php echo e(__('paragraph')); ?><span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <textarea name="mod[<?php echo e($randNumModule); ?>][text_with_left_image][paragraph]" class="form-control"  rows="3" placeholder="<?php echo e(__('paragraph')); ?>" ></textarea>
                    <?php if($errors->has('paragraph')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('paragraph')); ?> </p>
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
                                        name="mod[<?php echo e($randNumModule); ?>][text_with_left_image][red_button][text]"
                                        placeholder="Red Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="red-button-url">
                                    <input
                                        name="mod[<?php echo e($randNumModule); ?>][text_with_left_image][red_button][url]"
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
                                        name="mod[<?php echo e($randNumModule); ?>][text_with_left_image][yellow_button][text]"
                                        placeholder="Yellow Button Text"
                                        class="form-control"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="yellow-button-url">
                                    <input
                                        name="mod[<?php echo e($randNumModule); ?>][text_with_left_image][yellow_button][url]"
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
<div class="clearfix"></div><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/modules/style_of_modules/text_with_left_image.blade.php ENDPATH**/ ?>