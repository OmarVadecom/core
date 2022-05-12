<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Product')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Product')); ?></li>
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
                                <h3 class="card-title mt-1"><?php echo e(__('Edit Product')); ?></h3>
                                <div class="card-tools">
                                    <a href="<?php echo e(route('admin.product'). '?language=' . $currentLang->code); ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo e(route('admin.product.update',$product->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label"><?php echo e(__('Image')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 show-img img-demo" src="<?php echo e($product->image ? asset('assets/front/img/'.$product->image) : asset('assets/admin/img/img-demo.jpg')); ?>" alt="">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="image"><?php echo e(__('Choose Image')); ?></label>
                                                <input type="file" class="custom-file-input up-img" name="image" id="image">
                                            </div>
                                            <?php if($errors->has('image')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('image')); ?> </p>
                                            <?php endif; ?>
                                            <p class="help-block text-info"><?php echo e(__('Upload 270X290 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.')); ?>

                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="language_id" class="col-sm-2 control-label"><?php echo e(__('Language')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <select name="language_id" class="form-control" id="select_language" data-href="<?php echo e(route('admin.helper.category') . '?table=product_categories'); ?>" data-role="<?php echo e($product->category_id); ?>">
                                                <option value="" selected disabled><?php echo e(__('Select a language')); ?></option>
                                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($lang->id); ?>" <?php echo e($product->language_id == $lang->id ? 'selected' : ''); ?>><?php echo e($lang->name); ?></option>
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
                                            <input type="text" class="form-control" name="title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($product->title); ?>">
                                            <?php if($errors->has('title')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('title')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="category_id" class="col-sm-2 control-label"><?php echo e(__('Category')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <select class="form-control" name="category_id" id="showData">

                                            </select>
                                            <?php if($errors->has('category_id')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('category_id')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="current_price" class="col-sm-2 control-label"><?php echo e(__('Current Price')); ?> ($)<span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="current_price" placeholder="<?php echo e(__('Current Price')); ?>" value="<?php echo e(Helper::showPrice($product->current_price)); ?>">
                                            <?php if($errors->has('current_price')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('current_price')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="previous_price" class="col-sm-2 control-label"><?php echo e(__('Previous Price')); ?> ($)<span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="previous_price" placeholder="<?php echo e(__('Previous Price')); ?>" value="<?php echo e(Helper::showPrice($product->previous_price)); ?>">
                                            <?php if($errors->has('previous_price')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('previous_price')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="sku" class="col-sm-2 control-label"><?php echo e(__('Sku')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="sku" placeholder="<?php echo e(__('Sku')); ?>" value="<?php echo e($product->sku); ?>">
                                            <?php if($errors->has('sku')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('sku')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="stock" class="col-sm-2 control-label"><?php echo e(__('Product Stock Quantity')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <input type="text"  class="form-control" name="stock" placeholder="<?php echo e(__('Product Stock Quantity')); ?>" value="<?php echo e($product->stock); ?>">
                                            <?php if($errors->has('stock')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('stock')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="short_description" class="col-sm-2 control-label"><?php echo e(__('Short Description')); ?> <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="short_description" placeholder="<?php echo e(__('Short Description')); ?>"  rows="2"><?php echo e($product->short_description); ?></textarea>
                                            <?php if($errors->has('short_description')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('short_description')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 control-label"><?php echo e(__('Description')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                                <textarea name="description" rows="4" class="form-control summernote" id="ck" placeholder="<?php echo e(__('Description')); ?>"><?php echo e($product->description); ?></textarea>
                                            <?php if($errors->has('description')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('description')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col-sm-2 icheck-success">
                                            <input type="checkbox" <?php if($product->is_downloadable == 1): ?> checked <?php endif; ?> <?php if(old('is_downloadable')): ?> checked <?php endif; ?> id="is_downloadable" name="is_downloadable" value="1">
                                            <label for="is_downloadable"><?php echo e(__('Is Downloadable')); ?></label>
                                        </div>
                                

                                        <div class="col-sm-10 showFile <?php echo e($product->is_downloadable == 1 || old('is_downloadable') ? '' : 'd-none'); ?>">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="file"><?php echo e(__('Upload File')); ?></span>
                                                </div>
                                                <div class="custom-file">
                                                  <input type="file" class="custom-file-input"  name="downloadable_file" id="file" aria-describedby="file">
                                                  <label class="custom-file-label" for="file">Choose file</label>
                                                </div>
                                            </div>
                                            <?php if($errors->has('downloadable_file')): ?>
                                            <p class="text-danger"> <?php echo e($errors->first('downloadable_file')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                        <div class="form-group row">
                                            <label for="file" class="col-sm-2 control-label"><?php echo e(__('Product Gallery Images')); ?></label>
                                            <div class="col-sm-10">
                                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#setgallery">
                                                    <i class="fas fa-cloud-upload-alt"></i> <?php echo e(__('Upload Gallery Images')); ?>

                                                </a>
                                                <p class="help-block text-info"><?php echo e(__('Upload 540X540 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.')); ?>

                                                </p>
                                            </div>
                                        </div>

                                    <input type="file" name="gallery[]" class="d-none" id="uploadgallery" accept="image/*" multiple>

                                    <div class="form-group row" id="attribute_view">
                                        <label for="attribute" class="col-sm-2 control-label"><?php echo e(__('Attribute')); ?></label>
                                        <?php $__currentLoopData = explode(',,,',$product->attributes_title); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr_key => $attr_title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $attr_desc = explode(',,,',$product->attributes_description);
                                        ?>
                                            <div class="col-sm-10 offset-2 mb-3">
                                                <span class="remove-btn"><i class="fas fa-times"></i></span>
                                                <input type="text" id="attribute" class="form-control mb-2" name="attributes_title[]" placeholder="Attributes" value="<?php echo e($attr_title); ?>">
                                                <textarea name="attributes_description[]" class="form-control " placeholder="Attribute Description"><?php echo e($attr_desc[$attr_key]); ?></textarea>
                                                </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <div class="form-group row">
                                        <label for="add_more" class="col-sm-2 control-label"></label>

                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary btn-sm" id="add_more"><i class="fas fa-plus"></i><?php echo e(__('Add More Attribute')); ?></button>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tags" class="col-sm-2 control-label"><?php echo e(__('Tags')); ?></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" data-role="tagsinput" name="tags" placeholder="<?php echo e(__('Tags')); ?>" value="<?php echo e($product->tags); ?>">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="meta_tags" class="col-sm-2 control-label"><?php echo e(__('Meta Tags')); ?></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" data-role="tagsinput" name="meta_tags" placeholder="<?php echo e(__('Meta Tags')); ?>" value="<?php echo e($product->meta_tags); ?>">
                                            <?php if($errors->has('meta_tags')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('meta_tags')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="meta_description" class="col-sm-2 control-label"><?php echo e(__('Meta Description')); ?></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>"  rows="4"><?php echo e($product->meta_description); ?></textarea>
                                            <?php if($errors->has('meta_description')): ?>
                                                <p class="text-danger"> <?php echo e($errors->first('meta_description')); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label"><?php echo e(__('Status')); ?><span class="text-danger">*</span></label>

                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                            <option value="0" <?php echo e($product->status == 0 ? 'selected' : ''); ?>><?php echo e(__('Unpublish')); ?></option>
                                            <option value="1" <?php echo e($product->status == 1 ? 'selected' : ''); ?>><?php echo e(__('Publish')); ?></option>
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
    <!-- /.row -->
</section>
<div class="modal fade" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo e(__('Image Gallery')); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="top-area">
					<div class="row">
						<div class="col-sm-6 text-right">
							<div class="upload-img-btn  btn btn-primary">
								<label for="image-upload" id="prod_gallery">
                                    <i class="fas fa-cloud-upload-alt mr-1"></i><?php echo e(__('Upload File')); ?></label>
							</div>
						</div>
						<div class="col-sm-6">
							<a href="javascript:;" class="upload-done btn btn-success" data-dismiss="modal">
                                <i class="fas fa-check-circle mr-1"></i> <?php echo e(__('Done')); ?></a>
						</div>
						<div class="col-sm-12 text-center mt-4">( <small><?php echo e(__('You can upload multiple Images.')); ?></small>
							)</div>
					</div>
				</div>
				<div class="gallery-images">
					<div class="selected-image">
						<div class="row">
                            <?php $__currentLoopData = $product->product_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6">
                                <div class="img gallery-img">
                                <span id="delete-gallery-image" class="remove-img" data-target="<?php echo e(route('admin.product.gallery.remove',$gallery->id)); ?>"><i class="fas fa-times"></i>
                                <input type="hidden" value="<?php echo e($key); ?>">
                                </span>
                                <img src="<?php echo e(asset('assets/front/img/'.$gallery->image)); ?>" alt="gallery image">
                                </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>