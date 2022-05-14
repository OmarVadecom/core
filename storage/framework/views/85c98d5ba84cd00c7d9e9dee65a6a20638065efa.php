<h2>{{ preview.name }}</h2>

<p>
    <?php echo e(trans('filemanager::filemanager.size')); ?>: {{ formatBytes(preview.file_size) }} <br>
    <?php echo e(trans('filemanager::filemanager.type')); ?>: {{ preview.ext }} <br>
    <span ng-if="preview.extra"><?php echo e(trans('filemanager::filemanager.dimension')); ?>: {{ preview.extra.width+'x'+preview.extra.height}} <br></span>
    <?php echo e(trans('filemanager::filemanager.created')); ?>: {{ preview.created_at }} <br>
    <?php echo e(trans('filemanager::filemanager.modified')); ?>: {{ preview.updated_at }} <br>
</p><?php /**PATH C:\laragon\www\core\vendor\haruncpi\laravel-simple-filemanager\src/views/partials/preview.blade.php ENDPATH**/ ?>