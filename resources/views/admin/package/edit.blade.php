@extends('admin.layout')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Packages') }} </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Packages') }}</li>
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
                                <h3 class="card-title mt-1">{{ __('Edit Package') }}</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.package'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('admin.package.update',  $package->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Package Category') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="category_id" required>
                                                <option value="">Choose Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{ $package->category_id == $category->id ? 'selected' : '' }} >{{$category->name_en}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category_id'))
                                                <p class="text-danger"> {{ $errors->first('category_id') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Title AR') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title_ar" placeholder="{{ __('Title AR') }}" value="{{ $package->title_ar }}">
                                            @if ($errors->has('title_ar'))
                                                <p class="text-danger"> {{ $errors->first('title_ar') }} </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Title EN') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control titleinp" name="title_en" placeholder="{{ __('Title EN') }}" value="{{ $package->title_en }}">
                                            @if ($errors->has('title_en'))
                                                <p class="text-danger"> {{ $errors->first('title_en') }} </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Slug') }}</label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control sluginp" name="slug" placeholder="{{ __('Slug') }}" value="{{ $package->slug }}" required>
                                            @if ($errors->has('slug'))
                                                <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Old Price') }}</label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="old_price" placeholder="{{ __('Old Price') }}" value="{{ $package->old_price  }}">
                                            @if ($errors->has('old_price'))
                                                <p class="text-danger"> {{ $errors->first('old_price') }} </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Price') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="price" placeholder="{{ __('Price') }}" value="{{ $package->price }}">
                                            @if ($errors->has('price'))
                                                <p class="text-danger"> {{ $errors->first('price') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Description AR') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input name="feature_ar" class="form-control" data-role="tagsinput"  value="{{ $package->feature_ar }}" >
                                            @if ($errors->has('feature_ar'))
                                                <p class="text-danger"> {{ $errors->first('feature_ar') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-2 control-label">{{ __('Description EN') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <input name="feature_en" class="form-control" data-role="tagsinput"  value="{{ $package->feature_en }}" >
                                            @if ($errors->has('feature_en'))
                                                <p class="text-danger"> {{ $errors->first('feature_en') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">{{ __('Button Text') }}</label>
        
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="button_text" placeholder="{{ __('Button Text') }}" value="{{ $package->button_text }}">
                                            @if ($errors->has('button_text'))
                                                <p class="text-danger"> {{ $errors->first('button_text') }} </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="value" class="col-sm-2 control-label">{{ __('Order') }}<span class="text-danger">*</span></label>
                        
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="serial_number" placeholder="{{ __('Order') }}" value="{{ $package->serial_number }}">
                                            @if ($errors->has('serial_number'))
                                            <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>
        
                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                               <option value="0" {{ $package->status == '0' ? 'selected' : '' }}>{{ __('Unpublish') }}</option>
                                               <option value="1" {{ $package->status == '1' ? 'selected' : '' }}>{{ __('Publish') }}</option>
                                              </select>
                                            @if ($errors->has('status'))
                                                <p class="text-danger"> {{ $errors->first('status') }} </p>
                                            @endif
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
