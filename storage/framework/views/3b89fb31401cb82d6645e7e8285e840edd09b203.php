
<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Teams')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Teams')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Add Team')); ?></h3>
                                <div class="card-tools">
                                <a href="<?php echo e(route('admin.team'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-team-tab" data-toggle="tab" href="#nav-en-team" role="tab" aria-controls="nav-en-team" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-team-tab" data-toggle="tab" href="#nav-ar-team" role="tab" aria-controls="nav-ar-team" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="<?php echo e(route('admin.team.store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="form-group row my-3">
                                            <label for="title" class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>

                                            <div class="col-sm-10">
                                                <img class="w-100 mb-3 show-img img-demo" src="<?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="image"><?php echo e(__('Choose Image')); ?></label>
                                                    <input type="file" class="custom-file-input up-img" name="image" id="image">
                                                </div>
                                                <?php if($errors->has('image')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                                                <?php endif; ?>
                                                <p class="help-block text-info"><?php echo e(__('Upload 570X650 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-team" role="tabpanel" aria-labelledby="nav-en-team-tab" >
                                            
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
                                                <label for="designation" class="col-sm-2 control-label"><?php echo e(__('Designation')); ?><span class="text-danger">*</span></label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dagenation" placeholder="<?php echo e(__('Designation')); ?>" value="<?php echo e(old('dagenation')); ?>">
                                                    <?php if($errors->has('dagenation')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('dagenation')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Description')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="description" class="form-control summernote" rows="5" placeholder="<?php echo e(__('Description')); ?>"><?php echo e(old('description')); ?></textarea>
                                                    <?php if($errors->has('description')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('description')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 tab-pane fade" id="nav-ar-team" role="tabpanel" aria-labelledby="nav-ar-team-tab">
                                            
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
                                                <label for="designation" class="col-sm-2 control-label"><?php echo e(__('تعيين')); ?><span class="text-danger">*</span></label>

                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_dagenation" placeholder="<?php echo e(__('Designation')); ?>" value="<?php echo e(old('ar_dagenation')); ?>">
                                                    <?php if($errors->has('ar_dagenation')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_dagenation')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('الوصف')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="ar_description" class="form-control summernote" rows="5" placeholder="<?php echo e(__('Description')); ?>"><?php echo e(old('ar_description')); ?></textarea>
                                                    <?php if($errors->has('ar_description')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_description')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="icon1" class="col-sm-2 control-label"><?php echo e(__('Social Icon 1')); ?><span class="d-block"><small><?php echo e(__('(Fontawesome icon class )')); ?></small></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="icon1" placeholder="<?php echo e(__('Social Icon 1')); ?>" value="<?php echo e(old('icon1')); ?>">
                                                <?php if($errors->has('icon1')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('icon1')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="url1" class="col-sm-2 control-label"><?php echo e(__('Social Url 1')); ?></label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="url1" placeholder="<?php echo e(__('Social Url 1')); ?>" value="<?php echo e(old('url1')); ?>">
                                                <?php if($errors->has('url1')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('url1')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Social Icon 2')); ?><span class="d-block"><small><?php echo e(__('(Fontawesome icon class )')); ?></small></span></label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="icon2" placeholder="<?php echo e(__('Social Icon 2')); ?>" value="<?php echo e(old('icon2')); ?>">
                                                <?php if($errors->has('icon2')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('icon2')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="url2" class="col-sm-2 control-label"><?php echo e(__('Social Url 2')); ?></label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="url2" placeholder="<?php echo e(__('Social Url 2')); ?>" value="<?php echo e(old('url2')); ?>">
                                                <?php if($errors->has('url2')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('url2')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Social Icon 3')); ?><span class="d-block"><small><?php echo e(__('(Fontawesome icon class )')); ?></small></span></label>

                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="icon3" placeholder="<?php echo e(__('Social Icon 3')); ?>" value="<?php echo e(old('icon3')); ?>">
                                                <?php if($errors->has('icon3')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('icon3')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="url3" class="col-sm-2 control-label"><?php echo e(__('Social Url 3')); ?></label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="url3" placeholder="<?php echo e(__('Social Url 3')); ?>" value="<?php echo e(old('url3')); ?>">
                                                <?php if($errors->has('url3')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('url3')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Social Icon 4')); ?><span class="d-block"><small><?php echo e(__('(Fontawesome icon class )')); ?></small></span></label>

                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="icon4" placeholder="<?php echo e(__('Social Icon 4')); ?>" value="<?php echo e(old('icon4')); ?>">
                                                <?php if($errors->has('icon4')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('icon4')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="url3" class="col-sm-2 control-label"><?php echo e(__('Social Url 4')); ?></label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="url4" placeholder="<?php echo e(__('Social Url 4')); ?>" value="<?php echo e(old('url4')); ?>">
                                                <?php if($errors->has('url4')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('url4')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Social Icon 5')); ?><span class="d-block"><small><?php echo e(__('(Fontawesome icon class )')); ?></small></span></label>

                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="icon5" placeholder="<?php echo e(__('Social Icon 5')); ?>" value="<?php echo e(old('icon5')); ?>">
                                                <?php if($errors->has('icon5')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('icon5')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="url3" class="col-sm-2 control-label"><?php echo e(__('Social Url 5')); ?></label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="url5" placeholder="<?php echo e(__('Social Url 5')); ?>" value="<?php echo e(old('url5')); ?>">
                                                <?php if($errors->has('url5')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('url5')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group row">
                                            <label  class="col-sm-2 control-label"><?php echo e(__('Order')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="serial_number" placeholder="<?php echo e(__('Order')); ?>" value="<?php echo e(old('serial_number')); ?>">
                                                <?php if($errors->has('serial_number')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span
                                                class="text-danger">*</span></label>

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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/home/team/add.blade.php ENDPATH**/ ?>