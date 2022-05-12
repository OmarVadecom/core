<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Quote')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Quote')); ?></li>
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
                                            <input type="hidden" value="quote" name="table">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                                <?php echo e(__('Bulk Delete')); ?>

                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="<?php echo e(route($route_search)); ?>" method="get">
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
                                                            type="text"
                                                            name="name"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="subject"
                                                        >Subject</label>
                                                        <input
                                                            value="<?php echo e(request()->get('subject')); ?>"
                                                            placeholder="Subject"
                                                            class="form-control"
                                                            name="subject"
                                                            id="subject"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <?php if($status == 0): ?>
                                                        <div class="col-3">
                                                            <label
                                                                class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                                for="status"
                                                            >Status</label>
                                                            <select name="status" class="form-control" id="status">
                                                                <option value="">Status</option>
                                                                <option
                                                                    <?php if(request()->get('status') === '0'): ?> selected <?php endif; ?>
                                                                    value="0"
                                                                >Pending</option>
                                                                <option
                                                                    <?php if(request()->get('status') === '1'): ?> selected <?php endif; ?>
                                                                    value="1"
                                                                >Processing</option>
                                                                <option
                                                                    <?php if(request()->get('status') === '2'): ?> selected <?php endif; ?>
                                                                    value="2"
                                                                >Completed</option>
                                                                <option
                                                                    <?php if(request()->get('status') === '3'): ?> selected <?php endif; ?>
                                                                    value="3"
                                                                >Rejected</option>
                                                            </select>
                                                        </div>
                                                    <?php endif; ?>
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
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="quote-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Subject')); ?></th>
                                        <th><?php echo e(__('Mail')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="quote-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="<?php echo e($quote->id); ?> " />
                                            </td>
                                            <td>
                                                <?php echo e($quote->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($quote->subject); ?>

                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo e($quote->email); ?>" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-paper-plane"></i>
                                                    <?php echo e(__('Send Mail')); ?>

                                                </a>
                                            </td>
                                            <td>
                                                <form
                                                    action="<?php echo e(route('admin.quote.status')); ?>"
                                                    id="statusForm<?php echo e($quote->id); ?>"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="quote_id" value="<?php echo e($quote->id); ?>" />
                                                    <select
                                                        class="form-control form-control-sm
                                                            <?php if($quote->status == 0): ?>
                                                                bg-warning
                                                            <?php elseif($quote->status == 1): ?>
                                                                bg-primary
                                                            <?php elseif($quote->status == 2): ?>
                                                                bg-success
                                                            <?php elseif($quote->status == 3): ?>
                                                                bg-danger
                                                            <?php endif; ?>
                                                        "
                                                        name="status"
                                                        onchange="document.getElementById('statusForm<?php echo e($quote->id); ?>').submit();"
                                                    >
                                                        <option value="0" <?php echo e($quote->status == 0 ? 'selected' : ''); ?>><?php echo e(__('Pending')); ?></option>
                                                        <option value="1" <?php echo e($quote->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Processing')); ?></option>
                                                        <option value="2" <?php echo e($quote->status == 2 ? 'selected' : ''); ?>><?php echo e(__('Completed')); ?></option>
                                                        <option value="3" <?php echo e($quote->status == 3 ? 'selected' : ''); ?>><?php echo e(__('Rejected')); ?></option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="<?php echo e(route('admin.quote.details', $quote->id)); ?>">
                                                    <i class="fas fa-eye"></i>
                                                    <?php echo e(__('Details')); ?>

                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.quote.delete', $quote->id )); ?>"
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


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/quote/quote.blade.php ENDPATH**/ ?>