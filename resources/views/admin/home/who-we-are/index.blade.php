@extends('admin.layout')

@section('content')

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
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-w-w-a-tab" data-toggle="tab" href="#nav-en-w-w-a" role="tab" aria-controls="nav-en-w-w-a" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-w-w-a-tab" data-toggle="tab" href="#nav-ar-w-w-a" role="tab" aria-controls="nav-ar-w-w-a" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="{{ route('admin.w_w_a_update', $english_static->language_id) }}" method="POST" >
                                    @csrf
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-w-w-a" role="tabpanel" aria-labelledby="nav-en-w-w-a-tab" >  
                                            {{--english--}}                             
                                            <div class="form-group row my-3">
                                                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="w_we_are_title" placeholder="{{ __('Title') }}" value="{{ $english_static->w_we_are_title }}">
                                                    @if ($errors->has('w_we_are_title'))
                                                        <p class="text-danger"> {{ $errors->first('w_we_are_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Subtitle') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="w_we_are_sub_title" placeholder="{{ __('Subtitle') }}" value="{{ $english_static->w_we_are_sub_title }}">
                                                    @if ($errors->has('w_we_are_sub_title'))
                                                        <p class="text-danger"> {{ $errors->first('w_we_are_sub_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Text') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="w_we_are_text" class="form-control" rows="5" placeholder="{{ __('Text') }}">{{ $english_static->w_we_are_text }}</textarea>
                                                    @if ($errors->has('w_we_are_text'))
                                                        <p class="text-danger"> {{ $errors->first('w_we_are_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 tab-pane fade show " id="nav-ar-w-w-a" role="tabpanel" aria-labelledby="nav-ar-w-w-a-tab" >
                                            {{--arabic--}}
                                            <div class="form-group row my-3">
                                                <label class="col-sm-2 control-label">{{ __('عنوان') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_w_we_are_title" placeholder="{{ __('Title') }}" value="{{ $arabic_static->w_we_are_title }}">
                                                    @if ($errors->has('ar_w_we_are_title'))
                                                        <p class="text-danger"> {{ $errors->first('ar_w_we_are_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('ترجمة') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_w_we_are_sub_title" placeholder="{{ __('Subtitle') }}" value="{{ $arabic_static->w_we_are_sub_title }}">
                                                    @if ($errors->has('ar_w_we_are_sub_title'))
                                                        <p class="text-danger"> {{ $errors->first('ar_w_we_are_sub_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('نص') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea name="ar_w_we_are_text" class="form-control" rows="5" placeholder="{{ __('Text') }}">{{ $arabic_static->w_we_are_text }}</textarea>
                                                    @if ($errors->has('ar_w_we_are_text'))
                                                        <p class="text-danger"> {{ $errors->first('ar_w_we_are_text') }} </p>
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
