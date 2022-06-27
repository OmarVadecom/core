
<?php $__env->startSection('title', "$package->title"." | "."Vadecom"); ?>
<?php $__env->startSection('meta-description', "$package->feature"); ?>
<?php $__env->startSection('content'); ?>
<div class="page-title-area" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title"><?php echo e(__('Request Package')); ?></h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
							<li class="active" aria-current="page"><?php echo e($package->title); ?></li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 


<div class="contact-info-section section-gap" style="padding-top: 45px;">
	<div class="container">
		<div class="row align-items-center">
            <div class="col-lg-12" style="padding: 0px 120px;">
                <form id="contact_form" action="<?php echo e(route('site.request_package.store')); ?>" method="POST"
                    class="form-request">
                    <?php echo csrf_field(); ?>
                    <input name="package_id" type="hidden" value="<?php echo e($package->id); ?>">
                    <h1 class="text-center"><i class="fa fa-quote-left"></i> <?php echo e($package->title); ?> <i
                            class="fa fa-quote-right"></i></h1><br>
                    <div class="form-group d-flex justify-content-between p-0 m-0">
                        <?php if($package->category->slug== 'seo-offer' ): ?>
                        <label style="width: 120px;" class="alignlabel" for=""><i class="fa fa-globe" aria-hidden="true"></i>
                            <?php echo e(__('URL')); ?> <span style="color:red">*</span></label>
                        <input name="client_name" id="client_name" type="url" class="form-control website_url"
                            placeholder="<?php echo e(__('Website URL')); ?>">
                        <?php else: ?>
                        <label style="width: 120px;" class="alignlabel" for=""><i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo e(__('Name')); ?> <span style="color:red">*</span></label>
                        <input name="client_name" id="client_name" type="text" class="form-control"
                            placeholder="<?php echo e(__('Name')); ?>">
                        <?php endif; ?>

                    </div>
                    <div class="form-group d-flex justify-content-between p-0 m-0">
                        <label style="width: 120px;" class="alignlabel" for=""><i class="fa fa-envelope" aria-hidden="true"></i>
                            <?php echo e(__('Email')); ?> <span style="color:red">*</span></label>
                        <input name="client_email_address" id="client_email_address" type="email" class="form-control"
                            placeholder="<?php echo e(__('Email')); ?>">
                    </div>
                    <div class="form-group d-flex justify-content-between p-0 m-0">
                        <label class="alignlabel" for=""><i class="fa fa-phone fa-fw" aria-hidden="true"></i>
                            <?php echo e(__('Phone')); ?></label>
                        <input name="client_phone_number" id="client_phone_number" type="number" class="form-control"
                            placeholder="<?php echo e(__('Phone')); ?>">

                    </div>
                    <div class="form-group d-flex justify-content-between p-0 m-0">
                        <label class="alignlabel" for=""><i class="fa fa-star" aria-hidden="true"></i>
                            <?php echo e(__('Package')); ?></label>
                        <select name="package" class="form-control" id="Package" style="padding: 0px 7px;">
                            <?php $__currentLoopData = $similarPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$pkg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>" <?php echo e(($package->title==$pkg) ? 'selected' :
                                ''); ?>><?php echo e($pkg); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group d-flex justify-content-between p-0 m-0">
                        <label class="alignlabel" for=""><i class="far fa-comment"></i>
                            <?php echo e(__('Message')); ?></label>
                        <textarea name="message" class="text-area form-control" id="" cols="30" rows="3"
                            placeholder="<?php echo e(__('Message')); ?>"></textarea>
                    </div>

                    <!--   <div class="form-group margin_none">-->
                    <!--    <div class="row">-->
                    <!--    <label for="name" class="col-sm-3 control-label color_blu labelformen"></label>-->
                    <!--    <div class="col-sm-offset-2 col-sm-9">-->
                    <!--        <div id="g-recaptcha" data-sitekey="6LeUDRoUAAAAABqW_GeiZLdtjMup82hv-3eHTcap"></div>-->
                    <!--    </div></div>-->
                    <!--</div>-->


                    <button class="btn" id="submitcontact" type="submit"><?php echo e(__('Send')); ?></button>
                    <i class="fas fa-sync-alt fa-spin fa-fw hidden"></i>

                </form>

            </div>
        </div>
    </div>
</div>
<style>
    .form-request .form-control {
    margin-bottom: 11px;
    padding: 23px;
    border: 1px solid #dedede;
    font-size: 13px;
    border-radius: 5px;
    width: 74%;
}
.form-request .btn {
    background-color: #d05b00;
    color: #fff;
    padding: 9px 60px;
    margin: auto;
    display: inherit;
    border: 1px solid #b75000;
    box-shadow: 0 2px 2px #8a3c00;
    border-radius: 100px;
    text-transform: uppercase;
    font-weight: 700;
    transition: all .3s ease-in-out;
}
.hidden {
    display: none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script>
<script>
    var onloadCallback = function() {
        grecaptcha.render('g-recaptcha', {
            'sitekey' : '6LeUDRoUAAAAABqW_GeiZLdtjMup82hv-3eHTcap'
        });
    };
</script>
<script>
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }

function isValidUrl(url){
if ($(".website_url")[0]){
url=url.trim();
substr=url.substring(0, 4);
if(substr != "http"){
 url='http://'+url;   
}
var myVariable = url;
if(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(myVariable)) {
  return true;
} else {
  return false;
}
}else{
return true;
}   
}

$('#submitcontact').click(function(){
// var response = grecaptcha.getResponse();
name=$('#client_name').val();
email=$('#client_email_address').val();
phone=$('#client_phone_number').val();

if(name=='' && email==''){
$('#client_email_address,#client_name').css('border','1px solid red');
// $('#client_phone_number').css('border','none')
}

else if(email == '' || isValidEmailAddress(email) == false){
$('.erremail').css('display','block');
$('.errname,.errphone').hide('slow');
$('#client_email_address').css('border','1px solid red')
$('#client_phone_number').css('border','none')
}
else if(name=='' || isValidUrl(name) == false){
$('#client_name').css('border','1px solid red');
$('#client_phone_number,#client_email_address').css('border','none')
if(!isValidUrl(name)){
// alert("Please add a valid Url like http://vadecom.net");
}
}


// else if(response.length == 0){
//     $("#g-recaptcha").css('border','1px solid red');
// }


else{
$("#submitcontact").attr("disabled", true);
$(".fa-fw").show('slow');
$('.errphone').hide('slow');
$('.errname').hide('slow');
$('.erremail').hide('slow');
$('#contact_form').submit();
}
return false;
})





</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/new.vadecom.net/public_html/core/resources/views/front/request_package.blade.php ENDPATH**/ ?>