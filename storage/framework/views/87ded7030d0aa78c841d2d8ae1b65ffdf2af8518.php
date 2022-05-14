<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta charset="utf-8">

        <title><?php echo e($setting->website_title); ?></title>

        <link rel="shortcut icon" href="<?php echo e(asset('assets/front/img/'.$setting->fav_icon)); ?>" type="image/png">

        <?php if ($__env->exists('admin.partials.styles')) echo $__env->make('admin.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if($currentLang->direction == 'rtl' ): ?>
            <style>
                .content-wrapper .form-group {
                    direction: rtl;
                    text-align: right
                }

                label {
                    display: block;
                    text-align: right
                }

                button[type=submit] {
                    display: block;
                    text-align: right
                }

                .custom-file-label::after {
                    right: auto;
                    left: 0px;
                }

                input[type=email],
                input[name=from_email] {
                    direction: ltr;
                    text-align: left
                }

                .cm-s-monokai.CodeMirror {
                    direction: ltr;
                    text-align: left
                }

                div.dataTables_wrapper div.dataTables_filter label {
                    text-align: right
                }
            </style>
        <?php endif; ?>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/file-manager/css/file-manager.css')); ?>">
    </head>

    <body
        <?php if(Session::has('notification')): ?> data-notification-message='<?php echo e(json_encode(Session::get('notification'))); ?> <?php endif; ?>'
        class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed"
        <?php echo e(Session::has('notification') ? 'data-notification' : ''); ?>

    >

        <div class="wrapper">
            <?php echo $__env->make('admin.partials.top-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('admin.partials.side-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="content-wrapper">
        
        <?php if(Request::is('*/edit/*') || Request::is('*/add') ): ?>
        	
            
            <div class="input-group">
                <input type="text" id="image_label" class="form-control" name="image"
                       aria-label="Image" aria-describedby="button-image">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                </div>
            </div>
        <?php endif; ?>
           
            <?php echo $__env->yieldContent('content'); ?>
            

            <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <input type="hidden" id="main_url" value="<?php echo e(route('front.index')); ?>">

        <?php
            $mainbs                     = [];
            $mainbs['slider_overlay']   = $commonsetting->slider_overlay;
            $mainbs                     = json_encode($mainbs);
        ?>
       
        <?php if ($__env->exists('admin.partials.scripts')) echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script src="<?php echo e(asset('vendor/file-manager/js/file-manager.js')); ?>"></script>
        
        <script>
        document.addEventListener("DOMContentLoaded", function() {

document.getElementById('button-image').addEventListener('click', (event) => {
  event.preventDefault();

  window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
});
});

// set file link
function fmSetLink($url) {
document.getElementById('image_label').value = $url;
}     
        </script>     
    </body>
</html>
<?php /**PATH C:\laragon\www\core\resources\views/admin/layout.blade.php ENDPATH**/ ?>