
<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Announcement Popup')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Announcement Popup')); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__('Update Announcement Popup')); ?> </h3>
                            <div class="card-tools d-flex">
                                <div class="d-inline-block mr-4">
                                    <select class="form-control lang languageSelect" data="<?php echo e(url()->current() . '?language='); ?>">
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>

                                                value="<?php echo e($lang->code); ?>"
                                            ><?php echo e($lang->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form
                                action="<?php echo e(route('admin.update_announcement', $st->language_id )); ?>" method="POST"
                                enctype="multipart/form-data"
                                class="form-horizontal"
                            >
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label"><?php echo e(__('Announcement Popup')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input
                                            <?php echo e($commonsetting->is_announcement == '1' ? 'checked' : ''); ?> data-size="large"
                                            data-label-text="<i class='fas fa-mouse'></i>" data-off-text="Dactive"
                                            name="is_announcement" data-bootstrap-switch data-off-color="danger"
                                            data-on-color="primary" data-on-text="Active"
                                            type="checkbox"
                                        />
                                        <?php if($errors->has('is_announcement')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('is_announcement')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label"><?php echo e(__('Announcement Image')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <img
                                            class="mw-400 mb-3 show-img img-demo"
                                            src="
                                                <?php if($st->announcement): ?>
                                                    <?php echo e(asset('assets/front/img/'.$st->announcement)); ?>

                                                <?php else: ?>
                                                    <?php echo e(asset('assets/admin/img/img-demo.jpg')); ?>

                                                <?php endif; ?>
                                            "
                                            alt=""
                                        >
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="announcement"><?php echo e(__('Choose New Image')); ?></label>
                                            <input type="file" class="custom-file-input up-img" name="announcement" id="announcement">
                                        </div>
                                        <p class="help-block text-info">
                                            <?php echo e(__('Upload 960X519 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.')); ?>

                                        </p>
                                        <?php if($errors->has('announcement')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('announcement')); ?> </p>
                                        <?php endif; ?>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="website_title" class="col-sm-3 control-label">
                                        <?php echo e(__('Popup Delay (Second)')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="announcement_delay" value="<?php echo e($st->announcement_delay); ?>">
                                        <?php if($errors->has('announcement_delay')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('announcement_delay')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/settings/announcement.blade.php ENDPATH**/ ?>