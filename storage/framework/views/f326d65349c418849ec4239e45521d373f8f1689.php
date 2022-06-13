

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Page Visibility')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Page Visibility')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12">
                <form class="form-horizontal" action="<?php echo e(route('admin.pagevisibilityh8.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?php echo e(__('Theme 8 Visibility')); ?>

                            </h3>
                            <div class="card-tools">
                                <a href="<?php echo e(route('admin.pagevisibility')); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                            </div>
                            </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Hero Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_hero_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_hero_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_hero_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_hero_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('About Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_about_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_about_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_about_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_about_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Video Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_video_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_video_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_video_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_video_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Service Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_service_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_service_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_service_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_service_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Call To Action Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_callaction_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_callaction_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_callaction_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_callaction_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Portfolio Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_portfolio_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_portfolio_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_portfolio_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_portfolio_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Testimonial Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_testimonial_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_testimonial_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_testimonial_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_testimonial_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Team Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_team_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_team_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_team_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_team_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Blog Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_blog_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_blog_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_blog_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_blog_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-5 control-label"><?php echo e(__('Brand Section')); ?><span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="checkbox" <?php echo e($extra_visibility->is_t8_brand_section == '1' ? 'checked' : ''); ?> data-size="large" name="is_t8_brand_section" data-bootstrap-switch data-off-color="danger" data-on-color="primary" data-on-text="Visible" data-label-text="<i class='fas fa-mouse'></i>"  data-off-text="Invisible">
                                    <?php if($errors->has('is_t8_brand_section')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('is_t8_brand_section')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Update')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- /.col -->
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/settings/pv/pvh8.blade.php ENDPATH**/ ?>