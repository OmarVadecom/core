<?php $__env->startSection('style'); ?>
    <style>
        .icon-delete {
            color: #dc3545;
            cursor: pointer;
            margin-right: 10px;
            padding: 3px 5px;
            border-radius: 5px;
            font-size: 16px;
        }

        .minimize-module {
            cursor: pointer;
            color: #007bff;
            float: right;
            height: 25px;
            padding: 3px;
            border-radius: 5px;

        }

        .fix-slug {
            line-height: 37px;
            height: 37px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            background-color: #eceeef;
            text-align: center;
            border-radius: 0.18rem;
        }

        @media (min-width: 576px) {
            .modules-container {
                margin-left: 16.666667%
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Dynamic Page')); ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                        class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                        <li class="breadcrumb-item"><?php echo e(__('Dynamic Page')); ?></li>
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
                            <h3 class="card-title mt-1"><?php echo e(__('Add Dynamic Page')); ?></h3>
                            <div class="card-tools">
                                <a href="<?php echo e(route('admin.dynamic_page'). '?language=' . $currentLang->code); ?>"
                                   class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                </a>
                            </div>
                        </div>
                          <div class="card-body">
                            <form class="form-horizontal" action="<?php echo e(route('admin.dynamic_page.store')); ?>" method="POST"
                                  enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label"><?php echo e(__('Language')); ?><span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">English</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">عربى</button>
                                            </div>
                                        </nav>
                                       <br>
                                        <div class="tab-content" id="nav-tabContent" >
                                            <div class=" col-sm-10 tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control slugable" name="en_title" data-slug="1"  placeholder="<?php echo e(__('Title')); ?>" required>
                                                <?php if($errors->has('en_title')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('en_title')); ?> </p>
                                                <?php endif; ?>
                                                <label for="meta_keywords">Meta Keywords</label>
                                                <input type="text" class="form-control" data-role="tagsinput" name="en_meta_keywords" placeholder="<?php echo e(__('Meta Keywords')); ?>"  >
                                                <?php if($errors->has('en_meta_keywords')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('en_meta_keywords')); ?> </p>
                                                <?php endif; ?>
                                                <label for="meta_keywords"> Meta Description</label>
                                                <textarea class="form-control" name="en_meta_description" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"></textarea>
                                                <?php if($errors->has('en_meta_description')): ?>
                                                    <p class="text-danger"> <?php echo e($errors->first('en_meta_description')); ?> </p>
                                                <?php endif; ?>
                                            </div>

                                        <div class="col-sm-10 tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <label for="title">العنوان</label>
                                            <input type="text" class="form-control slugable" name="ar_title" data-slug="0"  placeholder="العنوان" required >
                                            <?php if($errors->has('ar_title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('ar_title')); ?> </p>
                                            <?php endif; ?>
                                            <label for="meta_keywords">الكلمات الدلاليه لمحركات البحث</label>
                                            <input type="text" class="form-control" data-role="tagsinput" name="ar_meta_keywords" placeholder="الكلمات الدلاليه لمحركات البحث">
                                            <?php if($errors->has('ar_meta_keywords')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('ar_meta_keywords')); ?> </p>
                                            <?php endif; ?>
                                            <label for="meta_description">الوصف لمحركات البحث</label>
                                            <textarea class="form-control" name="ar_meta_description" placeholder="الوصف لمحركات البحث"  rows="4"></textarea>
                                            <?php if($errors->has('ar_meta_description')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('ar_meta_description')); ?> </p>
                                            <?php endif; ?>
                                        </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label"><?php echo e(__('Category')); ?><span class="text-danger">*</span></label>

                                    <div class="col-sm-10">
                                        <select class="form-control lang" name="category_id">
                                            <option value="" selected> Select Category</option>
                                            <?php $__currentLoopData = $dynamicPageCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dynamicPageCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($dynamicPageCategory->id); ?>"><?php echo e($dynamicPageCategory->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('category_id')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('category_id')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label"><?php echo e(__('Slug')); ?><span class="text-danger">*</span></label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control sluginp" name="slug" placeholder="<?php echo e(__('Slug')); ?>" value="<?php echo e(old('slug')); ?>" required>
                                        <?php if($errors->has('slug')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('slug')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="fix-slug">
                                            <input type="checkbox" name="fix_slug" class="fix_slug" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="value" class="col-sm-2 control-label"><?php echo e(__('Order')); ?><span
                                                class="text-danger">*</span></label>

                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="serial_number"
                                               placeholder="<?php echo e(__('Order')); ?>" value="0" required>
                                        <?php if($errors->has('serial_number')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('serial_number')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="footer" class="col-sm-2 control-label">
                                        Footer
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="footer" id="footer">
                                            <option value="together">Together</option>
                                            <option value="long_footer">Long Footer</option>
                                            <option value="short_footer">Short Footer</option>
                                        </select>
                                        <?php if($errors->has('footer')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('footer')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span
                                                class="text-danger">*</span></label>

                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option value="0"><?php echo e(__('Unpublish')); ?></option>
                                            <option value="1"><?php echo e(__('Publish')); ?></option>
                                        </select>
                                        <?php if($errors->has('status')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label"><?php echo e(__('Modules')); ?><span
                                                class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <select class="form-control lang modules" name="module">
                                            <option selected disabled>Select Module</option>
                                            <?php $__currentLoopData = \App\Helpers\Helper::modules(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($key); ?>"><?php echo e($module); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('module')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('module')); ?> </p>
                                        <?php endif; ?>
                                        <br>
                                        <button style="float:right;" class="btn btn-success" id="add_module">Add</button>
                                    </div>
                                </div>

                                <div id="modules-container" class="modules-container"></div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-1" style="width: 100%;">
                                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                                            <?php echo e(__('Save')); ?>

                                        </button>
                                    </div>
                                    <div class="col-sm-2 ml-0 pl-0">
                                        <button type="submit" class="btn btn-primary" name="save_continue" value="save_continue" style="width: 100%;">
                                            <?php echo e(__('Save And Continue')); ?>

                                        </button>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php $__env->startSection('script'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('assets/front/js/jquery-ui.js')); ?>"></script>
    <script>

        $('#add_module').on('click', function (e) {
            $('.slide-module').css('display', 'none');
            let valModule = $(".modules").val();
            e.preventDefault();
            jQuery.ajax({
                url: "<?php echo e(url('admin/dynamic-page/')); ?>" + '/' + valModule,
                method: 'get',
                success: function (data) {
                    $('#modules-container').append(data);
                    $(".summernote").summernote();
                }
            });
        });

        $(document).on("click", ".icon-delete", function () {
            $(this).parent().parent().remove();
        });

        $(document).on("click", ".minimize-module", function (e) {
            e.stopPropagation();
            $(this).parent().siblings('.card-body').slideToggle(500);
        });

        $(document).on("click", ".toggle-open-close-module", function () {
            $(this).siblings('.card-body').slideToggle(500);
        });


        $("#modules-container").sortable();

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\new_vadecom2\resources\views/admin/dynamicpage/add.blade.php ENDPATH**/ ?>