
<div class="card">
    <?php
        $randNumModule = \Illuminate\Support\Str::random(10);
    ?>
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Bannar
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="col-md-6 nav-item nav-link active" id="nav-en-bannar-tab" data-toggle="tab" href="#nav-en-bannar" role="tab" aria-controls="nav-en-bannar" aria-selected="true">English</a>
              <a class="col-md-6 nav-item nav-link" id="nav-ar-bannar-tab" data-toggle="tab" href="#nav-ar-bannar" role="tab" aria-controls="nav-ar-bannar" aria-selected="false">عربي</a>
            </div>
        </nav>
        <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>


        <div class="tab-content" id="nav-tabContent">
            <div class="form-group row my-3">        
                <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?></label>
                <div class="col-sm-10">
                        <input
                            name="mod[<?php echo e($randomKey); ?>][bannar][image]"
                            class="form-control"
                            type="text"
                            id="image"
                            value="<?php echo e(isset($moduleAttributes['image']) ? $moduleAttributes['image'] : ''); ?>"
                        />
                    <?php if($errors->has('image')): ?>
                        <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                    <?php endif; ?>
                </div>
            </div>
             <div class="tab-pane fade show active" id="nav-en-bannar"  role="tabpanel" aria-labelledby="nav-en-bannar-tab">
                
                <div class="form-group row my-3">   
                    <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                    <div class="col-sm-10">
                        <input
                            name="mod[<?php echo e($randomKey); ?>][bannar][title]"
                            value="<?php echo e(isset($moduleAttributes['title']) ? $moduleAttributes['title'] : ''); ?>"
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
                    <label class="col-sm-2 control-label"><?php echo e(__('Title2')); ?></label>
                    <div class="col-sm-10">
                        <input
                            name="mod[<?php echo e($randomKey); ?>][bannar][title_2]"
                            value="<?php echo e(isset($moduleAttributes['title_2']) ? $moduleAttributes['title_2'] : ''); ?>"
                            placeholder="<?php echo e(__('Title2')); ?>"
                            class="form-control"
                            type="text"
                        />
                        <?php if($errors->has('title_2')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('title_2')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">   
                    <label class="col-sm-2 control-label">
                        <?php echo e(__('Content')); ?>

                        
                    </label>
                    <div class="col-sm-10">
                        <textarea
                            name="mod[<?php echo e($randomKey); ?>][bannar][content]"
                            placeholder="<?php echo e(__('content')); ?>"
                            class="form-control"
                            rows="3"
                        ><?php echo e(isset($moduleAttributes['content']) ? $moduleAttributes['content'] : ''); ?></textarea>
                        <?php if($errors->has('content')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('paragraph')); ?> </p>
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][red_button][text]"
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][red_button][url]"
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][yellow_button][text]"
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][yellow_button][url]"
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
                <div class="form-group row">
                    <div class="col-md-8">
                        <label for="title">Choose Style</label>
                        <select name="mod[<?php echo e($randomKey); ?>][bannar][bannar_type_en]" class="form-control">
                            <option value="">Choose Style</option>
                            <option value="b_1" <?php echo e(($moduleAttributes['bannar_type_en'] == 'b_1') ? 'selected' : ''); ?> >Style 1 </option>
                            <option value="b_2" <?php echo e(($moduleAttributes['bannar_type_en'] == 'b_2') ? 'selected' : ''); ?>>Style 2</option>
                            <option value="b_3" <?php echo e(($moduleAttributes['bannar_type_en'] == 'b_3') ? 'selected' : ''); ?>>Style 3</option>
                            <option value="b_4" <?php echo e(($moduleAttributes['bannar_type_en'] == 'b_4') ? 'selected' : ''); ?>>Style 4</option>
                        </select>
                    </div>
                </div>
             </div>
            <div class="tab-pane fade" id="nav-ar-bannar" role="tabpanel" aria-labelledby="nav-ar-bannar-tab">
                
                
                <div class="form-group row my-3">
                    <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                    <div class="col-sm-10">
                        <input
                            name="mod[<?php echo e($randomKey); ?>][bannar][ar_title]"
                            value="<?php echo e(isset($moduleAttributes['ar_title']) ? $moduleAttributes['ar_title'] : ''); ?>"
                            placeholder="<?php echo e(__('Title')); ?>"
                            class="form-control"
                            type="text"
                        />
                        <?php if($errors->has('ar_title')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label"><?php echo e(__('2العنوان')); ?></label>
                    <div class="col-sm-10">
                        <input
                            name="mod[<?php echo e($randomKey); ?>][bannar][ar_title_2]"
                            value="<?php echo e(isset($moduleAttributes['ar_title_2']) ? $moduleAttributes['ar_title_2'] : ''); ?>"
                            placeholder="<?php echo e(__('Title2')); ?>"
                            class="form-control"
                            type="text"
                        />
                        <?php if($errors->has('ar_title_2')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('ar_title_2')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 control-label">
                        <?php echo e(__('المحتوي')); ?>

                        
                    </label>
                    <div class="col-sm-10">
                        <textarea
                            name="mod[<?php echo e($randomKey); ?>][bannar][ar_content]"
                            placeholder="<?php echo e(__('ar_content')); ?>"
                            class="form-control"
                            rows="3"
                        ><?php echo e(isset($moduleAttributes['ar_content']) ? $moduleAttributes['ar_content'] : ''); ?></textarea>
                        <?php if($errors->has('ar_content')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('ar_content')); ?> </p>
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][red_button][ar_text]"
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][red_button][ar_url]"
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][yellow_button][ar_text]"
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
                                            name="mod[<?php echo e($randomKey); ?>][bannar][yellow_button][ar_url]"
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
                <div class="form-group row">
                    <div class="col-md-8">
                        <label for="title">Choose Style</label>
                        <select name="mod[<?php echo e($randomKey); ?>][bannar][bannar_type_ar]" class="form-control">
                            <option value="">Choose Style</option>
                            <option value="b_1" <?php echo e(($moduleAttributes['bannar_type_ar'] == 'b_1') ? 'selected' : ''); ?> >Style 1 </option>
                            <option value="b_2" <?php echo e(($moduleAttributes['bannar_type_ar'] == 'b_2') ? 'selected' : ''); ?>>Style 2</option>
                            <option value="b_3" <?php echo e(($moduleAttributes['bannar_type_ar'] == 'b_3') ? 'selected' : ''); ?>>Style 3</option>
                            <option value="b_4" <?php echo e(($moduleAttributes['bannar_type_ar'] == 'b_4') ? 'selected' : ''); ?>>Style 4</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
            <?php else: ?>

        
            <div class="tab-content" id="nav-tabContent">
                <div class="form-group row my-3">
                    <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?></label>
                    <div class="col-sm-10">
                        
                        
                            
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][bannar][image]" id="image">
                            
                      
                        <?php if($errors->has('image')): ?>
                            <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="nav-en-bannar"  role="tabpanel" aria-labelledby="nav-en-bannar-tab">
                    
                   
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?></label>
                        
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][bannar][title]" placeholder="<?php echo e(__('Title')); ?>" >
                            <?php if($errors->has('title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Title2')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][bannar][title]" placeholder="<?php echo e(__('Title2')); ?>" >
                            <?php if($errors->has('title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('Content')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randNumModule); ?>][bannar][content]" class="form-control"  rows="3" placeholder="<?php echo e(__('Content')); ?>" ></textarea>
                            <?php if($errors->has('content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('content')); ?> </p>
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
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][red_button][text]"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][red_button][url]"
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
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][yellow_button][text]"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][yellow_button][url]"
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
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label for="title">Choose Style</label>
                            <select name="mod[<?php echo e($randNumModule); ?>][bannar][bannar_type_en]" class="form-control">
                                <option value="" >Choose Style</option>
                                <option value="b_1" >Style 1 </option>
                                <option value="b_2" >Style 2</option>
                                <option value="b_3" >Style 3</option>
                                <option value="b_4">Style 4</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nav-ar-bannar" role="tabpanel" aria-labelledby="nav-ar-bannar-tab">
                    
                   
                    <div class="form-group row my-3">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?></label>
                        
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][bannar][ar_title]" placeholder="<?php echo e(__('العنوان')); ?>" >
                            <?php if($errors->has('ar_title')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('العنوان2')); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="mod[<?php echo e($randNumModule); ?>][bannar][ar_title_2]" placeholder="<?php echo e(__('العنوان2')); ?>" >
                            <?php if($errors->has('ar_title_2')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_title_2')); ?> </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label"><?php echo e(__('المحتوي')); ?></label>
                        <div class="col-sm-10">
                            <textarea name="mod[<?php echo e($randNumModule); ?>][bannar][ar_content]" class="form-control"  rows="3" placeholder="<?php echo e(__('المحتوي')); ?>" ></textarea>
                            <?php if($errors->has('ar_content')): ?>
                                <p class="text-danger"> <?php echo e($errors->first('ar_content')); ?> </p>
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
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][red_button][ar_text]"
                                                placeholder="Red Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="red-button-url">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][red_button][ar_url]"
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
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][yellow_button][ar_text]"
                                                placeholder="Yellow Button Text"
                                                class="form-control"
                                                type="text"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="yellow-button-url">
                                            <input
                                                name="mod[<?php echo e($randNumModule); ?>][bannar][yellow_button][ar_url]"
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
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label for="title">Choose Style</label>
                            <select name="mod[<?php echo e($randNumModule); ?>][bannar][bannar_type_ar]" class="form-control">
                                <option value="" >Choose Style</option>
                                <option value="b_1" >Style 1 </option>
                                <option value="b_2" >Style 2</option>
                                <option value="b_3" >Style 3</option>
                                <option value="b_4">Style 4</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="clearfix"></div>



<?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/modules/style_of_modules/bannar.blade.php ENDPATH**/ ?>