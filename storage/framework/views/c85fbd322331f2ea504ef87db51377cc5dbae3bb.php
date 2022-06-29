

<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
       <?php echo e(__('FunFact')); ?>

    </h1>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header  with-border">
                        <h3 class="card-title mt-1"><?php echo e(__('Add New Counter')); ?></h3>
                        <div class="card-tools">
                        <a href="<?php echo e(route('admin.counter.index'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                        </a>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="col-md-6 nav-item nav-link active" id="nav-en-counter-tab" data-toggle="tab" href="#nav-en-counter" role="tab" aria-controls="nav-en-counter" aria-selected="true">English</a>
                                <a class="col-md-6 nav-item nav-link" id="nav-ar-counter-tab" data-toggle="tab" href="#nav-ar-counter" role="tab" aria-controls="nav-ar-counter" aria-selected="false">عربي</a>
                            </div>
                        </nav>
                        <form class="form-horizontal" action="<?php echo e(route('admin.counter.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="col-md-12 tab-pane fade show active" id="nav-en-counter" role="tabpanel" aria-labelledby="nav-en-counter-tab" >
                                    
                                    <div class="form-group row my-3">
                                        <label for="name" class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e(old('title')); ?>">
                                            <?php if($errors->has('title')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Content')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <textarea name="text" class="form-control"  rows="3" placeholder="<?php echo e(__('Content')); ?>"><?php echo e(old('text')); ?></textarea>
                                            <?php if($errors->has('text')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('text')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 tab-pane fade" id="nav-ar-counter" role="tabpanel" aria-labelledby="nav-ar-counter-tab">
                                    
                                    <div class="form-group row my-3">
                                        <label for="name" class="col-sm-2 control-label"><?php echo e(__('العنوان')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ar_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e(old('ar_title')); ?>">
                                            <?php if($errors->has('ar_title')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('المحتوي')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <textarea name="ar_text" class="form-control"  rows="3" placeholder="<?php echo e(__('Content')); ?>"><?php echo e(old('ar_text')); ?></textarea>
                                            <?php if($errors->has('ar_text')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('ar_text')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label for="value" class="col-sm-2 control-label"><?php echo e(__('Number')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="number" placeholder="<?php echo e(__('Number')); ?>" value="<?php echo e(old('number')); ?>">
                                            <?php if($errors->has('number')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('number')); ?> </p>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="value" class="col-sm-2 control-label"><?php echo e(__('Icon')); ?><span class="text-danger">*</span><span class="d-block"><small><?php echo e(__('(Fontawesome icon class )')); ?></small></span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="icon" placeholder="<?php echo e(__('Icon')); ?>" value="<?php echo e(old('icon')); ?>">
                                            <?php if($errors->has('icon')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('icon')); ?> </p>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="value" class="col-sm-2 control-label"><?php echo e(__('Order')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="serial_number" placeholder="<?php echo e(__('Order')); ?>" value="0">
                                            <?php if($errors->has('serial_number')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>

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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\new_vadecom2\resources\views/admin/home/counter/add.blade.php ENDPATH**/ ?>