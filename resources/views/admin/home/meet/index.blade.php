@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Meet With US Section') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Meet With US Section') }}</li>
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
                                <h3 class="card-title mt-1">{{ __('Meet With US Section Info') }}</h3>
                                {{-- <div class="card-tools">
                                    <div class="d-inline-block mr-4">
                                        <select class="form-control form-control-sm lang" id="languageSelect" data="{{url()->current() . '?language='}}">
                                            @foreach($langs as $lang)
                                                <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}} >{{$lang->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-meet-tab" data-toggle="tab" href="#nav-en-meet" role="tab" aria-controls="nav-en-meet" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-meet-tab" data-toggle="tab" href="#nav-ar-meet" role="tab" aria-controls="nav-ar-meet" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="{{ route('admin.meet_section_update', $english_static->language_id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content" id="nav-tabContent">
                                    <div class="form-group row my-3">
                                        <label class="col-sm-2 control-label">{{ __('BG Image') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <img class="mw-400 mb-3 img-demo show-img" src="{{ asset('assets/front/img/'.$english_static->meeet_us_bg_image) }}" alt="" width="150px" height="150px">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="meeet_us_bg_image">{{ __('Choose New Image') }}</label>
                                                <input type="file" class="custom-file-input up-img" name="meeet_us_bg_image" id="meeet_us_bg_image">
                                            </div>
                                            <p class="help-block text-info">{{ __('Upload 1170X300 (Pixel) Size image for best quality.
                                                Only jpg, jpeg, png image is allowed.') }}
                                            </p>
                                            @if ($errors->has('meeet_us_bg_image'))
                                                <p class="text-danger"> {{ $errors->first('meeet_us_bg_image') }} </p>
                                            @endif
                                        </div>

                                    </div>

                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-meet" role="tabpanel" aria-labelledby="nav-en-meet-tab" >
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="meeet_us_text" placeholder="{{ __('Title') }}" value="{{ $english_static->meeet_us_text }}">
                                                    @if ($errors->has('meeet_us_text'))
                                                        <p class="text-danger"> {{ $errors->first('meeet_us_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('Button Text') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="meeet_us_button_text" placeholder="{{ __('Button Text') }}" value="{{ $english_static->meeet_us_button_text }}">
                                                    @if ($errors->has('meeet_us_button_text'))
                                                        <p class="text-danger"> {{ $errors->first('meeet_us_button_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Button Link') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="meeet_us_button_link" placeholder="{{ __('Button Link') }}" value="{{ $english_static->meeet_us_button_link }}">
                                                    @if ($errors->has('meeet_us_button_link'))
                                                        <p class="text-danger"> {{ $errors->first('meeet_us_button_link') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 tab-pane fade" id="nav-ar-meet" role="tabpanel" aria-labelledby="nav-ar-meet-tab">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_meeet_us_text" placeholder="{{ __('Title') }}" value="{{ $arabic_static->meeet_us_text }}">
                                                    @if ($errors->has('ar_meeet_us_text'))
                                                        <p class="text-danger"> {{ $errors->first('ar_meeet_us_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('Button Text') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_meeet_us_button_text" placeholder="{{ __('Button Text') }}" value="{{ $arabic_static->meeet_us_button_text }}">
                                                    @if ($errors->has('ar_meeet_us_button_text'))
                                                        <p class="text-danger"> {{ $errors->first('ar_meeet_us_button_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Button Link') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_meeet_us_button_link" placeholder="{{ __('Button Link') }}" value="{{ $arabic_static->meeet_us_button_link }}">
                                                    @if ($errors->has('ar_meeet_us_button_link'))
                                                        <p class="text-danger"> {{ $errors->first('ar_meeet_us_button_link') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
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
