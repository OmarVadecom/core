

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Job')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Job')); ?></li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1"><?php echo e(__('Edit Job')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.job'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.job.update',$job->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Language')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control lang" name="language_id" id="job_lan">
                                                <option value="" selected disabled>Select a Language</option>
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($lang->id); ?>" <?php echo e($job->language_id == $lang->id ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('language_id')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('language_id')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 control-label"><?php echo e(__('Title')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($job->title); ?>">
                                            <?php if($errors->has('title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bcategory_id" class="col-sm-2 control-label"><?php echo e(__('Category')); ?><span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="jcategory_id" id="job_category_id">
                                                <?php $__currentLoopData = $jcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($jcategory->id); ?>" <?php echo e($jcategory->id == $job->jcategory_id ? 'selected' : ''); ?> ><?php echo e($jcategory->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('jcategory_id')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('jcategory_id')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                

                                    <div class="form-group row">
                                        <label for="position" class="col-sm-2 control-label"><?php echo e(__('Job Position')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="position" placeholder="<?php echo e(__('Job Position')); ?>" value="<?php echo e($job->position); ?>">
                                            <?php if($errors->has('position')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('position')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="company_name" class="col-sm-2 control-label"><?php echo e(__('Company Name')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="company_name" placeholder="<?php echo e(__('Company Name')); ?>" value="<?php echo e($job->company_name); ?>">
                                            <?php if($errors->has('company_name')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('company_name')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="vacancy" class="col-sm-2 control-label"><?php echo e(__('Vacancy')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="vacancy" placeholder="<?php echo e(__('Vacancy')); ?>" value="<?php echo e($job->vacancy); ?>">
                                            <?php if($errors->has('vacancy')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('vacancy')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="job_responsibility" class="col-sm-2 control-label"><?php echo e(__('Job Responsibility')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                                <textarea name="job_responsibility" class="form-control summernote" id="ck" placeholder="<?php echo e(__('Job Responsibility')); ?>"><?php echo e($job->job_responsibility); ?></textarea>
                                            <?php if($errors->has('job_responsibility')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('job_responsibility')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="job_context" class="col-sm-2 control-label"><?php echo e(__('Job Context')); ?></label>
                                        <div class="col-sm-10">
                                                <textarea name="job_context" class="form-control summernote" id="ck" placeholder="<?php echo e(__('Job Context')); ?>"><?php echo e($job->job_context); ?></textarea>
                                            <?php if($errors->has('job_context')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('job_context')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="education_requirement" class="col-sm-2 control-label"><?php echo e(__('Educational Requirements')); ?></label>

                                        <div class="col-sm-10">
                                                <textarea name="education_requirement" class="form-control summernote" id="ck" placeholder="<?php echo e(__('Educational Requirements')); ?>"><?php echo e($job->education_requirement); ?></textarea>
                                            <?php if($errors->has('content')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('education_requirement')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="experience_requirement" class="col-sm-2 control-label"><?php echo e(__('Experience Requirements')); ?></label>

                                        <div class="col-sm-10">
                                                <textarea name="experience_requirement" class="form-control summernote" id="ck" placeholder="<?php echo e(__('Experience Requirements')); ?>"><?php echo e($job->experience_requirement); ?></textarea>
                                            <?php if($errors->has('content')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('experience_requirement')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="additional_requirement" class="col-sm-2 control-label"><?php echo e(__('Additional Requirements')); ?></label>

                                        <div class="col-sm-10">
                                                <textarea name="additional_requirement" class="form-control summernote" id="ck" placeholder="<?php echo e(__('Additional Requirements')); ?>"><?php echo e($job->additional_requirement); ?></textarea>
                                            <?php if($errors->has('content')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('additional_requirement')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="employment_status" class="col-sm-2 control-label"><?php echo e(__('Employment Status')); ?><span class="text-danger">*</span></label>
                                        
                                        <div class="col-sm-10">
                                            
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="employment_status[]" id="inlineCheckbox1" value="Full Time" <?php echo e(in_array('Full Time',$status_list) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="inlineCheckbox1">Full Time</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="employment_status[]" id="inlineCheckbox2" value="Part Time" <?php echo e(in_array('Part Time',$status_list) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="inlineCheckbox2">Part Time</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="employment_status[]" id="inlineCheckbox3" value="Project Based" <?php echo e(in_array('Project Based',$status_list) ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="inlineCheckbox3">Project Based</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="employment_status[]" id="inlineCheckbox3" value="Remote" <?php echo e(in_array('Remote',$status_list) ? 'checked' : ''); ?>>
                                                <label class="form-check-label" for="inlineCheckbox3">Remote</label>
                                            </div>
                                            <?php if($errors->has('employment_status')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('employment_status')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="job_location" class="col-sm-2 control-label"><?php echo e(__('Job Location')); ?> <span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="job_location" placeholder="<?php echo e(__('Job Location')); ?>" value="<?php echo e($job->job_location); ?>">
                                            <?php if($errors->has('job_location')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('job_location')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="other_benefits" class="col-sm-2 control-label"><?php echo e(__('Compensation & Other Benefits')); ?></label>

                                        <div class="col-sm-10">
                                                <textarea name="other_benefits" class="form-control summernote" id="ck" placeholder="<?php echo e(__('Compensation & Other Benefits')); ?>"><?php echo e($job->other_benefits); ?></textarea>
                                            <?php if($errors->has('content')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('other_benefits')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="salary" class="col-sm-2 control-label"><?php echo e(__('Salary')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="salary" placeholder="<?php echo e(__('Salary')); ?>" value="<?php echo e($job->salary); ?>">
                                            <?php if($errors->has('salary')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('salary')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="deadline" class="col-sm-2 control-label"><?php echo e(__('Deadline')); ?><span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"  id="submission_date" name="deadline" placeholder="<?php echo e(__('Deadline')); ?>" value="<?php echo e($job->deadline); ?>">
                                            <?php if($errors->has('deadline')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('deadline')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="meta_tags" class="col-sm-2 control-label"><?php echo e(__('Meta Tags')); ?></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" data-role="tagsinput" name="meta_tags" placeholder="<?php echo e(__('Meta Tags')); ?>" value="<?php echo e($job->meta_tags); ?>">
                                            <?php if($errors->has('meta_tags')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('meta_tags')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="meta_description" class="col-sm-2 control-label"><?php echo e(__('Meta Description')); ?></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($job->meta_description); ?></textarea>
                                            <?php if($errors->has('meta_description')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('meta_description')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                                <option value="0" <?php echo e($job->status == '0' ? 'selected' : ''); ?>><?php echo e(__('Unpublish')); ?></option>
                                                <option value="1" <?php echo e($job->status == '1' ? 'selected' : ''); ?>><?php echo e(__('Publish')); ?></option>
                                            </select>
                                            <?php if($errors->has('status')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('status')); ?> </p>
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
    </div>
</section>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\core\resources\views/admin/job/edit.blade.php ENDPATH**/ ?>