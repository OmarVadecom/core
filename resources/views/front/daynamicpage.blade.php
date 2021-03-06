@extends('front.layout')

@section('meta-keywords', "$front_daynamic_page->meta_keywords")
@section('meta-description', "$front_daynamic_page->meta_description")
@section('style')
    <style>
        .section-content {
            color: #81a3bb;
            border: 2px solid #e3eeff;
            padding: 40px 30px;
            position: relative;
            overflow: hidden;
        }

        .section-content .icon {
            font-size: 60px;
            line-height: 1;
            color: #0171BC;
            margin-bottom: 30px;
        }

        .section-content .title {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .section-content a {
            transition: all 0.3s ease-out 0s;
            color: #0c59db;
            text-decoration: none;
        }

        .section-content .link {
            font-weight: 700;
            color: #81a3bb;
            margin-top: 15px;
        }

        .about-thumb-right:before {
            left: 115px !important;
            right: -200px !important
        }
    </style>
@endsection
@section('content')
    @if(isset($front_daynamic_page)&&Auth::guard('admin')->check())  
            <div  style="position:fixed;top:0px;height: 25px;z-index:5555555; width:100%; border-bottom-left-radius: 10px; background-color:#cce5ff; border-bottom-right-radius: 10px;">
                <a  target="_blank" style="text-decoration: underline; text-align: center; margin: auto; display: block; color: #ffffff; font-weight: 700; font-size: 14px;" href="{{route('admin.dynamic_page.edit', $front_daynamic_page->id)}}"><i class="far fa-edit"></i> Edit this Page</a>
            </div>
    @endif
    <div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <h2 class="title">{{ $front_daynamic_page->title }}</h2>
                        <ul class="breadcrumb-nav">
                            <li class="">
								<a href="{{ route('front.index') }}">
									{{ __('Home') }}
								</a>
							</li>
                            <li class="active" aria-current="page">{{ $front_daynamic_page->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="dynamicpage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        @if($front_daynamic_page->modules != null)
                            @foreach($front_daynamic_page->modules as $modules)
                                @foreach($modules as $key => $module)
                                    @include('admin.modules.themes_for_modules.' . $key)
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
