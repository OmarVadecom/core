@extends('front.layout')
@section('title', "Thanks")
@section('content')
 <!--====== PAGE TITLE PART START ======-->
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<div class="page-title-area" style="padding-top: 100px;background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 
<style>
    .thanks , .card{
    font-family: 'Cairo', sans-serif;

}
    .contact .box {
        border: 1px solid #efefefa8;
        margin-bottom: 20px
    }
    .contact .fa-phone {
        transform: rotate(145deg);
    }
    .contact h3 {
        background-color: #f3f3f3;
        padding: 10px;
        text-transform: uppercase;
        color: #4c4b4b;
    }
    .contact p {padding: 0 10px;color: #777}
    .contact .box .form-contact .form-control {
        margin-bottom: 10px;
        padding: 7px;
        border-radius: 0;
        border-radius: 5px;
    }
    .contact .box .form-contact .btn {
        background-color: #70C8E2;
        color: #fff;
        padding: 4px 36px;
        width: auto;
        text-transform: uppercase;
        box-shadow: 0 1px 5px #00b0ff;
        transition: all 0.3s ease-in-out;
    }
    .contact .box .form-contact .btn:hover {
        background-color: #00b0ff
    }
    @media only screen and (min-width:300px) and (max-width:780px) {
        .contact {padding: 10px 0 !important}
    }
    .thanks p.title {
font-size: 26px;
line-height: 1.7;
color: #075d96;
border-radius: 12px;
background: #ececec;
padding: 20px;
margin-top: 12px;
    }
    .thanks img {
        height: 50px;
        width: 100%;
        background-color: #fff;
margin: 15px 0px 15px 0px;
    }
    .thanks .box {
        background-color: #ececec;
        padding: 10px;
        border: 1px solid #efefef;
        box-shadow: 0 2px 4px #ffffff;
        height: 70%;
            border-radius: 15px;
    }
    .thanks .box h3 {
        color: #075d96;
        font-size: 19px;
        padding: 9px 0;
    }
    .thanks .box p {
        line-height: 1.9;
        color: #000;
    }
    .thanks-package .card img {
        width: 100%;
        height: 200px
    }
    .thanks-package .card .btn {
        background-color: #0F4D90;
        color: #fff;
        width: 100%;
        padding: 10px;
        transition: all 0.3s ease-in-out
    }
    .thanks-package .card .btn:hover {
        background-color: rgb(49, 148, 255)
    }
    .thanks-package .card p {
        color: #4c4c4c;
        line-height: 1.8;
    }
    .thanks-package .card {
        border: 1px solid #efefef;
        box-shadow: 0 10px 20px #e8e8e8;
    }
    i.icon.fa.fa-check {
font-size: 50px;
color: #FFF;
margin: auto;
position: absolute;
display: block;
margin-top: 26%;
@if(\Session::get('lang')=="ar")
margin-right: 25%;
@else
margin-left: 25%;
@endif
}
.succesimg {
width: 100px;
height: 100px;
margin: auto;
background: #038603;
border-radius: 59px;
/* border: 1px solid #009400; */
position: relative;
}
</style>
<!-- Start contact us -->

<div class="thanks p-5 text-center">
    <div class="succesimg"><i class="icon fa fa-check"></i></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="title">  تم إستلام الطلب ..شكرا لثقتكم <i class="fa fa-check"></i><br>00201006305066 ستجد ادناة طرق السداد المتوفرة وللمزيد من الاستفسار يمكنك الاتصال على</p>
                </div>
                <div class="col-lg-4">
                    <img class="acclogo" src="https://vadecom.net/site/img/logo1.png" alt="">

                    <div class="box">
                        <h3>إسم الحساب : عنتر صلاح صديق </h3>
                        <p>رقم الحساب : 509608010017230</p>
                        <p>: رقم الإبيان  sa0380000509608010017230</p>
                    </div>
                </div>
                 <div class="col-lg-4">
                        <img class="acclogo" src="https://vadecom.net/site/img/logo2.jpg" alt="">
                    <div class="box">
                        <h3>إسم الحساب : شركة فاديكوم </h3>
                        <p> رقم الحساب: 18900100000955 </p>
                        <p> BMISEGCX140 :رقم السويفت </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="acclogo" src="https://vadecom.net/site/img/logo4.png" alt="">

                    <div class="box">
                        <h3>إسم الحساب : محمد أحمد قرني زيان </h3>
                        <p>Mohamed ahmed korani zayan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="thanks-package pb-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <h3 class="pt-4"> <i class="fa fa-umbrella"></i> تصميم شعارات </h3>
                        <div class="card-img-top">
                            <img src="https://vadecom.net/site/img/website-mockup.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p>لتجارة الإلكترونية تمثل جزء كبير من حجم التجارة العالمية ولكنه يعتبر فى طور التطوير فى عال</p><br>
                            <a href="" class="btn">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <h3 class="pt-4"><i class="fa fa-paint-brush"></i> تصميم مواقع</h3>
                        <div class="card-img-top">
                            <img src="https://vadecom.net/site/img/website-mockup.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p>لتجارة الإلكترونية تمثل جزء كبير من حجم التجارة العالمية ولكنه يعتبر فى طور التطوير فى عال</p><br>
                            <a href="" class="btn">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <h3 class="pt-4"><i class="fa fa-shopping-cart"></i>  حملات تسويقية</h3>
                        <div class="card-img-top">
                            <img src="https://vadecom.net/site/img/website-mockup.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p>لتجارة الإلكترونية تمثل جزء كبير من حجم التجارة العالمية ولكنه يعتبر فى طور التطوير فى عال</p><br>
                            <a href="" class="btn">التفاصيل</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <h3 class="pt-4"><i class="fa fa-sitemap"></i> إستضافه </h3>
                        <div class="card-img-top">
                            <img src="https://vadecom.net/site/img/website-mockup.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p>لتجارة الإلكترونية تمثل جزء كبير من حجم التجارة العالمية ولكنه يعتبر فى طور التطوير فى عال</p> <br>
                            <a href="" class="btn">التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



<!-- End contact us -->
@endsection