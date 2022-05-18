

<?php $__env->startSection('content'); ?>

<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #ffffff;
    background-color: #115291;
    border-color: transparent;
}
</style>

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
                                <form class="form-horizontal" action="<?php echo e(route('admin.hero.update', $english_static->language_id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('BG Image')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->hero_bg_image)); ?>" alt="">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="hero_bg_image"><?php echo e(__('Choose New Image')); ?></label>
                                                        <input type="file" class="custom-file-input up-img" name="hero_bg_image" id="hero_bg_image">
                                                    </div>
                                                    <p class="help-block text-info"><?php echo e(__('Upload 1920X900 (Pixel) Size image for best quality.
                                                        Only jpg, jpeg, png image is allowed.')); ?>

                                                    </p>
                                                    <?php if($errors->has('hero_bg_image')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('hero_bg_image')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <img class="mw-400 mb-3 img-demo show-img" src="<?php echo e(asset('assets/front/img/'.$english_static->hero_image)); ?>" alt="">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="hero_image"><?php echo e(__('Choose New Image')); ?></label>
                                                        <input type="file" class="custom-file-input up-img" name="hero_image" id="hero_image">
                                                    </div>
                                                    <?php if($errors->has('hero_image')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('hero_image')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Feature Icon1')); ?></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_icon1" placeholder="<?php echo e(__('Feature Icon1')); ?>" value="<?php echo e($english_static->hero_f_icon1); ?>">
                                                    <?php if($errors->has('hero_f_icon1')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('hero_f_icon1')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Feature text1')); ?></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_text1" placeholder="<?php echo e(__('Feature text1')); ?>" value="<?php echo e($english_static->hero_f_text1); ?>">
                                                    <?php if($errors->has('hero_f_text1')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('hero_f_text1')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Feature Icon2')); ?></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_icon2" placeholder="<?php echo e(__('Feature Icon2')); ?>" value="<?php echo e($english_static->hero_f_icon2); ?>">
                                                    <?php if($errors->has('hero_f_icon2')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('hero_f_icon2')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label"><?php echo e(__('Feature text2')); ?></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_text2" placeholder="<?php echo e(__('Feature text2')); ?>" value="<?php echo e($english_static->hero_f_text2); ?>">
                                                    <?php if($errors->has('hero_f_text2')): ?>
                                                        <p class="text-danger"> <?php echo e($errors->first('hero_f_text2')); ?> </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <ul class="nav nav-tabs mb-3 justify-content-end" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">عربى</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">English</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content p-3" id="myTabContent">
                                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ar_hero_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($arabic_static->hero_title); ?>">
                                                            <?php if($errors->has('hero_title')): ?>
                                                                <p class="text-danger"> <?php echo e($errors->first('hero_title')); ?> </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label"><?php echo e(__('Subtitle')); ?><span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ar_hero_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($arabic_static->hero_sub_title); ?>">
                                                            <?php if($errors->has('hero_sub_title')): ?>
                                                                <p class="text-danger"> <?php echo e($errors->first('hero_sub_title')); ?> </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label"><?php echo e(__('Text')); ?><span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ar_hero_text" placeholder="<?php echo e(__('Text')); ?>" value="<?php echo e($arabic_static->hero_text); ?>">
                                                            <?php if($errors->has('hero_text')): ?>
                                                                <p class="text-danger"> <?php echo e($errors->first('hero_text')); ?> </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="hero_title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($english_static->hero_title); ?>">
                                                            <?php if($errors->has('hero_title')): ?>
                                                                <p class="text-danger"> <?php echo e($errors->first('hero_title')); ?> </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label"><?php echo e(__('Subtitle')); ?><span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="hero_sub_title" placeholder="<?php echo e(__('Subtitle')); ?>" value="<?php echo e($english_static->hero_sub_title); ?>">
                                                            <?php if($errors->has('hero_sub_title')): ?>
                                                                <p class="text-danger"> <?php echo e($errors->first('hero_sub_title')); ?> </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label"><?php echo e(__('Text')); ?><span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="hero_text" placeholder="<?php echo e(__('Text')); ?>" value="<?php echo e($english_static->hero_text); ?>">
                                                            <?php if($errors->has('hero_text')): ?>
                                                                <p class="text-danger"> <?php echo e($errors->first('hero_text')); ?> </p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <div class="offset-sm-1 col-sm-10">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\new_vadecom\resources\views/admin/home/hero/static/index.blade.php ENDPATH**/ ?>