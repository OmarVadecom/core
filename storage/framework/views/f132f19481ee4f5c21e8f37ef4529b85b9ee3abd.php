

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Intor Video')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Intor Video')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Intor Video Info')); ?></h3>
                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-intro-video-tab" data-toggle="tab" href="#nav-en-intro-video" role="tab" aria-controls="nav-en-intro-video" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-intro-video-tab" data-toggle="tab" href="#nav-ar-intro-video" role="tab" aria-controls="nav-ar-intro-video" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="<?php echo e(route('admin.intro_video_update', $english_static->language_id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="form-group row my-3">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->video_image)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="video_image"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="video_image" id="video_image">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 529X558 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                                <?php if($errors->has('video_image')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('video_image')); ?> </p>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Section BG Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->video_bg_image)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="video_bg_image"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="video_bg_image" id="video_bg_image">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 1920X900 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                                <?php if($errors->has('video_bg_image')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('video_bg_image')); ?> </p>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Left Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->video_image_left)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="video_image_left"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="video_image_left" id="video_image_left">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 388X388 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                                <?php if($errors->has('video_image_left')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('video_image_left')); ?> </p>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Right Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->video_image_right)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="video_image_right"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="video_image_right" id="video_image_right">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 388X388 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                                <?php if($errors->has('video_image_right')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('video_image_right')); ?> </p>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-intro-video" role="tabpanel" aria-labelledby="nav-en-intro-video-tab" >
                                            
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="video_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($english_static->video_title); ?>">
                                                    <?php if($errors->has('video_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('video_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Subtitle')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="video_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($english_static->video_sub_title); ?>">
                                                    <?php if($errors->has('video_sub_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('video_sub_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Text')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="video_text" class="form-control" rows="5" placeholder="<?php echo e(__('Text')); ?>"><?php echo e($english_static->video_text); ?></textarea>
                                                    <?php if($errors->has('video_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('video_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Content')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="video_content" class="form-control" rows="5" placeholder="<?php echo e(__('Content')); ?>"><?php echo e($english_static->video_content); ?></textarea>
                                                    <?php if($errors->has('video_content')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('video_content')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Video Link')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="video_link" placeholder="<?php echo e(__('Video Link')); ?>" value="<?php echo e($english_static->video_link); ?>">
                                                    <?php if($errors->has('video_link')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('video_link')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 tab-pane fade" id="nav-ar-intro-video" role="tabpanel" aria-labelledby="nav-ar-intro-video-tab">
                                                                                        
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('عنوان')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_video_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($arabic_static->video_title); ?>">
                                                    <?php if($errors->has('ar_video_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_video_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('العنوان الفرعي')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_video_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($arabic_static->video_sub_title); ?>">
                                                    <?php if($errors->has('ar_video_sub_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_video_sub_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('نص')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="ar_video_text" class="form-control" rows="5" placeholder="<?php echo e(__('Text')); ?>"><?php echo e($arabic_static->video_text); ?></textarea>
                                                    <?php if($errors->has('ar_video_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_video_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('محتوي')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="ar_video_content" class="form-control" rows="5" placeholder="<?php echo e(__('Content')); ?>"><?php echo e($arabic_static->video_content); ?></textarea>
                                                    <?php if($errors->has('ar_video_content')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_video_content')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('رابط الفيديو')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_video_link" placeholder="<?php echo e(__('Video Link')); ?>" value="<?php echo e($arabic_static->video_link); ?>">
                                                    <?php if($errors->has('ar_video_link')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_video_link')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/home/intro-video/index.blade.php ENDPATH**/ ?>