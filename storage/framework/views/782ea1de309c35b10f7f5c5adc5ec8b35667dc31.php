<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('About History')); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('About History')); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1"><?php echo e(__('History Info')); ?></h3>
                            <div class="card-tools">
                                <div class="d-inline-block mr-4">
                                    <select class="form-control form-control-sm lang" id="languageSelect" data="<?php echo e(url()->current() . '?language='); ?>">
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?>

                                                value="<?php echo e($lang->code); ?>"
                                            ><?php echo e($lang->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form
                                action="<?php echo e(route('admin.historycontent.update', $static->language_id)); ?>"
                                class="form-horizontal"
                                method="POST"
                            >
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label"><?php echo e(__('Title')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input
                                            value="<?php echo e($static->our_history_title); ?>"
                                            placeholder="<?php echo e(__('Title')); ?>"
                                            name="our_history_title"
                                            class="form-control"
                                            type="text"
                                        />
                                        <?php if($errors->has('our_history_title')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('our_history_title')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label"><?php echo e(__('Text')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea
                                            placeholder="<?php echo e(__('Text')); ?>"
                                            name="our_history_text"
                                            class="form-control"
                                            rows="3"
                                        ><?php echo e($static->our_history_text); ?></textarea>
                                        <?php if($errors->has('our_history_text')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('our_history_text')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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










                                                <a href="<?php echo e(route('admin.history.add'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
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
                                            <form action="<?php echo e(route('admin.history.index')); ?>" method="get">
                                                
                                                <input type="hidden" name="language" value="<?php echo e(request('language')); ?>"/>
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
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(__('Image')); ?></th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Order')); ?></th>
                                        <th><?php echo e(__('Stratus')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$id); ?></td>
                                            <td>
                                                <img class="w-80" src="<?php echo e(asset('assets/front/img/history/'.$history->image)); ?>" alt="" />
                                            </td>
                                            <td><?php echo e($history->title); ?></td>
                                            <td><?php echo e($history->serial_number); ?></td>
                                            <td>
                                                <?php if($history->status == 1): ?>
                                                    <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.history.edit', $history->id )); ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?>

                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.history.delete', $history->id )); ?>"
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/home/history/index.blade.php ENDPATH**/ ?>