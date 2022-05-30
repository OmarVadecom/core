
<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Feq Category')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Feq')); ?></li>
                        <li class="breadcrumb-item"><?php echo e(__('Feq Categories')); ?></li>
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
                                            <input type="hidden" value="bcategory" name="table">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                                <?php echo e(__('Bulk Delete')); ?>

                                            </button>
                                        </form>
                                        <a
                                                href="<?php echo e(route('faq-category.create'). '?language=' . $currentLang->code); ?>"
                                                class="btn btn-primary btn-sm"
                                        >
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
                                            <form action="<?php echo e(route('faq-categories.search')); ?>" method="get">
                                                
                                                <input type="hidden" name="language" value="<?php echo e(request('language')); ?>"/>
                                                <div class="row">
                                                    <div class="col-3">
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
                                        <input type="checkbox" data-target="bcategory-bulk-delete" class="bulk_all_delete" />
                                    </th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $feqcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $feqcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="bcategory-bulk-delete">
                                        <td>
                                            <input type="checkbox" class="bulk-item" value="<?php echo e($feqcategory->id); ?>" />
                                        </td>
                                        <td>
                                            <?php if( request()->get('language') == 'ar'): ?>
                                            <?php echo e($feqcategory->name_ar); ?>

                                            <?php else: ?>
                                                <?php echo e($feqcategory->name_en); ?>

                                                <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('faq-category.edit', $feqcategory->id)); ?>" class="btn btn-info btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                                <?php echo e(__('Edit')); ?>

                                            </a>
                                            <form
                                                    action="<?php echo e(route('faq-category.destroy', $feqcategory->id )); ?>"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                            >
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?php echo e($feqcategory->id); ?>">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\new_vadecom\resources\views/admin/faq/category_view.blade.php ENDPATH**/ ?>