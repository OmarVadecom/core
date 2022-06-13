<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Packages Categories')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Packages Categories')); ?></li>
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <div class="col-md-2">
                                            <div class="card-tools d-flex justify-content-end">







                                                <a href="<?php echo e(route('package-category.create'). '?language=' . $currentLang->code); ?>"
                                                   class="btn btn-primary btn-sm">
                                                    <i class="fas fa-plus"></i> <?php echo e(__('Add')); ?>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="<?php echo e(route('package-category.index')); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="name"
                                                        >Name</label>
                                                        <input
                                                            value="<?php echo e(request()->get('name')); ?>"
                                                            class="form-control"
                                                            placeholder="Name"
                                                            name="name"
                                                            type="text"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="slug"
                                                        >Slug</label>
                                                        <input
                                                            value="<?php echo e(request()->get('slug')); ?>"
                                                            class="form-control"
                                                            placeholder="Slug"
                                                            name="slug"
                                                            type="text"
                                                            id="slug"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="status"
                                                        >Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Status</option>
                                                            <option
                                                                <?php if(request()->get('status') === '1'): ?> selected <?php endif; ?>
                                                                value="1"
                                                            >Publish</option>
                                                            <option
                                                                <?php if(request()->get('status') === '0'): ?> selected <?php endif; ?>
                                                                value="0"
                                                            >Unpublish</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-2" style="line-height: 97px">
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
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('#')); ?></th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('slug')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $PackagesCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $packageCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td> <?php echo e($id); ?> </td>
                                            <td>
                                                <?php echo e($packageCategory->name_en); ?>

                                            </td>
                                            <td>
                                                <?php echo e($packageCategory->slug); ?>

                                            </td>
                                            <td>
                                                <?php if($packageCategory->status == 1): ?>
                                                    <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-warning"><?php echo e(__('Un Publish')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('package-category.edit', $packageCategory->id)); ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?>

                                                </a>
                                                <form
                                                    action="<?php echo e(route('package-category.destroy', $packageCategory->id )); ?>"
                                                    id="deleteform" class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($packageCategory->id); ?>">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/package_categories/index.blade.php ENDPATH**/ ?>