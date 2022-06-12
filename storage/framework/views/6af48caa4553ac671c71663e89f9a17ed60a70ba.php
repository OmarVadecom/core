

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Contact Section')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Contact Section')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Contact Section Info')); ?></h3>
                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-contact-tab" data-toggle="tab" href="#nav-en-contact" role="tab" aria-controls="nav-en-contact" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-contact-tab" data-toggle="tab" href="#nav-ar-contact" role="tab" aria-controls="nav-ar-contact" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="<?php echo e(route('admin.contact_section_update', $english_static->language_id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="tab-content" id="nav-tabContent">

                                        <div class="form-group row my-3">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->contact_form_image)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="contact_form_image"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="contact_form_image" id="contact_form_image">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 530X730 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                                <?php if($errors->has('contact_form_image')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('contact_form_image')); ?> </p>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Contact BG Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->contact_section_bg_image)); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="contact_section_bg_image"><?php echo e(__('Choose New Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="contact_section_bg_image" id="contact_section_bg_image">
                                                </div>
                                                <p class="help-block text-info"><?php echo e(__('Upload 530X730 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                                <?php if($errors->has('contact_section_bg_image')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('contact_section_bg_image')); ?> </p>
                                                <?php endif; ?>
                                            </div>

                                        </div>

                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-contact" role="tabpanel" aria-labelledby="nav-en-contact-tab" >
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="contact_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($english_static->contact_title); ?>">
                                                    <?php if($errors->has('contact_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('contact_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Subtitle')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="contact_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($english_static->contact_sub_title); ?>">
                                                    <?php if($errors->has('contact_sub_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('contact_sub_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Form Title')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="contact_form_title" placeholder="<?php echo e(__('Form Title')); ?>" value="<?php echo e($english_static->contact_form_title); ?>">
                                                    <?php if($errors->has('contact_form_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('contact_form_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    
                                        <div class="col-md-12 tab-pane fade" id="nav-ar-contact" role="tabpanel" aria-labelledby="nav-ar-contact-tab"> 
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_contact_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($arabic_static->contact_title); ?>">
                                                    <?php if($errors->has('ar_contact_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_contact_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('العنوان الفرعي')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_contact_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($arabic_static->contact_sub_title); ?>">
                                                    <?php if($errors->has('ar_contact_sub_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_contact_sub_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('عنوان النموذج')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_contact_form_title" placeholder="<?php echo e(__('Form Title')); ?>" value="<?php echo e($arabic_static->contact_form_title); ?>">
                                                    <?php if($errors->has('ar_contact_form_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_contact_form_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label"><?php echo e(__('Map Embed Link')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <textarea name="contact_map" class="form-control" rows="5" placeholder="<?php echo e(__('Map Embed Link')); ?>"><?php echo e($english_static->contact_map); ?></textarea>
                                            <?php if($errors->has('contact_map')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('contact_map')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/home/contact/index.blade.php ENDPATH**/ ?>