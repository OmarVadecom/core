<div class="col-sm-auto col-12">
    <div class="top-left-content">
   

































    </div>
</div>
<div class="col-sm-auto col-12">
    <div class="top-right-wrapper">
        <div class="social-icon text-center">
            <ul>
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e($item->url); ?>"><i class="<?php echo e($item->icon); ?>"></i></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </ul>
        </div>
        <div class="language-change">
            <?php if($currentLang->code == "ar"): ?>
                <a class="name text-white" href="<?php echo e(Helper::changeSiteLocale('en')); ?>" >
                    <i class="fas fa-globe-americas"></i>
                    E
                </a>
            <?php else: ?>
                <a class="name text-white" href="<?php echo e(Helper::changeSiteLocale('ar')); ?>" >
                    <i class="fas fa-globe-americas"></i>
                    ع
                </a>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH F:\wamp64\www\new_vadecom2\resources\views/front/partials/menu/topContent.blade.php ENDPATH**/ ?>