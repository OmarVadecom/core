<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Footer Link')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Footer Link')); ?></li>
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
                                                    <select class="form-control lang" id="languageSelect" data="<?php echo e(url()->current() . '?language='); ?>">
                                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option
                                                                <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>

                                                                value="<?php echo e($lang->code); ?>"
                                                            ><?php echo e($lang->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <a href="<?php echo e(route('admin.flink.add'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
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
                                            <form action="<?php echo e(route('admin.flink.index')); ?>" method="get">
                                                
                                                <input type="hidden" name="language" value="<?php echo e(request('language')); ?>"/>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="name"
                                                        >Name</label>
                                                        <input
                                                            value="<?php echo e(request()->get('name')); ?>"
                                                            class="form-control"
                                                            placeholder="Name"
                                                            type="text"
                                                            name="name"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-5">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="url"
                                                        >Url</label>
                                                        <input
                                                            value="<?php echo e(request()->get('url')); ?>"
                                                            class="form-control"
                                                            placeholder="Url"
                                                            type="text"
                                                            name="url"
                                                            id="url"
                                                        />
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
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('URL')); ?></th>
                                        <th><?php echo e(__('Order')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $fLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $flink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$id); ?></td>
                                            <td><?php echo e($flink->name); ?></td>
                                            <td><?php echo e($flink->url); ?></td>
                                            <td><?php echo e($flink->serial_number); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.flink.edit', $flink->id )); ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <?php echo e(__('Edit')); ?>

                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.flink.delete', $flink->id )); ?>"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/footer/link/index.blade.php ENDPATH**/ ?>