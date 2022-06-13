<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('User Role')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('User Role')); ?></li>
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
                                <div class="col-4">
                                    <h4>Filter Data</h4>
                                </div>
                                <div class="col-8">
                                    <div class="card-tools d-flex justify-content-end">
                                        <a href="<?php echo e(route('admin.user.add')); ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> <?php echo e(__('Add User & Role')); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="<?php echo e(route('admin.user.index')); ?>" method="get">
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
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="role"
                                                        >Role</label>
                                                        <input
                                                            value="<?php echo e(request()->get('role')); ?>"
                                                            class="form-control"
                                                            placeholder="Role"
                                                            name="role"
                                                            type="text"
                                                            id="role"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>" for="role_id">Role</label>
                                                        <select class="form-control" name="role_id" id="role_id">
                                                            <option value="" selected="selected">Select something</option>
                                                            <option
                                                                <?php if(request()->get('role_id') == 'owner'): ?> selected <?php endif; ?>
                                                                value="owner"
                                                            >Owner</option>
                                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    <?php if(request()->get('role_id') == $role->id): ?> selected <?php endif; ?>
                                                                    value="<?php echo e($role->id); ?>"
                                                                >
                                                                    <?php echo e($role->name); ?>

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
                                        <th scope="col">#</th>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($user->id != Auth::guard('admin')->user()->id): ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td>
                                                    <img class="w-80" src="<?php echo e(asset('assets/admin/img/admin-user/'.$user->image)); ?>" alt="" />
                                                </td>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td>
                                                    <?php if(empty($user->role)): ?>
                                                        <span class="badge badge-danger">Owner</span>
                                                    <?php else: ?>
                                                        <?php echo e($user->role->name); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($user->status == 1): ?>
                                                        <span class="badge badge-success">Active</span>
                                                    <?php elseif($user->status == 0): ?>
                                                        <span class="badge badge-warning">Deactive</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.user.edit', $user->id)); ?>">
                                                        <span class="btn-label">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                        Edit
                                                    </a>
                                                    <form
                                                        action="<?php echo e(route('admin.user.delete', $user->id)); ?>"
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
                                        <?php endif; ?>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/user/index.blade.php ENDPATH**/ ?>