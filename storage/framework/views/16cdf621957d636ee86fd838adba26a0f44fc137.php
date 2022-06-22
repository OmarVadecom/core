

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Arcive')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Arcive')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Add Arcive')); ?> </h3>
                                <div class="card-tools">
                                <a href="<?php echo e(route('admin.archive')); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="card-body">
                                    <form class="form-horizontal" action="<?php echo e(route('admin.archive.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                     
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Date')); ?> <span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control datepicker" name="date" value="" placeholder="<?php echo e(__('Date')); ?>">
                                                    <?php if($errors->has('date')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('date')); ?> </p>
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
                            <!-- /.box-body -->
                        </div>
            
                    </div>
                    <!-- /.col -->
                </div>
    </div>
  

</section>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/blog/archive/add.blade.php ENDPATH**/ ?>