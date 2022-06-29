@extends('admin.layout')

@section('content')

<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #ffffff;
    background-color: #115291;
    border-color: transparent;
}
</style>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Static') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Static') }}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title mt-1">{{ __('Static Info') }}</h3>
                                {{--<div class="card-tools">
                                    <div class="d-inline-block mr-4">
                                        <select class="form-control form-control-sm lang" id="languageSelect" data="{{url()->current() . '?language='}}">
                                            @foreach($langs as $lang)
                                                <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}} >{{$lang->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>--}}
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('admin.hero.update', $english_static->language_id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('BG Image') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <img class="mw-400 mb-3 img-demo show-img" src="{{ asset('assets/front/img/'.$english_static->hero_bg_image) }}" alt="" width="150px" height="150px">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="hero_bg_image">{{ __('Choose New Image') }}</label>
                                                        <input type="file" class="custom-file-input up-img" name="hero_bg_image" id="hero_bg_image" width="150px" height="150px">
                                                    </div>
                                                    <p class="help-block text-info">{{ __('Upload 1920X900 (Pixel) Size image for best quality.
                                                        Only jpg, jpeg, png image is allowed.') }}
                                                    </p>
                                                    @if ($errors->has('hero_bg_image'))
                                                        <p class="text-danger"> {{ $errors->first('hero_bg_image') }} </p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <img class="mw-400 mb-3 img-demo show-img" src="{{ asset('assets/front/img/'.$english_static->hero_image) }}" alt="" width="150px" height="150px">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="hero_image">{{ __('Choose New Image') }}</label>
                                                        <input type="file" class="custom-file-input up-img" name="hero_image" id="hero_image" width="150px" height="150px">
                                                    </div>
                                                    @if ($errors->has('hero_image'))
                                                        <p class="text-danger"> {{ $errors->first('hero_image') }} </p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Feature Icon1') }}</label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_icon1" placeholder="{{ __('Feature Icon1') }}" value="{{ $english_static->hero_f_icon1 }}">
                                                    @if ($errors->has('hero_f_icon1'))
                                                        <p class="text-danger"> {{ $errors->first('hero_f_icon1') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Feature text1') }}</label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_text1" placeholder="{{ __('Feature text1') }}" value="{{ $english_static->hero_f_text1 }}">
                                                    @if ($errors->has('hero_f_text1'))
                                                        <p class="text-danger"> {{ $errors->first('hero_f_text1') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Feature Icon2') }}</label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_icon2" placeholder="{{ __('Feature Icon2') }}" value="{{ $english_static->hero_f_icon2 }}">
                                                    @if ($errors->has('hero_f_icon2'))
                                                        <p class="text-danger"> {{ $errors->first('hero_f_icon2') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Feature text2') }}</label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero_f_text2" placeholder="{{ __('Feature text2') }}" value="{{ $english_static->hero_f_text2 }}">
                                                    @if ($errors->has('hero_f_text2'))
                                                        <p class="text-danger"> {{ $errors->first('hero_f_text2') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <ul class="nav nav-tabs mb-3 justify-content-end" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">عربى</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">English</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content p-3" id="myTabContent">
                                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ar_hero_title" placeholder="{{ __('Title') }}" value="{{ $arabic_static->hero_title }}">
                                                            @if ($errors->has('hero_title'))
                                                                <p class="text-danger"> {{ $errors->first('hero_title') }} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label">{{ __('Subtitle') }}<span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ar_hero_sub_title" placeholder="{{ __('Subtitle') }}" value="{{ $arabic_static->hero_sub_title }}">
                                                            @if ($errors->has('hero_sub_title'))
                                                                <p class="text-danger"> {{ $errors->first('hero_sub_title') }} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label">{{ __('Text') }}<span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="ar_hero_text" placeholder="{{ __('Text') }}" value="{{ $arabic_static->hero_text }}">
                                                            @if ($errors->has('hero_text'))
                                                                <p class="text-danger"> {{ $errors->first('hero_text') }} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="hero_title" placeholder="{{ __('Title') }}" value="{{ $english_static->hero_title }}">
                                                            @if ($errors->has('hero_title'))
                                                                <p class="text-danger"> {{ $errors->first('hero_title') }} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label">{{ __('Subtitle') }}<span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="hero_sub_title" placeholder="{{ __('Subtitle') }}" value="{{ $english_static->hero_sub_title }}">
                                                            @if ($errors->has('hero_sub_title'))
                                                                <p class="text-danger"> {{ $errors->first('hero_sub_title') }} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-sm-2 control-label">{{ __('Text') }}<span class="text-danger">*</span></label>
                        
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="hero_text" placeholder="{{ __('Text') }}" value="{{ $english_static->hero_text }}">
                                                            @if ($errors->has('hero_text'))
                                                                <p class="text-danger"> {{ $errors->first('hero_text') }} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <div class="offset-sm-1 col-sm-10">
                                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                        </div>
                                    </div>
                                
                                </form>
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection
