@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('About Section') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('About Section') }}</li>
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
                                <h3 class="card-title mt-1">{{ __('About Section Info') }}</h3>
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
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-about-tab" data-toggle="tab" href="#nav-en-about" role="tab" aria-controls="nav-en-about" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-about-tab" data-toggle="tab" href="#nav-ar-about" role="tab" aria-controls="nav-ar-about" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="{{ route('admin.about_section_update', $english_static->language_id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                   
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="form-group row my-3 ">
                                            <label class="col-sm-2 control-label">{{ __('About Image') }}<span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mw-400 mb-3 img-demo show-img" src="{{ asset('assets/front/img/'.$english_static->about_image) }}" alt="">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="about_image">{{ __('Choose New Image') }}</label>
                                                    <input type="file" class="custom-file-input up-img" name="about_image" id="about_image">
                                                </div>
                                                <p class="help-block text-info">{{ __('Upload 530X730 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.') }}
                                                </p>
                                                @if ($errors->has('about_image'))
                                                    <p class="text-danger"> {{ $errors->first('about_image') }} </p>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-about" role="tabpanel" aria-labelledby="nav-en-about-tab" >
                                            {{--english--}}
                                            
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="about_title" placeholder="{{ __('Title') }}" value="{{ $english_static->about_title }}">
                                                    @if ($errors->has('about_title'))
                                                        <p class="text-danger"> {{ $errors->first('about_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Subtitle') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="about_sub_title" placeholder="{{ __('Subtitle') }}" value="{{ $english_static->about_sub_title }}">
                                                    @if ($errors->has('about_sub_title'))
                                                        <p class="text-danger"> {{ $errors->first('about_sub_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Text') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="about_text" class="form-control summernote" rows="5" placeholder="{{ __('Text') }}">{{ $english_static->about_text }}</textarea>
                                                    @if ($errors->has('about_text'))
                                                        <p class="text-danger"> {{ $errors->first('about_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Experince Years') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="about_experince_yers" placeholder="{{ __('Experince Years') }}" value="{{ $english_static->about_experince_yers }}">
                                                    @if ($errors->has('about_experince_yers'))
                                                        <p class="text-danger"> {{ $errors->first('about_experince_yers') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('About Video Link') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="about_intro_video" placeholder="{{ __('About Video Link') }}" value="{{ $english_static->about_intro_video }}">
                                                    @if ($errors->has('about_intro_video'))
                                                        <p class="text-danger"> {{ $errors->first('about_intro_video') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12 tab-pane fade" id="nav-ar-about" role="tabpanel" aria-labelledby="nav-ar-about-tab">
                                            {{--arabic--}}
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_about_title" placeholder="{{ __('Title') }}" value="{{ $arabic_static->about_title }}">
                                                    @if ($errors->has('ar_about_title'))
                                                        <p class="text-danger"> {{ $errors->first('ar_about_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('العنوان الفرعي') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_about_sub_title" placeholder="{{ __('Subtitle') }}" value="{{ $arabic_static->about_sub_title }}">
                                                    @if ($errors->has('ar_about_sub_title'))
                                                        <p class="text-danger"> {{ $errors->first('ar_about_sub_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('نص') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="ar_about_text" class="form-control summernote" rows="5" placeholder="{{ __('Text') }}">{{ $arabic_static->about_text }}</textarea>
                                                    @if ($errors->has('ar_about_text'))
                                                        <p class="text-danger"> {{ $errors->first('ar_about_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('سنوات الخبرة') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="ar_about_experince_yers" placeholder="{{ __('Experince Years') }}" value="{{ $arabic_static->about_experince_yers }}">
                                                    @if ($errors->has('ar_about_experince_yers'))
                                                        <p class="text-danger"> {{ $errors->first('ar_about_experince_yers') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('رابط الفيديو') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_about_intro_video" placeholder="{{ __('About Video Link') }}" value="{{ $arabic_static->about_intro_video }}">
                                                    @if ($errors->has('ar_about_intro_video'))
                                                        <p class="text-danger"> {{ $errors->first('ar_about_intro_video') }} </p>
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
