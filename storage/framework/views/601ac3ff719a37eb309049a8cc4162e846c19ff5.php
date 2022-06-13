<?php $__env->startSection('content'); ?>

<div class="content-header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Currency')); ?> </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><?php echo e(__('Payment Setting')); ?></li>
                <li class="breadcrumb-item"><?php echo e(__('Currency')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Edit Currency')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.currency')); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.currency.update',$currency->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label"><?php echo e(__('Name')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e($currency->name); ?>">
                                            <?php if($errors->has('name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sign" class="col-sm-2 control-label"><?php echo e(__('Sign')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sign" placeholder="<?php echo e(__('Sign')); ?>" value="<?php echo e($currency->sign); ?>">
                                            <?php if($errors->has('sign')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('sign')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="value" class="col-sm-2 control-label"><?php echo e(__('Value')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="number" step="0.1" min="0" class="form-control" name="value" placeholder="<?php echo e(__('Value')); ?>" value="<?php echo e($currency->value); ?>">
                                            <?php if($errors->has('value')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('value')); ?> </p>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/currency/edit.blade.php ENDPATH**/ ?>