<?php $__env->startSection('title', 'Vadecom Website :: Contact Us'); ?>

<?php $__env->startSection('content'); ?>
    <table cellspacing='3' cellpadding='0' width='900' border='1' style='width:450.0pt;border:solid #cccccc 1.0pt' dir='rtl'>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الإسم:</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'><?php echo e($client['client_name']); ?></td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>التليفون :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                <a href='tel:<?php echo e($client['client_phone_number']); ?>'> <?php echo e($client['client_phone_number']); ?> </a>
            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الإيميل :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                <a href="mailto:<?php echo e($client['client_email_address']); ?>"><?php echo e($client['client_email_address']); ?></a>
            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الطلب :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'> <?php echo e($package->title_translated_piped); ?> </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>الرسالة :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                <?php echo e($client['message']); ?>

            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>بتاريخ :</td> <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>
                <?php echo e(date('Y-m-d h:iA')); ?>

            </td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>IP :</td> <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'><?php echo e(request()->ip()); ?></td>
        </tr>
        <tr>
            <td width='225' style='font-weight: bold; width:112.5pt;border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'>من صفحة :</td>
            <td style='border:solid #cccccc 1.0pt;padding:.75pt .75pt .75pt .75pt'><?php echo e(URL::previous()); ?></td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.emails.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/emails/request_package.blade.php ENDPATH**/ ?>