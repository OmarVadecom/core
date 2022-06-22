<div class="card">
<?php
$randNumModule = \Illuminate\Support\Str::random(10);
?>


  <div class="card-header toggle-open-close-module">
    <i class="fas fa-times icon-delete"></i>
    Thanks Messsage
    <i class="minimize-module fas fa-chevron-down"></i>
  </div>

  <div class="card-body" style="display: none">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="col-md-6 nav-item nav-link active" id="nav-en-thanks-tab" data-toggle="tab" href="#nav-en-thanks" role="tab" aria-controls="nav-en-thanks" aria-selected="true">English</a>
          <a class="col-md-6 nav-item nav-link" id="nav-ar-thanks-tab" data-toggle="tab" href="#nav-ar-thanks" role="tab" aria-controls="nav-ar-thanks" aria-selected="false">عربي</a>
      </div>
    </nav>
    <?php if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit')): ?>
   
    
    <div class="tab-content" id="nav-tabContent">
    
      <div class="col-md-12 tab-pane fade show active" id="nav-en-thanks" role="tabpanel" aria-labelledby="nav-en-thanks-tab" >
          <div class="form-group my-3">
            <label for="title">Thanks Messsage</label>
            <textarea type="text" name="mod[<?php echo e($randNumModule); ?>][Thanksmessage][content]" class="form-control"><?php echo e(isset($moduleAttributes['content']) ? $moduleAttributes['content'] : ''); ?></textarea>
          </div>
      </div>

      <div class="col-md-12 tab-pane fade" id="nav-ar-thanks" role="tabpanel" aria-labelledby="nav-ar-thanks-tab">
        <div class="form-group my-3">
          <label for="title">رساله شكر</label>
          <textarea type="text" name="mod[<?php echo e($randNumModule); ?>][Thanksmessage][ar_content]" class="form-control"><?php echo e(isset($moduleAttributes['ar_content']) ? $moduleAttributes['ar_content'] : ''); ?></textarea>
        </div>
      </div>

    </div>


    <?php else: ?>

    <div class="tab-content" id="nav-tabContent">

      <div class="col-md-12 tab-pane fade show active" id="nav-en-thanks" role="tabpanel" aria-labelledby="nav-en-thanks-tab" >
        <div class="form-group my-3">
          <label for="title">Thanks Messsage</label>
          <textarea type="text" name="mod[<?php echo e($randNumModule); ?>][Thanksmessage][content]" class="form-control"></textarea>
        </div>
      </div>

      <div class="col-md-12 tab-pane fade" id="nav-ar-thanks" role="tabpanel" aria-labelledby="nav-ar-thanks-tab">
        <div class="form-group my-3">
          <label for="title">رساله شكر</label>
          <textarea type="text" name="mod[<?php echo e($randNumModule); ?>][Thanksmessage][ar_content]" class="form-control"></textarea>
        </div>
      </div>

    </div>
    <?php endif; ?>
  </div>
</div>
<div class="clearfix"></div>

<?php /**PATH C:\PHP\htdocs\filemanager\vadecome\core\resources\views/admin/modules/style_of_modules/thanksmessage.blade.php ENDPATH**/ ?>