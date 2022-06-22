

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Basic Information')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Basic Information')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Update Basic Information')); ?> </h3>
                        <div class="card-tools d-flex">
                            <div class="d-inline-block mr-4">
                                <select class="form-control lang languageSelect"  data="<?php echo e(url()->current() . '?language='); ?>">
                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.setting.updateBasicinfo', $basicinfo->language_id )); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <div class="form-group row">
                                <label for="website_title" class="col-sm-2 control-label"><?php echo e(__('Site Title')); ?> <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="website_title" value="<?php echo e($basicinfo->website_title); ?>" placeholder="<?php echo e(__('Site Title')); ?>">
                                    <?php if($errors->has('website_title')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('website_title')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="base_color" class="col-sm-2 control-label"><?php echo e(__('Theme Color')); ?></label>
                                <div class="col-sm-10">
                                    <div class="input-group my-colorpicker2">
                                        <input type="text" class="form-control" value="<?php echo e($basicinfo->base_color); ?>"  placeholder="#000000" name="base_color">
                                        <div class="input-group-append">
                                          <span class="input-group-text" style="color: #<?php echo e($basicinfo->base_color); ?>"><i class="fas fa-square"></i></span>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="base_color" class="col-sm-2 control-label"><?php echo e(__('Gradint Color')); ?></label>
                                <div class="col-sm-10">
                                    <label class="d-block control-label"><?php echo e(__("Color 1")); ?></label>
                                    <div class="input-group my-colorpicker2">
                                        <input type="text" class="form-control" value="<?php echo e($basicinfo->gcolor1); ?>"  placeholder="#000000" name="gcolor1">
                                        <div class="input-group-append">
                                          <span class="input-group-text" style="color: #<?php echo e($basicinfo->gcolor1); ?>"><i class="fas fa-square"></i></span>
                                        </div>
                                    </div>
                                    <br>
                                    <label class="d-block control-label"><?php echo e(__("Color 2")); ?></label>
                                    <div class="input-group my-colorpicker2">
                                        <input type="text" class="form-control" value="<?php echo e($basicinfo->gcolor2); ?>"  placeholder="#000000" name="gcolor2">
                                        <div class="input-group-append">
                                          <span class="input-group-text" style="color: #<?php echo e($basicinfo->gcolor2); ?>"><i class="fas fa-square"></i></span>
                                        </div>
                                    </div>
                                    <br>
                                    <label class="d-block control-label"><?php echo e(__("Color 3")); ?></label>
                                    <div class="input-group my-colorpicker2">
                                        <input type="text" class="form-control" value="<?php echo e($basicinfo->gcolor3); ?>"  placeholder="#000000" name="gcolor3">
                                        <div class="input-group-append">
                                          <span class="input-group-text" style="color: #<?php echo e($basicinfo->gcolor3); ?>"><i class="fas fa-square"></i></span>
                                        </div>
                                    </div>
                                    <br>
                                    <p >Output Grading Color :</p>
                                    <div style="
                                    padding : 30px;
                                    width: 100%;
                                    background-image: linear-gradient(to right, #<?php echo e($basicinfo->gcolor1); ?>, #<?php echo e($basicinfo->gcolor2); ?>, #<?php echo e($basicinfo->gcolor3); ?>);
                                    ">

                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Dark Mode')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="checkbox" <?php echo e($basicinfo->is_dark == '1' ? 'checked' : ''); ?> data-size="large" name="is_dark" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Dactive">
                                    <?php if($errors->has('is_dark')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_dark')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="website_title" class="col-sm-2 control-label"><?php echo e(__('Currency Direction')); ?> <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select name="currency_direction" class="form-control" id="">
                                        <option value="0" <?php echo e($basicinfo->currency_direction == 0 ? 'selected' : ''); ?>><?php echo e(__('Left')); ?></option>
                                        <option value="1" <?php echo e($basicinfo->currency_direction == 1 ? 'selected' : ''); ?>><?php echo e(__('Right')); ?></option>
                                    </select>
                                    <?php if($errors->has('currency_direction')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('currency_direction')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Favicon')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mb-3 show-img img-demo" src="
                                    <?php if($basicinfo->fav_icon): ?>
                                    <?php echo e(asset('assets/front/img/'.$basicinfo->fav_icon)); ?>

                                    <?php else: ?>
                                    <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>

                                    <?php endif; ?>"
                                    " alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="fav_icon"><?php echo e(__('Choose New Image')); ?></label>
                                        <input type="file" class="custom-file-input up-img" name="fav_icon" id="fav_icon">
                                    </div>
                                    <p class="help-block text-info"><?php echo e(__('Upload 40X40 (Pixel) Size image or Squre size image for best quality. 
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                    <?php if($errors->has('fav_icon')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('fav_icon')); ?> </p>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Site Header Logo')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mb-3 show-img img-demo" src="
                                    <?php if($basicinfo->header_logo): ?>
                                    <?php echo e(asset('assets/front/img/'.$basicinfo->header_logo)); ?>

                                    <?php else: ?>
                                    <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>

                                    <?php endif; ?>" alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="header_logo">Choose New Image</label>
                                        <input type="file" class="custom-file-input up-img" name="header_logo" id="header_logo">
                                    </div>
                                    <p class="help-block text-info"><?php echo e(__('Upload 150X40 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                    <?php if($errors->has('header_logo')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('header_logo')); ?> </p>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Breadcrumb Image')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="
                                    <?php if($basicinfo->breadcrumb_image): ?>
                                    <?php echo e(asset('assets/front/img/'.$basicinfo->breadcrumb_image)); ?>

                                    <?php else: ?>
                                    <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>

                                    <?php endif; ?>"
                                    " alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="breadcrumb_image"><?php echo e(__('Choose New Image')); ?></label>
                                        <input type="file" class="custom-file-input up-img" name="breadcrumb_image" id="breadcrumb_image">
                                    </div>
                                    <p class="help-block text-info"><?php echo e(__('Upload 1920X390 (Pixel) Size image for best quality.
                                        Only jpg, jpeg, png image is allowed.')); ?>

                                    </p>
                                    <?php if($errors->has('breadcrumb_image')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('breadcrumb_image')); ?> </p>
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
                    <!-- /.box-body -->
                </div>

            </div>
        
            
            <!-- /.col -->
        </div>
    </div>


</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/settings/basicinfo.blade.php ENDPATH**/ ?>