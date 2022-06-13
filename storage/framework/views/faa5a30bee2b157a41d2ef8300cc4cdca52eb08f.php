

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('User Details')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('User Details')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
   
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1"><?php echo e(__('User Details')); ?></h3>
                        <div class="card-tools">
                            <a href="<?php echo e(route('admin.front_user.index')); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                            </a>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                    <table class="table table-striped table-bordered">
                        
                          <tbody>
                            <tr>
                                <th>Image :</th>
                                <td><img class="w-80" src="<?php echo e(asset('assets/front/img/'.$user->image)); ?>" alt="" ></td>
                            </tr>
                            <tr>
                                <th>Name :</th>
                                <td><?php echo e($user->name); ?></td>
                            </tr>
                            <tr>
                                <th>User Name :</th>
                                <td><?php echo e($user->username); ?></td>
                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td><?php echo e($user->email); ?></td>
                            </tr>
                            <tr>
                                <th>Phone : </th>
                                <td><?php echo e($user->phone); ?></td>
                            </tr>
                            <tr>
                                <th>Address : </th>
                                <td><?php echo e($user->address); ?></td>
                            </tr>
                            <tr>
                                <th>Country :</th>
                                <td><?php echo e($user->country); ?></td>
                            </tr>
                            <tr>
                                <th>State :</th>
                                <td><?php echo e($user->state); ?></td>
                            </tr>
                            <tr>
                                <th>Zip Code :</th>
                                <td><?php echo e($user->zipcode); ?></td>
                            </tr>
                            <tr>
                                <th>Email Varify :</th>
                                <td>
                                    <?php if($user->email_verified == '0'): ?>
                                        <span class="badge badge-warning">No</span>
                                    <?php elseif($user->email_verified == 'Yes'): ?>
                                        <span class="badge badge-success">Yes</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                          </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/fuser/details.blade.php ENDPATH**/ ?>