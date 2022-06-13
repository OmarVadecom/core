

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('SEO Information')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('SEO Information')); ?></li>
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
                        <h3 class="card-title"><?php echo e(__('Update SEO Information')); ?> </h3>
                        <div class="card-tools d-flex">
                            <div class="d-inline-block mr-4">
                                <select class="form-control lang languageSelect"  data="<?php echo e(url()->current() . '?language='); ?>">
                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.setting.updateSeoinfo', $seo->language_id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Home Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->meta_keywords); ?>">
                                    <?php if($errors->has('meta_keywords')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('meta_keywords')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Home Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->meta_description); ?></textarea>
                                    <?php if($errors->has('meta_description')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('meta_description')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('About Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="about_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->about_meta_key); ?>">
                                    <?php if($errors->has('about_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('about_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('About Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="about_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->about_meta_desc); ?></textarea>
                                    <?php if($errors->has('about_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('about_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>

                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Service Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="service_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->service_meta_key); ?>">
                                    <?php if($errors->has('service_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('service_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Service Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="service_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->service_meta_desc); ?></textarea>
                                    <?php if($errors->has('service_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('service_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Portfolio Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="portfolio_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->portfolio_meta_key); ?>">
                                    <?php if($errors->has('portfolio_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('portfolio_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Portfolio Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="portfolio_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->portfolio_meta_desc); ?></textarea>
                                    <?php if($errors->has('portfolio_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('portfolio_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Package Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="package_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->package_meta_key); ?>">
                                    <?php if($errors->has('package_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('package_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Package Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="package_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->package_meta_desc); ?></textarea>
                                    <?php if($errors->has('package_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('package_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Team Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="team_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->team_meta_key); ?>">
                                    <?php if($errors->has('team_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('team_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Team Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="team_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->team_meta_desc); ?></textarea>
                                    <?php if($errors->has('team_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('team_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('FAQ Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="faq_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->faq_meta_key); ?>">
                                    <?php if($errors->has('faq_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('faq_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('FAQ Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="faq_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->faq_meta_desc); ?></textarea>
                                    <?php if($errors->has('faq_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('faq_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Gallery Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="gallery_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->gallery_meta_key); ?>">
                                    <?php if($errors->has('gallery_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('gallery_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Gallery Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="gallery_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->gallery_meta_desc); ?></textarea>
                                    <?php if($errors->has('gallery_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('gallery_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Career Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="career_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->career_meta_key); ?>">
                                    <?php if($errors->has('career_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('career_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Career Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="career_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->career_meta_desc); ?></textarea>
                                    <?php if($errors->has('career_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('career_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Blog Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="blog_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->blog_meta_key); ?>">
                                    <?php if($errors->has('blog_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('blog_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Blog Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="blog_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->blog_meta_desc); ?></textarea>
                                    <?php if($errors->has('blog_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('blog_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Product Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="product_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->product_meta_key); ?>">
                                    <?php if($errors->has('product_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('product_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Product Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="product_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->product_meta_desc); ?></textarea>
                                    <?php if($errors->has('product_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('product_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Contact Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="contact_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->contact_meta_key); ?>">
                                    <?php if($errors->has('contact_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('contact_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Contact Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="contact_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->contact_meta_desc); ?></textarea>
                                    <?php if($errors->has('contact_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('contact_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <br>
                            
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Quot Page - Meta Keywords')); ?> </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" data-role="tagsinput" name="quot_meta_key" placeholder="<?php echo e(__('Enter Meta Keywords')); ?>" value="<?php echo e($seo->quot_meta_key); ?>">
                                    <?php if($errors->has('quot_meta_key')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('quot_meta_key')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-12 control-label"><?php echo e(__('Quot Page - Meta Description')); ?></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="quot_meta_desc" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($seo->quot_meta_desc); ?></textarea>
                                    <?php if($errors->has('quot_meta_desc')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('quot_meta_desc')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
    </div>


</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/settings/seo.blade.php ENDPATH**/ ?>