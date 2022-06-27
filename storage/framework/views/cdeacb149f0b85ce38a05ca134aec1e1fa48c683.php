<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <?php if(request()->path()=='admin/product/pending/orders'): ?>
                            <?php echo e(__('Pending')); ?>

                        <?php elseif(request()->path()=='admin/product/all/orders'): ?>
                            <?php echo e(__('All')); ?>

                        <?php elseif(request()->path()=='admin/product/processing/orders'): ?>
                            <?php echo e(__('Processing')); ?>

                        <?php elseif(request()->path()=='admin/product/completed/orders'): ?>
                            <?php echo e(__('Completed')); ?>

                        <?php elseif(request()->path()=='admin/product/rejected/orders'): ?>
                            <?php echo e(__('Rejcted')); ?>

                        <?php endif; ?>
                        <?php echo e(__('Order')); ?>

                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <?php if(request()->path()=='admin/product/pending/orders'): ?>
                                <?php echo e(__('Pending')); ?>

                            <?php elseif(request()->path()=='admin/product/all/orders'): ?>
                                <?php echo e(__('All')); ?>

                            <?php elseif(request()->path()=='admin/product/processing/orders'): ?>
                                <?php echo e(__('Processing')); ?>

                            <?php elseif(request()->path()=='admin/product/completed/orders'): ?>
                                <?php echo e(__('Completed')); ?>

                            <?php elseif(request()->path()=='admin/product/rejected/orders'): ?>
                                <?php echo e(__('Rejcted')); ?>

                            <?php endif; ?>
                            <?php echo e(__('Order')); ?>

                        </li>
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
                                                <form class="d-inline-block" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">
                                                    <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                                    <input type="hidden" value="order" name="table">
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="far fa-trash-alt"></i> <?php echo e(__('Bulk Delete')); ?>

                                                    </button>
                                                </form>
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
                                            <form action="<?php echo e(route($route_search)); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="order_number">Order Number</label>
                                                        <input
                                                            value="<?php echo e(request()->get('order_number')); ?>"
                                                            placeholder="Order Number"
                                                            class="form-control"
                                                            name="order_number"
                                                            id="order_number"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="total">Total</label>
                                                        <input
                                                            value="<?php echo e(request()->get('total')); ?>"
                                                            class="form-control"
                                                            placeholder="Total"
                                                            name="total"
                                                            type="text"
                                                            id="total"
                                                        />
                                                    </div>
                                                    <?php if($status == 0): ?>
                                                        <div class="col-3">
                                                            <label
                                                                class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                                for="order_status"
                                                            >Order Status</label>
                                                            <select name="order_status" class="form-control" id="order_status">
                                                                <option value="">Order Status</option>
                                                                <option
                                                                    <?php if(request()->get('order_status') === '0'): ?> selected <?php endif; ?>
                                                                    value="0"
                                                                >Pending</option>
                                                                <option
                                                                    <?php if(request()->get('order_status') === '1'): ?> selected <?php endif; ?>
                                                                    value="1"
                                                                >Processing</option>
                                                                <option
                                                                    <?php if(request()->get('order_status') === '2'): ?> selected <?php endif; ?>
                                                                    value="2"
                                                                >Completed</option>
                                                                <option
                                                                    <?php if(request()->get('order_status') === '3'): ?> selected <?php endif; ?>
                                                                    value="3"
                                                                >Rejected</option>
                                                            </select>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="payment_status"
                                                        >Payment Status</label>
                                                        <select
                                                            data-placeholder="Payment Status"
                                                            name="payment_status"
                                                            class="form-control"
                                                            id="payment_status"
                                                        >
                                                            <option value="">Payment Status</option>
                                                            <option
                                                                <?php if(request()->get('payment_status') === '0'): ?> selected <?php endif; ?>
                                                                value="0"
                                                            >Pending</option>
                                                            <option
                                                                <?php if(request()->get('payment_status') === '1'): ?> selected <?php endif; ?>
                                                                value="1"
                                                            >completed</option>
                                                        </select>
                                                    </div>
                                                    <?php if($status != 0): ?>
                                                        <div class="col-3" style="line-height: 97px">
                                                            <button type="submit" class="btn btn-primary text-center">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if($status == 0): ?>
                                                    <div class="row">
                                                        <div class="col-12" style="margin-top: 10px">
                                                            <button type="submit" class="btn btn-primary text-center">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
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
                                            <input type="checkbox" data-target="order-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th scope="col"><?php echo e(__('Order Number')); ?></th>
                                        <th scope="col" width="15%"><?php echo e(__('Gateway')); ?></th>
                                        <th scope="col"><?php echo e(__('Total')); ?></th>
                                        <th scope="col"><?php echo e(__('Order Status')); ?></th>
                                        <th scope="col"><?php echo e(__('Payment Status')); ?></th>
                                        <th scope="col"><?php echo e(__('Actions')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="order-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="<?php echo e($order->id); ?> ">
                                            </td>
                                            <td>#<?php echo e($order->order_number); ?></td>
                                            <td><?php echo e($order->method); ?></td>
                                            <td><?php echo e($order->currency_sign); ?><?php echo e(round($order->total,2)); ?></td>
                                            <td>
                                                <form
                                                    action="<?php echo e(route('admin.product.orders.status')); ?>"
                                                    id="statusForm<?php echo e($order->id); ?>"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                                                    <select
                                                        class="
                                                            form-control form-control-sm
                                                            <?php if($order->order_status == '0'): ?>
                                                                bg-warning
                                                            <?php elseif($order->order_status == '1'): ?>
                                                                bg-primary
                                                            <?php elseif($order->order_status == '2'): ?>
                                                                bg-success
                                                            <?php elseif($order->order_status == '3'): ?>
                                                                bg-danger
                                                            <?php endif; ?>
                                                        "
                                                        name="order_status"
                                                        onchange="document.getElementById('statusForm<?php echo e($order->id); ?>').submit();"
                                                    >
                                                        <option value="0" <?php echo e($order->order_status == '0' ? 'selected' : ''); ?>>
                                                            Pending
                                                        </option>
                                                        <option value="1" <?php echo e($order->order_status == '1' ? 'selected' : ''); ?>>
                                                            Processing
                                                        </option>
                                                        <option value="2" <?php echo e($order->order_status == '2' ? 'selected' : ''); ?>>
                                                            Completed
                                                        </option>
                                                        <option value="3" <?php echo e($order->order_status == '3' ? 'selected' : ''); ?>>
                                                            Rejected
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <form
                                                    action="<?php echo e(route('admin.product.payment.status')); ?>"
                                                    id="paymentStatusForm<?php echo e($order->id); ?>"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                                                    <select
                                                        class="
                                                            form-control form-control-sm
                                                            <?php if($order->payment_status == 1): ?>
                                                                bg-warning
                                                            <?php else: ?>
                                                                bg-danger
                                                            <?php endif; ?>
                                                        "
                                                        name="payment_status"
                                                        onchange="document.getElementById('paymentStatusForm<?php echo e($order->id); ?>').submit();"
                                                    >
                                                        <option value="0" <?php echo e($order->payment_status == '0' ? 'selected' : ''); ?>>
                                                            Pending
                                                        </option>
                                                        <option value="1" <?php echo e($order->payment_status == '1' ? 'selected' : ''); ?>>
                                                            Complete
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-info btn-sm dropdown-toggle"
                                                        id="dropdownMenuButton"
                                                        data-toggle="dropdown"
                                                        aria-expanded="false"
                                                        aria-haspopup="true"
                                                        type="button"
                                                    >
                                                        Actions
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a
                                                            href="<?php echo e(route('admin.product.details', $order->id)); ?>"
                                                            class="dropdown-item"
                                                        >Details</a>
                                                        <a
                                                            href="<?php echo e(asset('assets/front/invoices/product/'.$order->invoice_number)); ?>"
                                                            class="dropdown-item"
                                                            target="_blank"
                                                        >Invoice</a>
                                                        <form
                                                            id="deleteform" class="d-inline-block dropdown-item"
                                                            action="<?php echo e(route('admin.product.order.delete')); ?>"
                                                            method="post"
                                                        >
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="order_id" value="<?php echo e($order->id); ?>">
                                                            <button type="submit" id="delete">
                                                                <?php echo e(__('Delete')); ?>

                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/product/order/index.blade.php ENDPATH**/ ?>