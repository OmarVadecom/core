

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Static')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Static')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Static Info')); ?></h3>
                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-w-w-a-tab" data-toggle="tab" href="#nav-en-w-w-a" role="tab" aria-controls="nav-en-w-w-a" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-w-w-a-tab" data-toggle="tab" href="#nav-ar-w-w-a" role="tab" aria-controls="nav-ar-w-w-a" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="<?php echo e(route('admin.w_w_a_update', $english_static->language_id)); ?>" method="POST" >
                                    <?php echo csrf_field(); ?>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-w-w-a" role="tabpanel" aria-labelledby="nav-en-w-w-a-tab" >  
                                                                         
                                            <div class="form-group row my-3">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="w_we_are_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($english_static->w_we_are_title); ?>">
                                                    <?php if($errors->has('w_we_are_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('w_we_are_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Subtitle')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="w_we_are_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($english_static->w_we_are_sub_title); ?>">
                                                    <?php if($errors->has('w_we_are_sub_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('w_we_are_sub_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Text')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="w_we_are_text" class="form-control" rows="5" placeholder="<?php echo e(__('Text')); ?>"><?php echo e($english_static->w_we_are_text); ?></textarea>
                                                    <?php if($errors->has('w_we_are_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('w_we_are_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 tab-pane fade show " id="nav-ar-w-w-a" role="tabpanel" aria-labelledby="nav-ar-w-w-a-tab" >
                                            
                                            <div class="form-group row my-3">
                                                <label class="col-sm-2 control-label"><?php echo e(__('عنوان')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_w_we_are_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($arabic_static->w_we_are_title); ?>">
                                                    <?php if($errors->has('ar_w_we_are_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_w_we_are_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('العنوان الفرعي')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_w_we_are_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($arabic_static->w_we_are_sub_title); ?>">
                                                    <?php if($errors->has('ar_w_we_are_sub_title')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_w_we_are_sub_title')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('نص')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="ar_w_we_are_text" class="form-control" rows="5" placeholder="<?php echo e(__('Text')); ?>"><?php echo e($arabic_static->w_we_are_text); ?></textarea>
                                                    <?php if($errors->has('ar_w_we_are_text')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('ar_w_we_are_text')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>           
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/home/who-we-are/index.blade.php ENDPATH**/ ?>