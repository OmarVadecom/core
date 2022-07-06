@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Testimonials') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Testimonials') }}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header  card-primary card-outline">
                                <h3 class="card-title mt-1">{{ __('Edit Testimonial') }}</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.testimonial'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                    </a>
                                  </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="col-md-6 nav-item nav-link active" id="nav-en-testimonial-tab" data-toggle="tab" href="#nav-en-testimonial" role="tab" aria-controls="nav-en-testimonial" aria-selected="true">English</a>
                                        <a class="col-md-6 nav-item nav-link" id="nav-ar-testimonial-tab" data-toggle="tab" href="#nav-ar-testimonial" role="tab" aria-controls="nav-ar-testimonial" aria-selected="false">عربي</a>
                                    </div>
                                </nav>
                                <form class="form-horizontal" action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="form-group row my-3">
                                            <label class="col-sm-2 control-label">{{ __('Image') }}<span class="text-danger">*</span></label>
            
                                            <div class="col-sm-10">
                                                <img class="mb-3 show-img img-demo" src="{{ asset('assets/front/img/'.$testimonial_en->image) }}" alt="" width="150px" height="150px">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="image">{{ __('Choose New Image') }}</label>
                                                    <input type="file" class="custom-file-input up-img" name="image" id="image">
                                                </div>
                                                @if ($errors->has('image'))
                                                    <p class="text-danger"> {{ $errors->first('image') }} </p>
                                                @endif
                                                <p class="help-block text-info">{{ __('Upload 70X70 (Pixel) Size image for best quality.
                                                    Only jpg, jpeg, png image is allowed.') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 tab-pane fade show active" id="nav-en-testimonial" role="tabpanel" aria-labelledby="nav-en-testimonial-tab" >
                                            {{--english--}}
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 control-label">{{ __('Name') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">                                                                           
                                                    <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}" value="{{ isset($testimonial_en->name) ?  $testimonial_en->name : '' }}">
                                                    @if ($errors->has('name'))
                                                        <p class="text-danger"> {{ $errors->first('name') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="position" class="col-sm-2 control-label">{{ __('Position') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="position" placeholder="{{ __('Position') }}" value="{{ $testimonial_en->position }}">
                                                    @if ($errors->has('position'))
                                                        <p class="text-danger"> {{ $errors->first('position') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="freelance" class="col-sm-2 control-label">{{ __('Rating') }}<span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="onestar" name="rating" value="1" {{ $testimonial_en->rating == '1' ? 'checked' : '' }}>
                                                            <label for="onestar">{{ __('1 Star') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="twostar" name="rating"  value="2" {{ $testimonial_en->rating == '2' ? 'checked' : '' }}>
                                                            <label for="twostar">{{ __('2 Star') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="threestar" name="rating"  value="3" {{ $testimonial_en->rating == '3' ? 'checked' : '' }}>
                                                            <label for="threestar">{{ __('3 Star') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="fourstar" name="rating"  value="4" {{ $testimonial_en->rating == '4' ? 'checked' : '' }}>
                                                            <label for="fourstar">{{ __('4 Star') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline">
                                                            <input type="radio" id="fivestar" name="rating"  value="5" {{ $testimonial_en->rating == '5' ? 'checked' : '' }}>
                                                            <label for="fivestar">{{ __('5 Star') }}</label>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="message" class="col-sm-2 control-label">{{ __('Message') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="message" placeholder="{{ __('Message') }}"  rows="5">{{ $testimonial_en->message }}</textarea>
                                                    @if ($errors->has('message'))
                                                        <p class="text-danger"> {{ $errors->first('message') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 control-label">{{ __('Order') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="serial_number" placeholder="{{ __('Order') }}" value="{{ $testimonial_en->serial_number }}">
                                                    @if ($errors->has('serial_number'))
                                                        <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 tab-pane fade" id="nav-ar-testimonial" role="tabpanel" aria-labelledby="nav-ar-testimonial-tab"> 
                                            {{--arabic--}}
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 control-label">{{ __('الاسم') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_name" placeholder="{{ __('Name') }}" value="{{ $testimonial_ar->name }}">
                                                    @if ($errors->has('ar_name'))
                                                        <p class="text-danger"> {{ $errors->first('ar_name') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="position" class="col-sm-2 control-label">{{ __('الوظيفة') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ar_position" placeholder="{{ __('Position') }}" value="{{ $testimonial_ar->position }}">
                                                    @if ($errors->has('ar_position'))
                                                        <p class="text-danger"> {{ $errors->first('ar_position') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="freelance" class="col-sm-2 control-label">{{ __('التقييم') }}<span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_onestar" name="ar_rating" value="1" {{ $testimonial_ar->rating == '1' ? 'checked' : '' }}>
                                                            <label for="ar_onestar">{{ __('1 نجمه') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_twostar" name="ar_rating"  value="2" {{ $testimonial_ar->rating == '2' ? 'checked' : '' }}>
                                                            <label for="ar_twostar">{{ __('2 نجمه') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_threestar" name="ar_rating"  value="3" {{ $testimonial_ar->rating == '3' ? 'checked' : '' }}>
                                                            <label for="ar_threestar">{{ __('3 نجمه') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline mr-3">
                                                            <input type="radio" id="ar_fourstar" name="ar_rating"  value="4" {{ $testimonial_ar->rating == '4' ? 'checked' : '' }}>
                                                            <label for="ar_fourstar">{{ __('4 نجمه') }}</label>
                                                        </div>
                                                        <div class="icheck-success d-inline">
                                                            <input type="radio" id="ar_fivestar" name="ar_rating"  value="5" {{ $testimonial_ar->rating == '5' ? 'checked' : '' }}>
                                                            <label for="ar_fivestar">{{ __('5 نجمه') }}</label>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="message" class="col-sm-2 control-label">{{ __('الرساله') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="ar_message" placeholder="{{ __('Message') }}"  rows="5">{{ $testimonial_ar->message }}</textarea>
                                                    @if ($errors->has('ar_message'))
                                                        <p class="text-danger"> {{ $errors->first('ar_message') }} </p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 control-label">{{ __('Order') }}<span class="text-danger">*</span></label>
                
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" name="ar_serial_number" placeholder="{{ __('Order') }}" value="{{ $testimonial_ar->serial_number }}">
                                                    @if ($errors->has('ar_serial_number'))
                                                        <p class="text-danger"> {{ $errors->first('ar_serial_number') }} </p>
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
