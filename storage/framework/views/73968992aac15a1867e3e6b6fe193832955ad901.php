<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Welcome back,')); ?> <?php echo e(Auth::guard('admin')->user()->name); ?> !</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Product')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($currentLang->products()->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <?php
                            $porder = App\Models\Order::where('order_status', '0')->orderBy('id', 'DESC')->get();
                        ?>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Pending Product Order')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($porder->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Blogs')); ?></span>
                            <span class="info-box-number font-weight-normal"><?php echo e($currentLang->blogs()->count()); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Job')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($currentLang->jobs()->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <?php
                            $applicants = App\Models\JobApplication::where('status', '0')->orderBy('id', 'DESC')->get();
                        ?>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('New Job Applied')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($applicants->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Services')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($currentLang->services()->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Team Members')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($currentLang->teams()->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Subscribers')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e(\App\Models\Newsletter::count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Quotes')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e(\App\Models\Quote::count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Projects')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($currentLang->portfolios()->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('Gallery')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e($currentLang->galleries()->count()); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo e(__('User')); ?></span>
                            <h4 class="info-box-number font-weight-normal"><?php echo e(\App\Models\User::count()); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h4><?php echo e(__('Latest Quotes :')); ?></h4>
                        </div>
                        <div class="card-header pb-0 border-bottom-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="<?php echo e(route('admin.dashboard')); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="subject"
                                                        >Subject</label>
                                                        <input
                                                            value="<?php echo e(request()->get('subject')); ?>"
                                                            class="form-control"
                                                            placeholder="Subject"
                                                            name="subject"
                                                            id="subject"
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
                        <div class="card-body pt-0">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Subject')); ?></th>
                                        <th><?php echo e(__('Mail')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $quote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$id); ?></td>
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
                                                <a
                                                    href="<?php echo e(route('admin.quote.details', $quote->id)); ?>"
                                                    class="btn btn-info btn-sm"
                                                >
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__('Latest Portfolios :')); ?></h3>
                        </div>
                        <div class="card-header pb-0 border-bottom-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="<?php echo e(route('admin.dashboard')); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="title"
                                                        >Title</label>
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
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="service">Category</label>
                                                        <select class="form-control" name="service_id" id="service">
                                                            <option value="" selected="selected">Select something</option>
                                                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    <?php if(request()->get('service_id') == $service->id): ?> selected <?php endif; ?>
                                                                    value="<?php echo e($service->id); ?>"
                                                                >
                                                                    <?php echo e($service->title); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <div class="card-body pt-0">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Category')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$id); ?></td>
                                            <td>
                                                <?php echo e($portfolio->title); ?>

                                            </td>
                                            <td>
                                                <?php echo e($portfolio->service->title); ?>

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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>