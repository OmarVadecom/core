@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Client Section') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Client Section') }}</li>
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
                            <div class="card-header  with-border">
                                <h3 class="card-title mt-1">{{ __('Edit Client') }}</h3>
                                <div class="card-tools">
                                <a href="{{ route('admin.client.index'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-client-tab" data-toggle="tab" href="#nav-en-client" role="tab" aria-controls="nav-en-client" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-client-tab" data-toggle="tab" href="#nav-ar-client" role="tab" aria-controls="nav-ar-client" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="{{ route('admin.client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="form-group row my-3">
                                                <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <img class="w-100 mb-3 img-demo show-img" src="{{ asset('assets/front/img/client/'.$client->image) }}" alt="" width="150px" height="150px">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="image">{{ __('Choose New Image') }}</label>
                                                        <input type="file" class="custom-file-input up-img" name="image" id="image">
                                                    </div>
                                                    <p class="help-block text-info">{{ __('Upload 70X70 (Pixel) Size image for best quality.
                                                        Only jpg, jpeg, png image is allowed.') }}
                                                    </p>
                                                    @if ($errors->has('image'))
                                                        <p class="text-danger"> {{ $errors->first('image') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12 tab-pane fade show active" id="nav-en-client" role="tabpanel" aria-labelledby="nav-en-client-tab" >
                                                {{--english--}}
                                                <div class="form-group row">
                                                    <label for="name" class="col-sm-2 control-label">{{ __('Name') }}<span class="text-danger">*</span></label>
                    
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}" value="{{ $client_en->name }}">
                                                        @if ($errors->has('name'))
                                                        <p class="text-danger"> {{ $errors->first('name') }} </p>
                                                    @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="value" class="col-sm-2 control-label">{{ __('Link') }}<span class="text-danger">*</span></label>
                    
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="link" placeholder="{{ __('Link') }}" value="{{ $client_en->link }}">
                                                        @if ($errors->has('link'))
                                                        <p class="text-danger"> {{ $errors->first('link') }} </p>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 tab-pane fade" id="nav-ar-client" role="tabpanel" aria-labelledby="nav-ar-client-tab">
                                                {{--arabic--}}
                                                <div class="form-group row">
                                                    <label for="name" class="col-sm-2 control-label">{{ __('الاسم') }}<span class="text-danger">*</span></label>
                    
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="ar_name" placeholder="{{ __('Name') }}" value="{{ $client_ar->name }}">
                                                        @if ($errors->has('ar_name'))
                                                        <p class="text-danger"> {{ $errors->first('ar_name') }} </p>
                                                    @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="value" class="col-sm-2 control-label">{{ __('الرابط') }}<span class="text-danger">*</span></label>
                    
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="ar_link" placeholder="{{ __('Link') }}" value="{{ $client_ar->link }}">
                                                        @if ($errors->has('ar_link'))
                                                        <p class="text-danger"> {{ $errors->first('ar_link') }} </p>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="value" class="col-sm-2 control-label">{{ __('Order') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="serial_number" placeholder="{{ __('Order') }}" value="{{ $client->serial_number }}">
                                                    @if ($errors->has('serial_number'))
                                                    <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
        
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status">
                                                    <option value="0" {{ $client->status == '0' ? 'selected' : '' }}>{{ __('Unpublish') }}</option>
                                                    <option value="1" {{ $client->status == '1' ? 'selected' : '' }}>{{ __('Publish') }}</option>
                                                    </select>
                                                    @if ($errors->has('status'))
                                                        <p class="text-danger"> {{ $errors->first('status') }} </p>
                                                    @endif
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
