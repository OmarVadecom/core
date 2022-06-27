
<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Jobs')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Jobs')); ?></li>
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
                                        <div class="d-inline-block mr-4">
                                            <select class="form-control lang" id="languageSelect" data="<?php echo e(url()->current() . '?language='); ?>">
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                            <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>

                                                            value="<?php echo e($lang->code); ?>"
                                                    ><?php echo e($lang->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <form class="d-inline-block mr-3" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">
                                            <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                            <input type="hidden" value="job" name="table">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                                <?php echo e(__('Bulk Delete')); ?>

                                            </button>
                                        </form>
                                        <a href="<?php echo e(route('admin.job.add'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> <?php echo e(__('Add')); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="<?php echo e(route('admin.job')); ?>" method="get">
                                                
                                                <input type="hidden" name="language" value="<?php echo e(request('language')); ?>"/>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="title">Title</label>
                                                        <input
                                                            value="<?php echo e(request()->get('title')); ?>"
                                                            class="form-control"
                                                            placeholder="Title"
                                                            name="title"
                                                            type="text"
                                                            id="title"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="position"
                                                        >Position</label>
                                                        <input
                                                            value="<?php echo e(request()->get('position')); ?>"
                                                            placeholder="Position"
                                                            class="form-control"
                                                            name="position"
                                                            id="position"
                                                            type="text"
                                                        >
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="status">Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Status</option>
                                                            <option
                                                                <?php if(request()->get('status') === '1'): ?> selected <?php endif; ?>
                                                                value="1"
                                                            >Publish
                                                            </option>
                                                            <option
                                                                <?php if(request()->get('status') === '0'): ?> selected <?php endif; ?>
                                                                value="0"
                                                            >Unpublish
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="category"
                                                        >Category</label>
                                                        <select class="form-control" name="j_category_id" id="category">
                                                            <option value="" selected="selected">Select something</option>
                                                            <?php $__currentLoopData = $jCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    <?php if(request()->get('j_category_id') == $category->id): ?> selected <?php endif; ?>
                                                                    value="<?php echo e($category->id); ?>"
                                                                >
                                                                    <?php echo e($category->name); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12" style="margin-top: 10px">
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
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="job-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Position')); ?></th>
                                        <th><?php echo e(__('Vacancy')); ?></th>
                                        <th><?php echo e(__('Category')); ?></th>
                                        <th><?php echo e(__('Dead line')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th style="width: 10% !important;"><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="job-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="<?php echo e($job->id); ?> " />
                                            </td>
                                            <td>
                                                <?php echo e($job->title); ?>

                                            </td>
                                            <td>
                                                <?php echo e($job->position); ?>

                                            </td>
                                            <td>
                                                <?php echo e($job->vacancy); ?>

                                            </td>
                                            <td>
                                                <?php echo e($job->jcategory->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e(Carbon\Carbon::parse($job->deadline)->format('d-M-Y')); ?>

                                            </td>
                                            <td>
                                                <?php if($job->status == 1): ?>
                                                    <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.job.edit', $job->id)); ?>" class="btn btn-info btn-sm w-100">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <?php echo e(__('Edit')); ?>

                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.job.delete', $job->id )); ?>"
                                                    class="d-inline-block w-100 mt-1"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($job->id); ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm w-100" id="delete">
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


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\core\resources\views/admin/job/index.blade.php ENDPATH**/ ?>