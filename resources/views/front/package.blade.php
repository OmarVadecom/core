@extends('front.layout')

@section('meta-keywords', "$seo->career_meta_key")
@section('meta-description', "$seo->career_meta_desc")
@section('content')

<div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">{{ __('Request Package') }}</h2>
						<ul class="breadcrumb-nav">
							<li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="active" aria-current="page">Packages</li>
						</ul>
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!-- Packages -->
<div class="wrapper-prices py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="table basic">
                  <div class="price-section">
                    <div class="price-area">
                      <div class="inner-area">
                        <span class="text">$</span>
                        <span class="price">29</span>
                      </div>
                    </div>
                  </div>
                  <div class="package-name">
                    <div class="package-name-inner">
                        Advanced Website
                    </div>
                  </div>
                  <ul class="features">
                      <li>
                        <span class="list-name">One Selected Template</span>
                        <span class="icon check"><i class="fas fa-check"></i></span>
                      </li>
                      <li>
                        <span class="list-name">100% Responsive Design</span>
                        <span class="icon check"><i class="fas fa-check"></i></span>
                      </li>
                      <li>
                        <span class="list-name">Credit Remove Permission</span>
                        <span class="icon cross"><i class="fas fa-times"></i></span>
                      </li>
                      <li>
                        <span class="list-name">Lifetime Template Updates</span>
                        <span class="icon cross"><i class="fas fa-times"></i></span>
                    </li>
                      <li>
                        <span class="list-name"><del>70$ OFF</del></span>
                        <span class="icon check"><i class="fas fa-check"></i></span>
                      </li>
                  </ul>

                  <div class="prices-contain d-flex justify-content-between align-items-center">
                    <div>2500 EGP</div>
                    <div class="d-flex">
                        <span>500$</span>
                        <span><del>600$</del></span>
                    </div>
                    <div>1400 SAR</div>
                </div>

                  <div class="btn"><button>Buy Now</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="table premium">
                <div class="ribbon"><span>Recommend</span></div>
                <div class="price-section">
                  <div class="price-area">
                    <div class="inner-area">
                      <span class="text">$</span>
                      <span class="price">59</span>
                    </div>
                  </div>
                </div>
                <div class="package-name">
                      <div class="package-name-inner">
                        Simple Website
                      </div>
                </div>
                <ul class="features">
                  <li>
                    <span class="list-name">Five Existing Templates</span>
                    <span class="icon check"><i class="fas fa-check"></i></span>
                  </li>
                  <li>
                    <span class="list-name">100% Responsive Design</span>
                    <span class="icon check"><i class="fas fa-check"></i></span>
                  </li>
                  <li>
                    <span class="list-name">Credit Remove Permission</span>
                    <span class="icon check"><i class="fas fa-check"></i></span>
                  </li>
                  <li>
                    <span class="list-name">Lifetime Template Updates</span>
                    <span class="icon cross"><i class="fas fa-times"></i></span>
                  </li>
                  <li>
                    <span class="list-name"><del>70$ OFF</del></span>
                    <span class="icon check"><i class="fas fa-check"></i></span>
                  </li>
                </ul>

                <div class="prices-contain d-flex justify-content-between align-items-center">
                    <div>2500 EGP</div>
                    <div class="d-flex">
                        <span>500$</span>
                        <span><del>600$</del></span>
                    </div>
                    <div>1400 SAR</div>
                </div>
                
                <div class="btn"><button>Buy Now</button></div>
            </div>
        </div>
        <div class="col-md-4">    
          <div class="table ultimate">
            <div class="price-section">
              <div class="price-area">
                <div class="inner-area">
                  <span class="text">$</span>
                  <span class="price">99</span>
                </div>
              </div>
            </div>
            <div class="package-name">
                <div class="package-name-inner">
                    One Page
                  </div>
            </div>
            <ul class="features">
              <li>
                <span class="list-name">All Existing Templates</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">100% Responsive Design</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">Credit Remove Permission</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name">Lifetime Template Updates</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
              <li>
                <span class="list-name"><del>70$ OFF</del></span>
                <span class="icon check"><i class="fas fa-check"></i></span>
              </li>
            </ul>

            <div class="prices-contain d-flex justify-content-between align-items-center">
                    <div>2500 EGP</div>
                    <div class="d-flex">
                        <span>500$</span>
                        <span><del>600$</del></span>
                    </div>
                    <div>1400 SAR</div>
            </div>

            <div class="btn"><button>Buy Now</button></div>
          </div>
        </div>
    </div>
  </div>
</div>

<div id="price" class="py-5">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-6">
              <!--price tab-->
              <div class="plan">
                <div class="plan-inner">
                  <div class="entry-title">
                    <h3>Basic Wash</h3>
                    <div class="price">$25<span>/<del>50$</del></span>
                    </div>
                  </div>
                  <div class="entry-content">
                    <ul>
                      <li><strong>1x</strong> option 1</li>
                      <li><strong>2x</strong> option 2</li>
                      <li><strong>3x</strong> option 3</li>
                      <li><strong>Free</strong> option 4</li>
                      <li><strong>Unlimited</strong> option 5</li>
                    </ul>
                  </div>
                  <div class="btn">
                    <a href="#">Order Now</a>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <!--price tab-->
            <div class="plan basic">
              <div class="plan-inner">
                <div class="hot">hot</div>
                <div class="entry-title">
                  <h3>Express Wash</h3>
                  <div class="price">$50<span>/<del>50$</del></span>
                  </div>
                </div>
                <div class="entry-content">
                  <ul>
                    <li><strong>1x</strong> option 1</li>
                    <li><strong>2x</strong> option 2</li>
                    <li><strong>3x</strong> option 3</li>
                    <li><strong>Free</strong> option 4</li>
                    <li><strong>Unlimited</strong> option 5</li>
                  </ul>
                </div>
                <div class="btn">
                  <a href="#">Order Now</a>
                </div>
              </div>
            </div>
            <!-- end of price tab-->
          </div>
          <div class="col-lg-3 col-md-6">
            <!--price tab-->
            <div class="plan standard">
              <div class="plan-inner">
                <div class="entry-title">
                  <h3>Super Wash</h3>
                  <div class="price">$75<span>/<del>50$</del></span>
                  </div>
                </div>
                <div class="entry-content">
                  <ul>
                    <li><strong>2x</strong> Free Entrance</li>
                    <li><strong>Free</strong> Snacks</li>
                    <li><strong>Custom</strong> Swags</li>
                    <li><strong>2x</strong> Certificate</li>
                    <li><strong>Free</strong> Wifi</li>
                  </ul>
                </div>
                <div class="btn">
                  <a href="#">Order Now</a>
                </div>
              </div>
            </div>
            <!-- end of price tab-->
          </div>
          <div class="col-lg-3 col-md-6">
            <!--price tab-->
            <div class="plan ultimite">
              <div class="plan-inner">
                <div class="entry-title">
                  <h3>Unlimited Wash</h3>
                  <div class="price">$100<span>/<del>50$</del></span>
                  </div>
                </div>
                <div class="entry-content">
                  <ul>
                    <li><strong>1x</strong> option 1</li>
                    <li><strong>2x</strong> option 2</li>
                    <li><strong>3x</strong> option 3</li>
                    <li><strong>Free</strong> option 4</li>
                    <li><strong>Unlimited</strong> option 5</li>
                  </ul>
                </div>
                <div class="btn">
                  <a href="#">Order Now</a>
                </div>
              </div>
            </div>
            <!-- end of price tab-->
          </div>
      </div> 
  </div>
</div>


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

@endsection