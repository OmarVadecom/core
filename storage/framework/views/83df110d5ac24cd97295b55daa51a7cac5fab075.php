<!--====== SERVICES PLANS PART START ======-->
<?php
    $category=App\Models\PackageCategory::find($module['category_id']);
    $plans=$category->packages;
?>

<div class="pricing-section section-gap" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-8 mt-30">
                    <div class="pricing-plan-item text-center">
                        <b class="plan-name"><?php echo e($plan->title); ?></b>
                        <h3 class="price"><span> <?php echo e(Helper::showCurrencyPrice($plan->price)); ?></span></h3>
                        <?php if($plan->old_price): ?>
                            <del class="price" style="color: #81a3bb">
								<?php echo e(Helper::showCurrencyPrice($plan->old_price)); ?>

							</del>
                        <?php else: ?>
                            <span class="bar"></span>
                        <?php endif; ?>
                        <ul class="list">
                            <?php
                                $feature = explode( ',', $plan->feature );
                                for ($i=0; $i < count($feature); $i++) {
                                    echo '<li><p href="mailto:'.$feature[$i].'">'.$feature[$i].'</p></li>';
                                }
                            ?>
                        </ul>

                        <a
							href="<?php echo e(url('/')); ?>/request-package/<?php echo e($category->slug); ?>/<?php echo e($plan->slug); ?>"
							class="plans-btn"
						><?php echo e(($plan->button_text != "") ? $plan->button_text : __('Buy Now')); ?></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!--====== SERVICES PLANS PART ENDS ======--><?php /**PATH C:\PHP\htdocs\new_vadecom\core\resources\views/admin/modules/themes_for_modules/packages_category.blade.php ENDPATH**/ ?>