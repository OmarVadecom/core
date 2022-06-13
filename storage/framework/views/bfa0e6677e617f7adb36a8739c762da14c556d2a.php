

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Footer Link')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Footer Link')); ?></li>
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
                            <div class="card-header  with-border">
                                <h3 class="card-title mt-1"><?php echo e(__('Edit Footer Link')); ?></h3>
                                <div class="card-tools">
                                <a href="<?php echo e(route('admin.flink.index'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                    <form class="form-horizontal" action="<?php echo e(route('admin.flink.update', $flink->id)); ?>" method="POST" >
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label"><?php echo e(__('Language')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <select class="form-control lang" name="language_id">
                                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($lang->id); ?>" <?php echo e($flink->language_id == $lang->id ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php if($errors->has('language_id')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('language_id')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 control-label"><?php echo e(__('Name')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($flink->name); ?>">
                                                <?php if($errors->has('name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                            <?php endif; ?>
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label for="value" class="col-sm-2 control-label"><?php echo e(__('URL')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="url" placeholder="<?php echo e(__('URL')); ?>" value="<?php echo e($flink->url); ?>">
                                                <?php if($errors->has('url')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('url')); ?> </p>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="value" class="col-sm-2 control-label"><?php echo e(__('Order')); ?><span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="serial_number" placeholder="<?php echo e(__('Order')); ?>" value="<?php echo e($flink->serial_number); ?>">
                                                <?php if($errors->has('serial_number')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/footer/link/edit.blade.php ENDPATH**/ ?>