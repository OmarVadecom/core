@extends('admin.layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Packages Categories') }} </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li class="breadcrumb-item">{{ __('Packages Categories') }}</li>
            </ol>
        </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title mt-1">{{ __('Add Package Category') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('package-category.index'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('package-category.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Title_ar') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_ar" placeholder="{{ __('Title AR') }}" value="{{ old('name_ar') }}">
                                    @if ($errors->has('name_ar'))
                                        <p class="text-danger"> {{ $errors->first('name_ar') }} </p>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Title_en') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control titleinp" name="name_en" placeholder="{{ __('Title EN') }}" value="{{ old('name_ en') }}">
                                    @if ($errors->has('name_en'))
                                        <p class="text-danger"> {{ $errors->first('name_en') }} </p>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Slug') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control sluginp" name="slug" placeholder="{{ __('Slug') }}" value="{{ old('slug') }}">
                                    @if ($errors->has('slug'))
                                        <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Emart_id') }}</label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="emart_id" placeholder="{{ __('Emart_id') }}" value="{{ old('emart_id') }}">
                                    @if ($errors->has('emart_id'))
                                        <p class="text-danger"> {{ $errors->first('emart_id') }} </p>
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


                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection