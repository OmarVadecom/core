<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('User')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('User')); ?></li>
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
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="<?php echo e(route('admin.front_user.index')); ?>" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="name">Name</label>
                                                        <input
                                                            value="<?php echo e(request()->get('name')); ?>"
                                                            class="form-control"
                                                            placeholder="Name"
                                                            type="text"
                                                            name="name"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-4">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="email">Email</label>
                                                        <input
                                                            value="<?php echo e(request()->get('email')); ?>"
                                                            class="form-control"
                                                            placeholder="Email"
                                                            name="email"
                                                            type="text"
                                                            id="email"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="status"
                                                        >Email Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Email Status</option>
                                                            <option
                                                                <?php if(request()->get('status') === 'Yes'): ?> selected <?php endif; ?>
                                                                value="Yes"
                                                            >Verify</option>
                                                            <option
                                                                <?php if(request()->get('status') === '0'): ?> selected <?php endif; ?>
                                                                value="0"
                                                            >Unverify</option>
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
                                        <th scope="col">#</th>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Email Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$key); ?></td>
                                            <td>
                                                <img class="w-80" src="<?php echo e(asset('assets/front/img/'.$user->image)); ?>" alt="">
                                            </td>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td>
                                                <form
                                                    action="<?php echo e(route('admin.front_user.status_update')); ?>"
                                                    id="statusForm<?php echo e($user->id); ?>"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                                                    <select
                                                        class="form-control form-control-sm
                                                                <?php if($user->email_verified == '0'): ?>
                                                                    bg-warning
                                                                <?php elseif($user->email_verified == 'Yes'): ?>
                                                                    bg-success
                                                                <?php endif; ?>
                                                            "
                                                        name="email_status"
                                                        onchange="document.getElementById('statusForm<?php echo e($user->id); ?>').submit();"
                                                    >
                                                        <option value="0" <?php echo e($user->email_verified == '0' ? 'selected' : ''); ?>>
                                                            Unverify
                                                        </option>
                                                        <option value="Yes" <?php echo e($user->email_verified == 'Yes' ? 'selected' : ''); ?>>
                                                            Verify
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a
                                                    href="<?php echo e(route('admin.front_user.details', $user->id)); ?>"
                                                    class="btn btn-primary btn-sm"
                                                >
                                                    <span class="btn-label">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                    View
                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.front_user.status_delete', $user->id)); ?>"
                                                    class="deleteform d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm deletebtn" id="delete">
                                                        <span class="btn-label">
                                                          <i class="fas fa-trash"></i>
                                                        </span>
                                                        Delete
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/fuser/index.blade.php ENDPATH**/ ?>