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
        	<div class="container">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="lfm">File Manager</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <?php echo $__env->yieldContent('content'); ?>
            

            <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <input type="hidden" id="main_url" value="<?php echo e(route('front.index')); ?>">

        <?php
            $mainbs                     = [];
            $mainbs['slider_overlay']   = $commonsetting->slider_overlay;
            $mainbs                     = json_encode($mainbs);
        ?>
         <script src="<?php echo e(asset('/vendor/laravel-filemanager/js/stand-alone-button.js')); ?> "></script>
         <script>
            $('#lfm').filemanager('image');
         </script>
       <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('lfm').addEventListener('click', (event) => {
            event.preventDefault();
            window.open('/laravel-filemanager', 'fm', 'width=1400,height=800');
            });
        });
        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
        </script>
        <?php if ($__env->exists('admin.partials.scripts')) echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script type="text/javascript">
            var mainbs = <?php echo $mainbs; ?>;
        </script>
     
    </body>
</html>
<?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/layout.blade.php ENDPATH**/ ?>