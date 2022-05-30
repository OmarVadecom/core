<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Product Categories')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Products')); ?></li>
                        <li class="breadcrumb-item"><?php echo e(__('Categories')); ?></li>
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
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
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
                                                    <input type="hidden" value="product-category" name="table">
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="far fa-trash-alt"></i> <?php echo e(__('Bulk Delete')); ?>

                                                    </button>
                                                </form>
                                                <a href="<?php echo e(route('admin.product.category.add')); ?>" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-plus"></i> <?php echo e(__('Add Category')); ?>

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
                                            <form action="<?php echo e(route('admin.product.category')); ?>" method="get">

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
                        <div class="card-body table-responsive">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="product-category-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th><?php echo e(__('Image')); ?></th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Popular')); ?></th>
                                        <th><?php echo e(__('Featured')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="product-category-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="<?php echo e($category->id); ?> ">
                                            </td>
                                            <td>
                                                <img class="w-80" src="<?php echo e(asset('assets/front/img/'.$category->image)); ?>" alt="" />
                                            </td>
                                            <td>
                                                <?php echo e($category->name); ?>

                                            </td>
                                            <td>
                                                <form
                                                    action="<?php echo e(route('admin.product.category.makePopular')); ?>"
                                                    id="popularStatusForm<?php echo e($category->id); ?>"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>">
                                                    <select
                                                        class="
                                                                    form-control form-control-sm
                                                                    <?php if($category->is_popular == 1): ?>
                                                                        bg-warning
                                                                    <?php else: ?>
                                                                        bg-info
                                                                    <?php endif; ?>
                                                                "
                                                        name="is_popular"
                                                        onchange="document.getElementById('popularStatusForm<?php echo e($category->id); ?>').submit();"
                                                    >
                                                        <option value="0" <?php echo e($category->is_popular == '0' ? 'selected' : ''); ?>>
                                                            Disable
                                                        </option>
                                                        <option value="1" <?php echo e($category->is_popular == '1' ? 'selected' : ''); ?>>
                                                            Enable
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <form
                                                    action="<?php echo e(route('admin.product.category.makeFeatured')); ?>"
                                                    id="featuredStatusForm<?php echo e($category->id); ?>"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>">
                                                    <select
                                                        class="form-control form-control-sm
                                                            <?php if($category->is_feature == 1): ?>
                                                                bg-warning
                                                            <?php else: ?>
                                                                bg-info
                                                            <?php endif; ?>
                                                        "
                                                        name="is_feature"
                                                        onchange="document.getElementById('featuredStatusForm<?php echo e($category->id); ?>').submit();"
                                                    >
                                                        <option value="0" <?php echo e($category->is_feature == '0' ? 'selected' : ''); ?>>
                                                            Disable
                                                        </option>
                                                        <option value="1" <?php echo e($category->is_feature == '1' ? 'selected' : ''); ?>>
                                                            Enable
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <?php if($category->status == 1): ?>
                                                    <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a
                                                    href="<?php echo e(route('admin.product.category.edit', $category->id)); ?>"
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?>

                                                </a>
                                                <form
                                                    class="d-inline-block"
                                                    action="<?php echo e(route('admin.product.category.delete', $category->id )); ?>"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\new_vadecom\resources\views/admin/product/product-category/index.blade.php ENDPATH**/ ?>