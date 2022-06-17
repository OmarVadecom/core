<div class="card">
    <?php
        $randNumModule = \Illuminate\Support\Str::random(10);
    ?>
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Text Content Center
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-text-content-center-tab" data-toggle="tab" href="#nav-en-text-content-center" role="tab" aria-controls="nav-en-text-content-center" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-text-content-center-tab" data-toggle="tab" href="#nav-ar-text-content-center" role="tab" aria-controls="nav-ar-text-content-center" aria-selected="false">عربي</a>
            </div>
        </nav>
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>


            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-text-content-center"  role="tabpanel" aria-labelledby="nav-en-text-content-center-tab">
            
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?></label>
                        <div class="col-sm-10">
                            <img
                                src="<?php echo e(isset($moduleAttributes['text_img']) ? asset('assets/front/img/text_content_center/' . $moduleAttributes['text_img']) : asset('assets/admin/img/img-demo.jpg')); ?>"
                                class="mw-400 mb-3 show-img img-demo"
                                alt=""
                            >
                            <div class="custom-file">
                                <label
                                    class="custom-file-label"
                                    for="image"
                                ><?php echo e(__('Choose Image')); ?></label>
                                <input
                                    name="images[<?php echo e($randomKey); ?>][text_content_center][text_imageFile]"
                                    class="custom-file-input up-img"
                                    type="file"
                                    id="image"
                                />
                                <input
                                    name="mod[<?php echo e($randomKey); ?>][text_content_center][text_img]"
                                    value="<?php echo e(isset($moduleAttributes['text_img']) ? asset('assets/front/img/text_content_center/' . $moduleAttributes['text_img']) : asset('assets/admin/img/img-demo.jpg')); ?>"
                                    class="file-image-value"
                                    type="hidden"
                                />
                            </div>
                            <?php if($errors->has('text_img')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('text_img')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][text_content_center][title]"
                                placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e(isset($moduleAttributes['title']) ? $moduleAttributes['title'] : ''); ?>">
                            <?php if($errors->has('title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Content')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randomKey); ?>][text_content_center][content]" class="form-control" rows="3"
                                    placeholder="<?php echo e(__('Content')); ?>"><?php echo e(isset($moduleAttributes['content']) ? $moduleAttributes['content'] : ''); ?></textarea>
                            <?php if($errors->has('content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-text-content-center" role="tabpanel" aria-labelledby="nav-ar-text-content-center-tab">
           
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('الصورة')); ?></label>
                        <div class="col-sm-10">
                            <img
                                src="<?php echo e(isset($moduleAttributes['ar_text_img']) ? asset('assets/front/img/text_content_center/' . $moduleAttributes['ar_text_img']) : asset('assets/admin/img/img-demo.jpg')); ?>"
                                class="mw-400 mb-3 show-img img-demo"
                                alt=""
                            >
                            <div class="custom-file">
                                <label
                                    class="custom-file-label"
                                    for="image"
                                ><?php echo e(__('Choose Image')); ?></label>
                                <input
                                    name="images[<?php echo e($randomKey); ?>][text_content_center][ar_text_imageFile]"
                                    class="custom-file-input up-img"
                                    type="file"
                                    id="image"
                                />
                                <input
                                    name="mod[<?php echo e($randomKey); ?>][text_content_center][ar_text_img]"
                                    value="<?php echo e(isset($moduleAttributes['ar_text_img']) ? asset('assets/front/img/text_content_center/' . $moduleAttributes['ar_text_img']) : asset('assets/admin/img/img-demo.jpg')); ?>"
                                    class="file-image-value"
                                    type="hidden"
                                />
                            </div>
                            <?php if($errors->has('ar_text_img')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_text_img')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randomKey); ?>][text_content_center][ar_title]"
                                placeholder="<?php echo e(__('العنوان')); ?>" value="<?php echo e(isset($moduleAttributes['ar_title']) ? $moduleAttributes['ar_title'] : ''); ?>">
                            <?php if($errors->has('ar_title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('المحتوي')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randomKey); ?>][text_content_center][ar_content]" class="form-control" rows="3"
                                    placeholder="<?php echo e(__('المحتوي')); ?>"><?php echo e(isset($moduleAttributes['ar_content']) ? $moduleAttributes['ar_content'] : ''); ?></textarea>
                            <?php if($errors->has('ar_content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-text-content-center"  role="tabpanel" aria-labelledby="nav-en-text-content-center-tab">
             
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?></label>
                        <div class="col-sm-10">
                            <img class="mw-400 mb-3 show-img img-demo d-block" src="<?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                            <div class="custom-file">
                                <label class="custom-file-label" for="image"><?php echo e(__('Choose Image')); ?></label>
                                <input type="file" class="custom-file-input up-img" name="images[<?php echo e($randNumModule); ?>][text_content_center][text_imageFile]" id="image">
                                <input type="hidden" class="file-image-value" name="mod[<?php echo e($randNumModule); ?>][text_content_center][text_img]" value="">
                            </div>
                            <?php if($errors->has('image')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][text_content_center][title]"
                                placeholder="<?php echo e(__('Title')); ?>">
                            <?php if($errors->has('title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Content')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randNumModule); ?>][text_content_center][content]" class="form-control"
                                    rows="3" placeholder="<?php echo e(__('Content')); ?>"></textarea>
                            <?php if($errors->has('content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-ar-text-content-center" role="tabpanel" aria-labelledby="nav-ar-text-content-center-tab">
            
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('الصورة')); ?></label>
                        <div class="col-sm-10">
                            <img class="mw-400 mb-3 show-img img-demo d-block" src="<?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                            <div class="custom-file">
                                <label class="custom-file-label" for="image"><?php echo e(__('Choose Image')); ?></label>
                                <input type="file" class="custom-file-input up-img" name="images[<?php echo e($randNumModule); ?>][text_content_center][ar_text_imageFile]" id="image">
                                <input type="hidden" class="file-image-value" name="mod[<?php echo e($randNumModule); ?>][text_content_center][ar_text_img]" value="">
                            </div>
                            <?php if($errors->has('ar_text_img')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_text_img')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][text_content_center][ar_title]"
                                placeholder="<?php echo e(__('العنوان')); ?>">
                            <?php if($errors->has('ar_title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('المحتوي')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randNumModule); ?>][text_content_center][ar_content]" class="form-control"
                                    rows="3" placeholder="<?php echo e(__('المحتوي')); ?>"></textarea>
                            <?php if($errors->has('ar_content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_content')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div><?php /**PATH C:\laragon\www\core\resources\views/admin/modules/style_of_modules/text_content_center.blade.php ENDPATH**/ ?>