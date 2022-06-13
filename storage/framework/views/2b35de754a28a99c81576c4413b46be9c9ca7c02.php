<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Social Links')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Social Links')); ?></li>
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
                            <h3 class="card-title"><?php echo e(__('Add Social Links')); ?> </h3>
                        </div>
                        <div class="card-body">
                            <form
                                action="<?php echo e(route('admin.storeSlinks')); ?>"
                                class="form-horizontal"
                                onsubmit="store(event)"
                                method="POST"
                                id="slink"
                            >
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">
                                        <?php echo e(__('Social Icon')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <button
                                            class="btn btn-secondary biconpicker"
                                            data-icon="fab fa-facebook-f"
                                            data-iconset="fontawesome5"
                                            role="iconpicker"
                                        ></button>
                                        <input id="inputIcon" type="hidden" name="icon" value="">
                                        <?php if($errors->has('icon')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('icon')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="website_title" class="col-sm-2 control-label"><?php echo e(__('Social URL')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="url" value="" placeholder="<?php echo e(__('Social URL')); ?>" />
                                        <?php if($errors->has('url')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('url')); ?> </p>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Social Links List</h3>
                        </div>
                        <div class="card-header pm-0 border-bottom-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="<?php echo e(route('admin.slinks')); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="icon">Icon</label>
                                                        <input
                                                            value="<?php echo e(request()->get('icon')); ?>"
                                                            class="form-control"
                                                            placeholder="icon"
                                                            type="text"
                                                            name="icon"
                                                            id="icon"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="url">Url</label>
                                                        <input
                                                                value="<?php echo e(request()->get('url')); ?>"
                                                                class="form-control"
                                                                placeholder="url"
                                                                type="text"
                                                                name="url"
                                                                id="url"
                                                        />
                                                    </div>
                                                    <div class="col-3" style="line-height: 97px">
                                                        <button type="submit" class="btn btn-primary text-center">
                                                            <i class="fa fa-search"></i> Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Icon</th>
                                        <th>URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $slinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $slink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$id); ?></td>
                                            <td><?php echo e($slink->icon); ?></td>
                                            <td><?php echo e($slink->url); ?></td>
                                            <td>
                                                <a
                                                    href="<?php echo e(route('admin.editSlinks', $slink->id)); ?>"
                                                    class="btn btn-info btn-sm w-100"
                                                >
                                                    <i class="fas fa-pencil-alt"></i>Edit
                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.deleteSlinks', $slink->id )); ?>"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($slink->id); ?>">
                                                    <button
                                                        style="padding: 3px 4px;margin-top: 5px"
                                                        class="btn btn-danger btn-sm"
                                                        type="submit"
                                                        id="delete"
                                                    >
                                                        <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/settings/social/index.blade.php ENDPATH**/ ?>