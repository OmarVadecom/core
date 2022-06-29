<div class="card">
    <?php
        $randNumModule = isset($randomKey) ? $randomKey : \Illuminate\Support\Str::random(10);
    ?>
    <div class="card-header toggle-open-close-module">
        <i class="fas fa-times icon-delete"></i>
        Faqs Category
        <i class="minimize-module fas fa-chevron-down"></i>
    </div>
    <div class="card-body" style="display: none">
        <div class="form-group row">
            <label class="col-sm-3 control-label"><?php echo e(__('Faqs Category')); ?><span class="text-danger">*</span></label>
            <div class="col-sm-9">
                <select class="form-control" name="mod[<?php echo e($randNumModule); ?>][packages_category][category_id]" >
                    <option value="">Choose Category</option>
                    <?php $__currentLoopData = $faq_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e((isset( $moduleAttributes['category_id'])&&$moduleAttributes['category_id']==$category->id) ? 'selected' : ''); ?> ><?php echo e($category->name_en); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('category_id')): ?>
                    <p class="text-danger"> <?php echo e($errors->first('category_id')); ?> </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH F:\wamp64\www\new_vadecom2\resources\views/admin/modules/style_of_modules/faq_category.blade.php ENDPATH**/ ?>