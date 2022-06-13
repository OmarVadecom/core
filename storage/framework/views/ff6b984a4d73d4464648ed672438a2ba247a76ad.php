
<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Packages Categories')); ?> </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Packages Categories')); ?></li>
            </ol>
        </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1"><?php echo e(__('Add Package Category')); ?></h3>
                        <div class="card-tools">
                            <a href="<?php echo e(route('package-category.index'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('package-category.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Title_ar')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_ar" placeholder="<?php echo e(__('Title AR')); ?>" value="<?php echo e(old('name_ar')); ?>">
                                    <?php if($errors->has('name_ar')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('name_ar')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Title_en')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control titleinp" name="name_en" placeholder="<?php echo e(__('Title EN')); ?>" value="<?php echo e(old('name_ en')); ?>">
                                    <?php if($errors->has('name_en')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('name_en')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Slug')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control sluginp" name="slug" placeholder="<?php echo e(__('Slug')); ?>" value="<?php echo e(old('slug')); ?>">
                                    <?php if($errors->has('slug')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('slug')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Emart_id')); ?></label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="emart_id" placeholder="<?php echo e(__('Emart_id')); ?>" value="<?php echo e(old('emart_id')); ?>">
                                    <?php if($errors->has('emart_id')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('emart_id')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                       <option value="0"><?php echo e(__('Unpublish')); ?></option>
                                       <option value="1"><?php echo e(__('Publish')); ?></option>
                                      </select>
                                    <?php if($errors->has('status')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/package_categories/add.blade.php ENDPATH**/ ?>