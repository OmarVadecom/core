
<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('faqs')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Home')); ?>

                            </a>
                        </li>
                        <li class="breadcrumb-item"><?php echo e(__('faqs')); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
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
                                        <a href="<?php echo e(route('admin.faq.add'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> <?php echo e(__('Add')); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="<?php echo e(route('admin.faq')); ?>" method="get">
                                                
                                                <input type="hidden" name="language" value="<?php echo e(request('language')); ?>"/>
                                                <div class="row">
                                                    <div class="col-5">
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
                                                    <div class="col-4">
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
                        <div class="card-body">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('#')); ?></th>
                                        <th><?php echo e(__('title')); ?></th>
                                        <th><?php echo e(__('Order')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($id); ?>

                                            </td>
                                            <td>
                                                <?php echo e($faq->title); ?>

                                            </td>
                                            <td>
                                                <?php echo e($faq->serial_number); ?>

                                            </td>
                                            <td>
                                                <?php if($faq->status == 1): ?>
                                                    <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                                <?php else: ?>
                                                    <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                                <?php endif; ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.faq.edit', $faq->id)); ?>" class="btn btn-info btn-sm w-100 mb-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <?php echo e(__('Edit')); ?>

                                                </a>
                                                <form
                                                    action="<?php echo e(route('admin.faq.delete', $faq->id )); ?>"
                                                    class="d-inline-block w-100"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($faq->id); ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm w-100" id="delete">
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
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1"><?php echo e(__('Section Content')); ?></h3>
                            
                        </div>
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="col-md-6 nav-item nav-link active" id="nav-en-faq-tab" data-toggle="tab" href="#nav-en-faq" role="tab" aria-controls="nav-en-faq" aria-selected="true">English</a>
                                    <a class="col-md-6 nav-item nav-link" id="nav-ar-faq-tab" data-toggle="tab" href="#nav-ar-faq" role="tab" aria-controls="nav-ar-faq" aria-selected="false">عربي</a>
                                </div>
                            </nav>
                            <form
                                action="<?php echo e(route('admin.faq_section_update',  $static->language_id)); ?>" enctype="multipart/form-data" class="form-horizontal" method="POST" >
                                <?php echo csrf_field(); ?>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="form-group row my-3">
                                        <label class="col-sm-2 control-label"><?php echo e(__('BG Image')); ?><span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <img
                                                src="<?php echo e(asset('assets/front/img/'.$static->faq_bg_image)); ?>"
                                                class="mw-400 mb-3 img-demo show-img"
                                                alt=""
                                            />
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="faq_bg_image"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="faq_bg_image" id="faq_bg_image" />
                                            </div>
                                            <p class="help-block text-info">
                                                <?php echo e(__('Upload 1920X900 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                            <?php if($errors->has('faq_bg_image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('faq_bg_image')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            <?php echo e(__('Image1')); ?>

                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-sm-10">
                                            <img
                                                src="<?php echo e(asset('assets/front/img/'.$static->faq_image1)); ?>"
                                                class="mw-400 mb-3 img-demo show-img"
                                                alt=""
                                            />
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="faq_image1"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="faq_image1" id="faq_image1" />
                                            </div>
                                            <p class="help-block text-info">
                                                <?php echo e(__('Upload 440X320 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                            <?php if($errors->has('faq_image1')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('faq_image1')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            <?php echo e(__('Image2')); ?>

                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-sm-10">
                                            <img
                                                src="<?php echo e(asset('assets/front/img/'.$static->faq_image2)); ?>"
                                                class="mw-400 mb-3 img-demo show-img"
                                                alt=""
                                            />
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="faq_image2"><?php echo e(__('Choose New Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="faq_image2" id="faq_image2" />
                                            </div>
                                            <p class="help-block text-info">
                                                <?php echo e(__('Upload 431X524 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                            <?php if($errors->has('faq_image2')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('faq_image2')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-12 tab-pane fade show active" id="nav-en-faq" role="tabpanel" aria-labelledby="nav-en-faq-tab" >
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                <?php echo e(__('Title')); ?>

                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="<?php echo e($static->faq_title); ?>"
                                                    placeholder="<?php echo e(__('Title')); ?>"
                                                    class="form-control"
                                                    name="faq_title"
                                                    type="text"
                                                />
                                                <?php if($errors->has('faq_title')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('faq_title')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                <?php echo e(__('Subtitle')); ?>

                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="<?php echo e($static->faq_sub_title); ?>"
                                                    placeholder="<?php echo e(__('Subtitle')); ?>"
                                                    class="form-control"
                                                    name="faq_sub_title"
                                                    type="text"
                                                />
                                                <?php if($errors->has('faq_sub_title')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('faq_sub_title')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 tab-pane fade" id="nav-ar-faq" role="tabpanel" aria-labelledby="nav-ar-faq-tab">
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                <?php echo e(__('العنوان')); ?>

                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="<?php echo e($static_ar->faq_title); ?>"
                                                    placeholder="<?php echo e(__('Title')); ?>"
                                                    class="form-control"
                                                    name="ar_faq_title"
                                                    type="text"
                                                />
                                                <?php if($errors->has('ar_faq_title')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('ar_faq_title')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                <?php echo e(__('العنوان الفرعي')); ?>

                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="<?php echo e($static_ar->faq_sub_title); ?>"
                                                    placeholder="<?php echo e(__('Subtitle')); ?>"
                                                    class="form-control"
                                                    name="ar_faq_sub_title"
                                                    type="text"
                                                />
                                                <?php if($errors->has('ar_faq_sub_title')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('ar_faq_sub_title')); ?> </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/home/faq/index.blade.php ENDPATH**/ ?>