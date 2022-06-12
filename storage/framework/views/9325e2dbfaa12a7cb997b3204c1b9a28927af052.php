

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Meet With US Section')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Meet With US Section')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Meet With US Section Info')); ?></h3>
                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-meet-tab" data-toggle="tab" href="#nav-en-meet" role="tab" aria-controls="nav-en-meet" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-meet-tab" data-toggle="tab" href="#nav-ar-meet" role="tab" aria-controls="nav-ar-meet" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="<?php echo e(route('admin.meet_section_update', $english_static->language_id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="tab-content" id="nav-tabContent">
                                    <div class="form-group row my-3">
                                        <label class="col-sm-2 control-label"><?php echo e(__('BG Image')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->meeet_us_bg_image)); ?>" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="meeet_us_bg_image"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="meeet_us_bg_image" id="meeet_us_bg_image">
                                            </div>
                                            <p class="help-block text-info"><?php echo e(__('Upload 1170X300 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                            <?php if($errors->has('meeet_us_bg_image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('meeet_us_bg_image')); ?> </p>
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-meet" role="tabpanel" aria-labelledby="nav-en-meet-tab" >
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="meeet_us_text" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($english_static->meeet_us_text); ?>">
                                                    <?php if($errors->has('meeet_us_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('meeet_us_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Button Text')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="meeet_us_button_text" placeholder="<?php echo e(__('Button Text')); ?>" value="<?php echo e($english_static->meeet_us_button_text); ?>">
                                                    <?php if($errors->has('meeet_us_button_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('meeet_us_button_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Button Link')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="meeet_us_button_link" placeholder="<?php echo e(__('Button Link')); ?>" value="<?php echo e($english_static->meeet_us_button_link); ?>">
                                                    <?php if($errors->has('meeet_us_button_link')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('meeet_us_button_link')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 tab-pane fade" id="nav-ar-meet" role="tabpanel" aria-labelledby="nav-ar-meet-tab">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_meeet_us_text" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($arabic_static->meeet_us_text); ?>">
                                                    <?php if($errors->has('ar_meeet_us_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_meeet_us_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Button Text')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_meeet_us_button_text" placeholder="<?php echo e(__('Button Text')); ?>" value="<?php echo e($arabic_static->meeet_us_button_text); ?>">
                                                    <?php if($errors->has('ar_meeet_us_button_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_meeet_us_button_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Button Link')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_meeet_us_button_link" placeholder="<?php echo e(__('Button Link')); ?>" value="<?php echo e($arabic_static->meeet_us_button_link); ?>">
                                                    <?php if($errors->has('ar_meeet_us_button_link')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_meeet_us_button_link')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/home/meet/index.blade.php ENDPATH**/ ?>