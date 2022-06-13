<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Sitemap')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Sitemap')); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-tools d-flex justify-content-end">
                                        <a href="<?php echo e(route('admin.sitemap.add')); ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> <?php echo e(__('Add Sitemap')); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="<?php echo e(route('admin.sitemap.index')); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="file_name"
                                                        >File Name</label>
                                                        <input
                                                            value="<?php echo e(request()->get('file_name')); ?>"
                                                            placeholder="File Name"
                                                            class="form-control"
                                                            name="file_name"
                                                            id="file_name"
                                                            type="text"
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
                        <div class="card-body">
                            <?php if(count($sitemaps) == 0): ?>
                                <h3 class="text-center">NO SITEMAP FOUND</h3>
                            <?php else: ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped data_table">
                                        <thead>
                                            <tr>
                                                <th scope="col">File Name</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $sitemaps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sitemap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($sitemap->filename); ?></td>
                                                    <td>
                                                        <form
                                                            action="<?php echo e(route('admin.sitemap.download', $sitemap->id)); ?>"
                                                            class="d-inline-block"
                                                            method="post"
                                                        >
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="filename" value="<?php echo e($sitemap->filename); ?>" />
                                                            <button type="submit" class="btn btn-info btn-sm">
                                                              <span class="btn-label">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                              </span>
                                                                Download
                                                            </button>
                                                        </form>
                                                        <form
                                                            action="<?php echo e(route('admin.sitemap.delete', $sitemap->id )); ?>"
                                                            id="deleteform" class="d-inline-block"
                                                            method="post"
                                                        >
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="id" value="<?php echo e($sitemap->id); ?>">
                                                            <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                                <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/settings/sitemap/sitemap.blade.php ENDPATH**/ ?>