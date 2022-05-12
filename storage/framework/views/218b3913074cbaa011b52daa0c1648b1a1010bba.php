<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Menu Builder</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('admin.dashboard')); ?>">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">Menu Builder</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Menu Builder</h3>
                            <div class="card-tools d-flex">
                                <button id="updateMenu" class="btn btn-primary btn-sm mr-4">Update Main Menu</button>
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
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6>Add/Edit/Update Area</h6>
                                        </div>
                                        <div class="card-body">
                                            <form id="frmEdit" class="form-horizontal">
                                                <input class="item-menu" type="hidden" name="type" value="">
                                                <div id="withUrl">
                                                    <div class="form-group">
                                                        <label for="text">Text</label>
                                                        <input type="text" class="form-control item-menu" name="text" placeholder="Text" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="url">
                                                            URL
                                                            <small class="pre-link"><?php echo e(config('app.url') . '/'); ?></small>
                                                            <small class="after-link"></small>
                                                        </label>
                                                        <input
                                                            class="form-control item-menu urlInput"
                                                            placeholder="URL"
                                                            type="text"
                                                            name="url"
                                                            id="url"
                                                        />
                                                        <input class="item-menu hrefInput" type="hidden" name="href" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="target">Target</label>
                                                        <select name="target" id="target" class="form-control item-menu">
                                                            <option value="_self">Self</option>
                                                            <option value="_blank">Blank</option>
                                                            <option value="_top">Top</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="withoutUrl" style="display: none;">
                                                    <div class="form-group">
                                                        <label for="text">Text</label>
                                                        <input type="text" class="form-control item-menu" name="text" placeholder="Text" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="href">URL</label>
                                                        <input type="text" class="form-control item-menu" name="href" placeholder="URL" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="target">Target</label>
                                                        <select name="target" class="form-control item-menu">
                                                            <option value="_self">Self</option>
                                                            <option value="_blank">Blank</option>
                                                            <option value="_top">Top</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" id="btnUpdate" class="btn btn-info btn-sm" disabled>
                                                <i class="fas fa-sync-alt"></i>
                                                Update Menu
                                            </button>
                                            <button type="button" id="btnAdd" class="btn btn-success btn-sm">
                                                <i class="fas fa-plus"></i>
                                                Add Menu
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6>Main Menu Area</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul id="myEditor" class="sortableLists list-group"></ul>
                                        </div>
                                    </div>
                                </div>














































































































































































                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/admin/js/menu.js')); ?>"></script>
    <script>
        jQuery(document).ready(function () {
            /* =============== DEMO =============== */
            // menu items
            var arrayjson = <?php echo json_encode($prevMenu); ?>;

            // icon picker options
            var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
            // sortable list options
            var sortableListOptions = {
                placeholderCss: {'background-color': "#ddd"}
            };

            var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions});
            editor.setForm($('#frmEdit'));
            editor.setUpdateButton($('#btnUpdate'));
            // $('#btnReload').on('click', function () {

            editor.setData(<?php echo $prevMenu; ?>);
            // });

            $('#updateMenu').on('click', function () {
                var str = editor.getString();
                let fd = new FormData();
                // fd.append('language_id', );
                fd.append('str', str);
                fd.append('language_id', <?php echo e($lang_id); ?>);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "<?php echo e(route('admin.menu.update')); ?>",
                    type: 'POST',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log(data);
                        if (data.status == 'error') {
                            error(data.message);
                        } else {
                            success(data.message);
                        }
                    }
                });
            });


            $("#btnUpdate").click(function () {
                disableWithoutUrl();
                editor.update();
                enableWithoutUrl();
                $('.after-link').css('margin-left', '0').text('');
            });

            $('#btnAdd').click(function () {
                disableWithoutUrl();
                $("input[name='type']").val('custom');
                editor.add();
                enableWithoutUrl();
                $('.after-link').css('margin-left', '0').text('');
            });
            /* ====================================== */

            // when menu is chosen from readymade menus list
            $(".addToMenus").on('click', function (e) {
                e.preventDefault();
                disableWithUrl();
                $("input[name='type']").val($(this).data('type'));
                $("#withoutUrl input[name='text']").val($(this).data('text'));
                $("#withoutUrl input[name='target']").val('_self');
                editor.add();
                enableWithUrl();

                if ($(this).data('type').indexOf('mega') > -1) {
                    $("#myEditor").find("span.txt").last().after(" <span class='ml-2 badge badge-danger'>Mega Menu</span>");
                }

            });
        });

        $(document).ready(function () {
            $('.urlInput').on('keyup', function () {
                $('.after-link').css('margin-left', '-3px').text($(this).val());
                $('.hrefInput').val("<?php echo e(config('app.url')); ?>/" + $(this).val());
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/admin/menu/index.blade.php ENDPATH**/ ?>