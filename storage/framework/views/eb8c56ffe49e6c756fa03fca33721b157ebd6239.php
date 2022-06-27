<div class="mobile_preview" ng-show="mobilePreviewOpen">
    <div class="preview_section">
        <div class="preview_header">
            <div class="title"><?php echo e(trans('filemanager::filemanager.preview')); ?></div>
            <div class="button">
                <button ng-click="mobilePreviewOpen=0"><i class="fa fa-times"></i></button>
            </div>
        </div>

        <div class="image_wrapper">
            <img onerror="this.src='/filemanager/img/previews/missing.png'" ng-src="{{ preview.absolute_url }}" alt="{{ preview.name }}">
        </div>
        <div class="info">
            <?php echo $__env->make('filemanager::partials.preview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<div class="mobile_upload" ng-show="mobileUploadOpen">
    <div class="btn_mobile_upload_close">
        <button ng-click="mobileUploadOpen=0"><i class="fa fa-times"></i></button>
    </div>

    <p class="upload_title"><?php echo e(trans('filemanager::filemanager.upload')); ?></p>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    <div class="upload_area dropzone"
         options="dzOptionsMobile" callbacks="dzCallbacks" methods="dzMethods" ng-dropzone>
    </div>
    <div class="mobile_preview_container"></div>
</div><?php /**PATH C:\laragon\www\core\vendor\haruncpi\laravel-simple-filemanager\src/views/partials/mobile.blade.php ENDPATH**/ ?>