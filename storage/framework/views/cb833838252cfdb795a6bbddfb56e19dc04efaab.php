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
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-text-content-tab" data-toggle="tab" href="#nav-en-text-content" role="tab" aria-controls="nav-en-text-content" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-text-content-tab" data-toggle="tab" href="#nav-ar-text-content" role="tab" aria-controls="nav-ar-text-content" aria-selected="false">عربي</a>
            </div>
        </nav>
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-text-content"  role="tabpanel" aria-labelledby="nav-en-text-content-tab">
                    
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                        <div class="col-sm-10">
                            <input
                                name="mod[<?php echo e($randomKey); ?>][text_editor][title]"
                                value=" <?php echo e(isset($moduleAttributes['title']) ? $moduleAttributes['title'] : ''); ?>"
                                placeholder="<?php echo e(__('Title')); ?>"
                                class="form-control"
                                type="text"
                            />
                            <?php if($errors->has('title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Text')); ?></label>
                        <div class="col-sm-10">
                            <textarea
                                name="mod[<?php echo e($randomKey); ?>][text_editor][text]"
                                id="editor1"
                                class="form-control summernote"
                                placeholder="<?php echo e(__('Text')); ?>"
                                rows="3"
                            ><?php echo e(isset($moduleAttributes['text']) ? $moduleAttributes['text'] : ''); ?></textarea>
                            <?php if($errors->has('text')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('text')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="red-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="red-button-text">
                                            <input
                                                name="mod[<?php echo e($randomKey); ?>][text_editor][red_button][text]"
                                                value="<?php echo e(isset($moduleAttributes['red_button']['text']) ? $moduleAttributes['red_button']['text'] : ''); ?>"
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
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="yellow-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="yellow-button-text">
                                            <input
                                                name="mod[<?php echo e($randomKey); ?>][text_editor][yellow_button][text]"
                                                value="<?php echo e(isset($moduleAttributes['yellow_button']['text']) ? $moduleAttributes['yellow_button']['text'] : ''); ?>"
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
                </div>

                <div class="tab-pane fade" id="nav-ar-text-content" role="tabpanel" aria-labelledby="nav-ar-text-content-tab">
                    
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        <div class="col-sm-10">
                            <input
                                name="mod[<?php echo e($randomKey); ?>][text_editor][ar_title]"
                                value=" <?php echo e(isset($moduleAttributes['ar_title']) ? $moduleAttributes['ar_title'] : ''); ?>"
                                placeholder="<?php echo e(__('العنوان')); ?>"
                                class="form-control"
                                type="text"
                            />
                            <?php if($errors->has('ar_title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('النص')); ?></label>
                        <div class="col-sm-10">
                            <textarea
                                name="mod[<?php echo e($randomKey); ?>][text_editor][ar_text]"
                                id="editor1"
                                class="form-control summernote"
                                placeholder="<?php echo e(__('النص')); ?>"
                                rows="3"
                            ><?php echo e(isset($moduleAttributes['ar_text']) ? $moduleAttributes['ar_text'] : ''); ?></textarea>
                            <?php if($errors->has('ar_text')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_text')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="red-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="red-button-text">
                                            <input
                                                name="mod[<?php echo e($randomKey); ?>][text_editor][red_button][ar_text]"
                                                value="<?php echo e(isset($moduleAttributes['red_button']['ar_text']) ? $moduleAttributes['red_button']['ar_text'] : ''); ?>"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[<?php echo e($randomKey); ?>][text_editor][red_button][ar_url]"
                                                value="<?php echo e(isset($moduleAttributes['red_button']['ar_url']) ? $moduleAttributes['red_button']['ar_url'] : ''); ?>"
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
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="yellow-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="yellow-button-text">
                                            <input
                                                name="mod[<?php echo e($randomKey); ?>][text_editor][yellow_button][ar_text]"
                                                value="<?php echo e(isset($moduleAttributes['yellow_button']['ar_text']) ? $moduleAttributes['yellow_button']['ar_text'] : ''); ?>"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[<?php echo e($randomKey); ?>][text_editor][yellow_button][ar_url]"
                                                value="<?php echo e(isset($moduleAttributes['yellow_button']['ar_url']) ? $moduleAttributes['yellow_button']['ar_url'] : ''); ?>"
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
                </div>
            </div>
        <?php else: ?>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-en-text-content"  role="tabpanel" aria-labelledby="nav-en-text-content-tab">
            
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                        <div class="col-sm-10">
                            <input
                                name="mod[<?php echo e($randNumModule); ?>][text_editor][title]"
                                
                                placeholder="<?php echo e(__('Title')); ?>"
                                class="form-control"
                                type="text"
                            />
                            <?php if($errors->has('title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Text')); ?></label>
                        <div class="col-sm-10">
                            <textarea
                                name="mod[<?php echo e($randNumModule); ?>][text_editor][text]"
                                class="form-control"
                                placeholder="<?php echo e(__('النص')); ?>"
                                rows="3"
                                id="editor1"
                            ></textarea>
                            <?php if($errors->has('text')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('text')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
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
                </div>
                <div class="tab-pane fade" id="nav-ar-text-content" role="tabpanel" aria-labelledby="nav-ar-text-content-tab">
             
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        <div class="col-sm-10">
                            <input
                                name="mod[<?php echo e($randNumModule); ?>][text_editor][ar_title]"
                                
                                placeholder="<?php echo e(__('العنوان')); ?>"
                                class="form-control"
                                type="text"
                            />
                            <?php if($errors->has('ar_title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('النص')); ?></label>
                        <div class="col-sm-10">
                            <textarea
                                name="mod[<?php echo e($randNumModule); ?>][text_editor][ar_text]"
                                class="form-control"
                                placeholder="<?php echo e(__('النص')); ?>"
                                rows="3"
                                id="editor1"
                            ></textarea>
                            <?php if($errors->has('ar_text')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_text')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">
                            Red Button
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="red-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="red-button-text">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][text_editor][red_button][ar_text]"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][text_editor][red_button][ar_url]"
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
                            
                        </label>
                        <div class="col-sm-10">
                            <div class="yellow-button-text-url">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="yellow-button-text">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][text_editor][yellow_button][ar_text]"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][text_editor][yellow_button][ar_url]"
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
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div>
<?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/modules/style_of_modules/text_editor.blade.php ENDPATH**/ ?>