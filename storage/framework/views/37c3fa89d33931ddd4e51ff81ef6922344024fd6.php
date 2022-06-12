

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Testimonials')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Testimonials')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Add Testimonial')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.testimonial'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-testimonial-tab" data-toggle="tab" href="#nav-en-testimonial" role="tab" aria-controls="nav-en-testimonial" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-testimonial-tab" data-toggle="tab" href="#nav-ar-testimonial" role="tab" aria-controls="nav-ar-testimonial" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="<?php echo e(route('admin.testimonial.store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="form-group row my-3">
                                            <label for="title" class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mb-3 show-img img-demo" src="<?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="image"><?php echo e(__('Choose Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="image" id="image">
                                                </div>
                                                <?php if($errors->has('image')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                                                <?php endif; ?>
                                                <p class="help-block text-info"><?php echo e(__('Upload 70X70 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-testimonial" role="tabpanel" aria-labelledby="nav-en-testimonial-tab" >
                                            
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 control-label"><?php echo e(__('Name')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name')); ?>">
                                                    <?php if($errors->has('name')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="position" class="col-sm-2 control-label"><?php echo e(__('Position')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="position" placeholder="<?php echo e(__('Position')); ?>" value="<?php echo e(old('position')); ?>">
                                                    <?php if($errors->has('position')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('position')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="freelance" class="col-sm-2 control-label"> <?php echo e(__('Rating')); ?><span class="text-danger">*</span> </label>
                                                <div class="col-sm-10">
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="onestar" name="rating" value="1">
                                                            <label for="onestar"><?php echo e(__('1 Star')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="twostar" name="rating"  value="2">
                                                            <label for="twostar"><?php echo e(__('2 Star')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="threestar" name="rating"  value="3">
                                                            <label for="threestar"><?php echo e(__('3 Star')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="fourstar" name="rating"  value="4">
                                                            <label for="fourstar"><?php echo e(__('4 Star')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline">
                                                            <input type="radio" id="fivestar" name="rating"  value="5">
                                                            <label for="fivestar"><?php echo e(__('5 Star')); ?></label>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="message" class="col-sm-2 control-label"><?php echo e(__('Message')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="message" placeholder="<?php echo e(__('Message')); ?>"  rows="5"><?php echo e(old('message')); ?></textarea>
                                                    <?php if($errors->has('message')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('message')); ?> </p>
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
                                        </div>

                                        <div class="col-md-12 tab-pane fade" id="nav-ar-testimonial" role="tabpanel" aria-labelledby="nav-ar-testimonial-tab"> 
                                            
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 control-label"><?php echo e(__('الاسم')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_name" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('ar_name')); ?>">
                                                    <?php if($errors->has('ar_name')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_name')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="position" class="col-sm-2 control-label"><?php echo e(__('المركز')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_position" placeholder="<?php echo e(__('Position')); ?>" value="<?php echo e(old('ar_position')); ?>">
                                                    <?php if($errors->has('ar_position')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_position')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="freelance" class="col-sm-2 control-label"> <?php echo e(__('تقييم')); ?><span class="text-danger">*</span> </label>
                                                <div class="col-sm-10">
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_onestar" name="ar_rating" value="1">
                                                            <label for="ar_onestar"><?php echo e(__('1 نجمه')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_twostar" name="ar_rating"  value="2">
                                                            <label for="ar_twostar"><?php echo e(__('2 نجمه')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_threestar" name="ar_rating"  value="3">
                                                            <label for="ar_threestar"><?php echo e(__('3 نجمه')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_fourstar" name="ar_rating"  value="4">
                                                            <label for="ar_fourstar"><?php echo e(__('4 نجمه')); ?></label>
                                                        </div>
                                                        <div class="icheck-success d-inline">
                                                            <input type="radio" id="ar_fivestar" name="ar_rating"  value="5">
                                                            <label for="ar_fivestar"><?php echo e(__('5 نجمه')); ?></label>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="message" class="col-sm-2 control-label"><?php echo e(__('رساله')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="ar_message" placeholder="<?php echo e(__('Message')); ?>" " rows="5"><?php echo e(old('ar_message')); ?></textarea>
                                                    <?php if($errors->has('ar_message')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_message')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 control-label"><?php echo e(__('ترتيب')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="ar_serial_number" placeholder="<?php echo e(__('Order')); ?>" value="0">
                                                    <?php if($errors->has('ar_serial_number')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_serial_number')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/home/testimonial/add.blade.php ENDPATH**/ ?>