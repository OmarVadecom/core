<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Applicants')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                <?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('Applicants')); ?></li>
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
                                            <input type="hidden" value="applicant" name="table">
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
                                                            for="job_title"
                                                        >Job Title</label>
                                                        <input
                                                            value="<?php echo e(request()->get('job_title')); ?>"
                                                            placeholder="Job Title"
                                                            class="form-control"
                                                            name="job_title"
                                                            id="job_title"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="<?php if($currentLang->code === 'ar'): ?> text-left <?php endif; ?>"
                                                            for="job_description"
                                                        >Job Description</label>
                                                        <input
                                                            value="<?php echo e(request()->get('type')); ?>"
                                                            placeholder="Job Description"
                                                            class="form-control"
                                                            id="job_description"
                                                            name="type"
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
                                                                >Interviewing</option>
                                                                <option
                                                                    <?php if(request()->get('status') === '2'): ?> selected <?php endif; ?>
                                                                    value="2"
                                                                >Selected</option>
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
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="applicant-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th><?php echo e(__('Job Title')); ?></th>
                                        <th><?php echo e(__('Job Position')); ?></th>
                                        <th><?php echo e(__('Apply Date')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="applicant-bulk-delete">
                                            <th>
                                                <input type="checkbox" class="bulk-item" value="<?php echo e($applicant->id); ?> ">
                                            </th>

                                            <td>
                                                <?php echo e($applicant->job_title); ?>

                                            </td>
                                            <td>
                                                <?php echo e($applicant->type); ?>

                                            </td>
                                            <td>
                                                <?php echo e($applicant->created_at->diffForHumans()); ?>

                                            </td>
                                            <td>
                                                <form
                                                    action="<?php echo e(route('admin.application.status')); ?>"
                                                    id="statusForm<?php echo e($applicant->id); ?>"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="applicant_id" value="<?php echo e($applicant->id); ?>">
                                                    <select
                                                        class="form-control form-control-sm
                                                                <?php if($applicant->status == '0'): ?>
                                                                    bg-primary
                                                                <?php elseif($applicant->status == '1'): ?>
                                                                    bg-info
                                                                <?php elseif($applicant->status == '2'): ?>
                                                                    bg-success
                                                                <?php elseif($applicant->status == '3'): ?>
                                                                    bg-danger
                                                                <?php endif; ?>
                                                            "
                                                        name="status"
                                                        onchange="document.getElementById('statusForm<?php echo e($applicant->id); ?>').submit();"
                                                    >
                                                        <option value="0" <?php echo e($applicant->status == '0' ? 'selected' : ''); ?>>
                                                            Pending
                                                        </option>
                                                        <option value="1" <?php echo e($applicant->status == '1' ? 'selected' : ''); ?>>
                                                            Interviewing
                                                        </option>
                                                        <option value="2" <?php echo e($applicant->status == '2' ? 'selected' : ''); ?>>
                                                            Selected
                                                        </option>
                                                        <option value="3" <?php echo e($applicant->status == '3' ? 'selected' : ''); ?>>
                                                            Rejected
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <button
                                                    data-href="<?php echo e(route('admin.applicant.details',$applicant->id)); ?>"
                                                    class="btn btn-primary view_applicant_details btn-sm"
                                                    data-target="#view_job_details_modal"
                                                    data-toggle="modal"
                                                    type="button"
                                                >
                                                    <i class="fas fa-eye"></i> <?php echo e(__('View')); ?>

                                                </button>
                                                <form
                                                    action="<?php echo e(route('admin.applicant.delete', $applicant->id )); ?>"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($applicant->id); ?>">
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
        <div
            aria-labelledby="exampleModalCenterTitle"
            id="view_job_details_modal"
            class="modal fade"
            aria-hidden="true"
            tabindex="-1"
            role="dialog"
        >
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('View Applicant Information')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12" id="info_view"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/job/applicant/index.blade.php ENDPATH**/ ?>