@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Feature') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Feature') }}</li>
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
                                <h3 class="card-title mt-1">{{ __('Add Feature') }}</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.feature.index'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-feature-tab" data-toggle="tab" href="#nav-en-feature" role="tab" aria-controls="nav-en-feature" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-feature-tab" data-toggle="tab" href="#nav-ar-feature" role="tab" aria-controls="nav-ar-feature" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="{{ route('admin.feature.store') }}" method="POST">
                                    @csrf
                                    
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-feature" role="tabpanel" aria-labelledby="nav-en-feature-tab" >
                                            {{--english--}}
                                            <div class="form-group row my-3">
                                                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="title" placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                                                    @if ($errors->has('title'))
                                                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                                                    @endif
                                                </div>
                                            </div>   
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('Text') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="text" placeholder="{{ __('Text') }}" value="{{ old('text') }}">
                                                    @if ($errors->has('text'))
                                                        <p class="text-danger"> {{ $errors->first('text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 tab-pane fade" id="nav-ar-feature" role="tabpanel" aria-labelledby="nav-ar-feature-tab">
                                            {{--arabic--}}
                                            <div class="form-group row my-3 ">
                                                <label class="col-sm-2 control-label">{{ __('العنوان') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_title" placeholder="{{ __('Title') }}" value="{{ old('ar_title') }}">
                                                    @if ($errors->has('ar_title'))
                                                        <p class="text-danger"> {{ $errors->first('ar_title') }} </p>
                                                    @endif
                                                </div>
                                            </div>   
                                            <div class="form-group row">
                                                <label  class="col-sm-2 control-label">{{ __('النص') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_text" placeholder="{{ __('Text') }}" value="{{ old('ar_text') }}">
                                                    @if ($errors->has('ar_text'))
                                                        <p class="text-danger"> {{ $errors->first('ar_text') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Icon') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="icon" placeholder="{{ __('Icon') }}" value="{{ old('icon') }}">
                                            @if ($errors->has('icon'))
                                                <p class="text-danger"> {{ $errors->first('icon') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Order') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="serial_number" placeholder="{{ __('Order') }}" value="{{ old('serial_number') }}">
                                            @if ($errors->has('serial_number'))
                                                <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                               <option value="0">{{ __('Unpublish') }}</option>
                                               <option value="1">{{ __('Publish') }}</option>
                                              </select>
                                            @if ($errors->has('status'))
                                                <p class="text-danger"> {{ $errors->first('status') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
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
