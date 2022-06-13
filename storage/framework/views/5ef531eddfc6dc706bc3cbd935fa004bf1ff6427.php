

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Maintanance Mode')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Maintanance Mode')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update Maintanance Mode')); ?> </h3>
                        
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.update_maintanance' )); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Maintanance Mode')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="checkbox" <?php echo e($visibility->is_maintainance_mode == '1' ? 'checked' : ''); ?> data-size="large" name="is_maintainance_mode" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Dactive">
                                    <?php if($errors->has('is_maintainance_mode')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_maintainance_mode')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Maintanance Image')); ?> <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <img class="mw-400 mb-3 show-img img-demo" src="
                                    <?php if($commonsetting->maintainance_image): ?>
                                    <?php echo e(asset('assets/front/img/'.$commonsetting->maintainance_image)); ?>

                                    <?php else: ?>
                                    <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>

                                    <?php endif; ?>"
                                    " alt="">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="maintainance_image"><?php echo e(__('Choose New Image')); ?></label>
                                        <input type="file" class="custom-file-input up-img" name="maintainance_image" id="maintainance_image">
                                    </div>
                                   
                                    <?php if($errors->has('maintainance_image')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('maintainance_image')); ?> </p>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="website_title" class="col-sm-2 control-label"><?php echo e(__('Maintanance Text')); ?> <span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <textarea name="maintainance_text" class="form-control"   rows="5"><?php echo e($commonsetting->maintainance_text); ?></textarea>
                                    <?php if($errors->has('maintainance_text')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('maintainance_text')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/settings/maintanance.blade.php ENDPATH**/ ?>