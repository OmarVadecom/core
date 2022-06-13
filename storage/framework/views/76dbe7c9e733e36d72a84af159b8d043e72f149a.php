<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('newsletters')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('newsletters')); ?></li>
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
                                    <div class="card-tools d-flex justify-content-end">
                                        <form class="d-inline-block mr-3" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">
                                            <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                            <input type="hidden" value="newsletter" name="table">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                                <?php echo e(__('Bulk Delete')); ?>

                                            </button>
                                        </form>
                                        <a href="<?php echo e(route('admin.newsletter.add')); ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> <?php echo e(__('Add Email')); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>Filter Data</h4>
                                            <form action="<?php echo e(route('admin.newsletter')); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="email"
                                                        >Email</label>
                                                        <input
                                                            value="<?php echo e(request()->get('email')); ?>"
                                                            class="form-control"
                                                            placeholder="Email"
                                                            name="email"
                                                            type="text"
                                                            id="email"
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
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="newsletter-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th><?php echo e(__('Email')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $newsletters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $newsletter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="newsletter-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="<?php echo e($newsletter->id); ?>" />
                                            </td>
                                            <td>
                                                <?php echo e($newsletter->email); ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.newsletter.edit', $newsletter->id)); ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <?php echo e(__('Edit')); ?>

                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.newsletter.delete', $newsletter->id )); ?>"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($newsletter->id); ?>">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/newsletter/index.blade.php ENDPATH**/ ?>