

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Portfolio')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Portfolio')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Add Portfolio')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.portfolio.index'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.portfolio.store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="form-group row">
                                       <label class="col-sm-2 control-label"><?php echo e(__('Language')); ?><span class="text-danger">*</span></label>
       
                                       <div class="col-sm-10">
                                           <select class="form-control lang" name="language_id" id="portfolio_lan">
                                               <option value="" selected disabled>Select a Language</option>
                                               <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option value="<?php echo e($lang->id); ?>" ><?php echo e($lang->name); ?></option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                           <?php if($errors->has('language_id')): ?>
                                               <p class="text-danger"> <?php echo e($errors->first('language_id')); ?> </p>
                                           <?php endif; ?>
                                       </div>
                                   </div>

                                <div class="form-group row">
                                    <label  class="col-sm-2 control-label"><?php echo e(__('Slider Image ')); ?></label>
    
                                    <div class="col-sm-10">
                                        <div class="custom-file h80 drop-img">
                                            <label class="custom-file-label h80 " for="image"><h5 class="text-center"><?php echo e(__('Drop Or Select multiple image at a time')); ?></h5></label>
                                            <input type="file" multiple class="custom-file-input h80" name="image[]" id="image">
                                        </div>
    
                                        <?php if($errors->has('image')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                                        <?php endif; ?>
                                        <p class="help-block text-info"><?php echo e(__('Upload 710X400 (Pixel) Size image for best quality.
                                            Only jpg, jpeg, png image is allowed.')); ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-2 control-label"><?php echo e(__('Featured Image')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="featured_image"><?php echo e(__('Choose Image')); ?></label>
                                            <input type="file" class="custom-file-input up-img" name="featured_image" id="featured_image">
                                        </div>
                                        <?php if($errors->has('featured_image')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('featured_image')); ?> </p>
                                        <?php endif; ?>
                                        <p class="help-block text-info"><?php echo e(__('Upload 710X400 (Pixel) Size image for best quality.
                                            Only jpg, jpeg, png image is allowed.')); ?>

                                        </p>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo e(old('title')); ?>">
                                        <?php if($errors->has('title')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_name" class="col-sm-2 control-label"><?php echo e(__('Client Name')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="client_name" placeholder="Client Name" value="<?php echo e(old('client_name')); ?>">
                                        <?php if($errors->has('client_name')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('client_name')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="service_id" class="col-sm-2 control-label"><?php echo e(__('Category')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <select class="form-control" name="service_id" id="bcategory_id">
                                        </select>
                                        <?php if($errors->has('service_id')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('service_id')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="start_date" class="col-sm-2 control-label"><?php echo e(__('Start Date')); ?><span class="text-danger">*</span></label>
                                    <div class="input-group col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="start_date" id="start_date" placeholder="<?php echo e(__('Start Date')); ?>" value="<?php echo e(old('start_date')); ?>">
                                        <?php if($errors->has('start_date')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('start_date')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="submission_date" class="col-sm-2 control-label"><?php echo e(__('Submission Date')); ?><span class="text-danger">*</span></label>
    
                                        <div class="input-group col-sm-10">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="submission_date" id="submission_date" placeholder="<?php echo e(__('Submission Date')); ?>" value="<?php echo e(old('submission_date')); ?>">
                                            <?php if($errors->has('submission_date')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('submission_date')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="client_name" class="col-sm-2 control-label"><?php echo e(__('Live Link')); ?></label>
    
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="link" placeholder="Live Link" value="<?php echo e(old('link')); ?>">
                                        <?php if($errors->has('link')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('link')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                           <option value="0"><?php echo e(__('In Progress')); ?></option>
                                           <option value="1" selected><?php echo e(__('Completed')); ?></option>
                                          </select>
                                        <?php if($errors->has('status')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="content" class="col-sm-2 control-label"><?php echo e(__('Content')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <textarea name="content" class="form-control summernote"  rows="4" placeholder="<?php echo e(__('Description')); ?>"><?php echo e(old('content')); ?></textarea>
                                        <?php if($errors->has('content')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('content')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="meta_keywords" class="col-sm-2 control-label"><?php echo e(__('Meta Keywords')); ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" placeholder="<?php echo e(__('Meta Keywords')); ?>" value="<?php echo e(old('meta_keywords')); ?>">
                                        <?php if($errors->has('meta_keywords')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('meta_keywords')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meta_description" class="col-sm-2 control-label"><?php echo e(__('Meta Description')); ?></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e(old('meta_description')); ?></textarea>
                                        <?php if($errors->has('meta_description')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('meta_description')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 control-label"><?php echo e(__('Order')); ?><span class="text-danger">*</span></label>
    
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="serial_number" placeholder="<?php echo e(__('Order')); ?>" value="0">
                                        <?php if($errors->has('serial_number')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
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
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/portfolio/add.blade.php ENDPATH**/ ?>