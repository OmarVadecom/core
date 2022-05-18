

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Packages')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Packages')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('Edit Package')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.package'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.package.update',  $package->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Package Category')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="category_id" required>
                                                <option value="">Choose Category</option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>" <?php echo e($package->category_id == $category->id ? 'selected' : ''); ?> ><?php echo e($category->name_en); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('category_id')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('category_id')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Title AR')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title_ar" placeholder="<?php echo e(__('Title AR')); ?>" value="<?php echo e($package->title_ar); ?>">
                                            <?php if($errors->has('title_ar')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('title_ar')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Title EN')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control titleinp" name="title_en" placeholder="<?php echo e(__('Title EN')); ?>" value="<?php echo e($package->title_en); ?>">
                                            <?php if($errors->has('title_en')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('title_en')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Slug')); ?></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control sluginp" name="slug" placeholder="<?php echo e(__('Slug')); ?>" value="<?php echo e($package->slug); ?>" required>
                                            <?php if($errors->has('slug')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('slug')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Old Price')); ?></label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="old_price" placeholder="<?php echo e(__('Old Price')); ?>" value="<?php echo e($package->old_price); ?>">
                                            <?php if($errors->has('old_price')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('old_price')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Price')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="price" placeholder="<?php echo e(__('Price')); ?>" value="<?php echo e($package->price); ?>">
                                            <?php if($errors->has('price')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('price')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Description AR')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input name="feature_ar" class="form-control" data-role="tagsinput"  value="<?php echo e($package->feature_ar); ?>" >
                                            <?php if($errors->has('feature_ar')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('feature_ar')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Description EN')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input name="feature_en" class="form-control" data-role="tagsinput"  value="<?php echo e($package->feature_en); ?>" >
                                            <?php if($errors->has('feature_en')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('feature_en')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Button Text')); ?></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="button_text" placeholder="<?php echo e(__('Button Text')); ?>" value="<?php echo e($package->button_text); ?>">
                                            <?php if($errors->has('button_text')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('button_text')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="value" class="col-sm-2 control-label"><?php echo e(__('Order')); ?><span class="text-danger">*</span></label>
                        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="serial_number" placeholder="<?php echo e(__('Order')); ?>" value="<?php echo e($package->serial_number); ?>">
                                            <?php if($errors->has('serial_number')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                               <option value="0" <?php echo e($package->status == '0' ? 'selected' : ''); ?>><?php echo e(__('Unpublish')); ?></option>
                                               <option value="1" <?php echo e($package->status == '1' ? 'selected' : ''); ?>><?php echo e(__('Publish')); ?></option>
                                              </select>
                                            <?php if($errors->has('status')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                        </div>
                                    </div>
                                
                                </form>
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/package/edit.blade.php ENDPATH**/ ?>