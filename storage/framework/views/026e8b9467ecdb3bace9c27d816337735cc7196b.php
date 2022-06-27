

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Video')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Video')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Video Info')); ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.herovideo.update')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                  
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Active Video Section')); ?><span
                                                    class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" <?php echo e($visibility->is_video_hero == '1' ? 'checked' : ''); ?> data-size="large" name="is_video_hero" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Active" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Deactivate">
                                            <?php if($errors->has('is_video_hero')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('is_video_hero')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Video Link')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="hero_section_video_link" placeholder="<?php echo e(__('Video Link')); ?>" value="<?php echo e($commonsetting->hero_section_video_link); ?>">
                                            <?php if($errors->has('hero_section_video_link')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('hero_section_video_link')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/home/hero/video/index.blade.php ENDPATH**/ ?>