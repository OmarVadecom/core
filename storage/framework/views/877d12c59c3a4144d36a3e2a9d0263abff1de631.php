
<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Dynamic Page')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Dynamic Page')); ?></li>
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
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                            <div class="card-tools d-flex justify-content-end">
                                                <div class="d-inline-block mr-4">
                                                    <select class="form-control lang" id="languageSelect"
                                                            data="<?php echo e(url()->current() . '?language='); ?>">
                                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>

                                                                value="<?php echo e($lang->code); ?>"
                                                            ><?php echo e($lang->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <a href="<?php echo e(route('admin.dynamic_page.add'). '?language=' . $currentLang->code); ?>"
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
                                            <form action="<?php echo e(route('admin.dynamic_page')); ?>" method="get">
                                                
                                                <input type="hidden" name="language" value="<?php echo e(request('language')); ?>"/>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                               for="slug">Slug</label>
                                                        <input type="text" class="form-control" name="slug"
                                                               placeholder="Slug"
                                                               value="<?php echo e(request()->get('slug')); ?>" id="slug">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                               for="title">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                               placeholder="Title"
                                                               value="<?php echo e(request()->get('title')); ?>" id="title">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                               for="status">Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Status</option>
                                                            <option
                                                                    value="1"
                                                                    <?php if(request()->get('status') === '1'): ?> selected <?php endif; ?>
                                                            >Publish
                                                            </option>
                                                            <option
                                                                    value="0"
                                                                    <?php if(request()->get('status') === '0'): ?> selected <?php endif; ?>
                                                            >Unpublish
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                               for="category">Category</label>
                                                        <select class="form-control" name="category_id" id="category">
                                                            <option value="" selected="selected">Select something
                                                            </option>

                                                            <?php $__currentLoopData = $dynamicPagesCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                        value="<?php echo e($category->id); ?>"
                                                                        <?php if(request()->get('category_id') == $category->id): ?> selected <?php endif; ?>
                                                                >
                                                                    <?php echo e($category->title); ?>

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
                        <div class="card-body">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('#')); ?></th>
                                        <th style="width: 435px !important;"><?php echo e(__('Page title')); ?></th>
                                        <th><?php echo e(__('Order')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $dynamicpages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$dynamicpage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($id); ?>

                                            </td>
                                            <td>
                                                <?php echo e($dynamicpage->title); ?>

                                            </td>
                                            <td>
                                                <?php echo e($dynamicpage->serial_number); ?>

                                            </td>
                                            <td>
                                                <?php if($dynamicpage->status == 1): ?>
                                                    <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                                <?php endif; ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.dynamic_page.edit', $dynamicpage->id)); ?>"
                                                   class="btn btn-info btn-sm"><i
                                                            class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>

                                                <?php if($dynamicpage->status == 1): ?>
                                                    <a href="<?php echo e(asset($dynamicpage->url)); ?>" target="_blank"
                                                       class="btn btn-primary btn-sm"><i class="fas fa-eye"></i><?php echo e(__('View')); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <span class="btn btn-primary btn-sm">
                                                        <i class="fas fa-eye"></i>
                                                        <?php echo e(__('View')); ?>

                                                    </span>
                                                <?php endif; ?>
                                                <form id="deleteform" class="d-inline-block"
                                                      action="<?php echo e(route('admin.dynamic_page.delete', $dynamicpage->id )); ?>"
                                                      method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($dynamicpage->id); ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                                    </button>
                                                </form>
                                                <a
                                                    href="<?php echo e(route('admin.dynamic_page.copy', $dynamicpage->id)); ?>"
                                                    class="btn btn-success btn-sm text-white"
                                                    target="_blank"
                                                >
                                                    <i class="fa fa-copy"></i>
                                                    <?php echo e(__('Copy')); ?>

                                                </a>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\core\resources\views/admin/dynamicpage/index.blade.php ENDPATH**/ ?>