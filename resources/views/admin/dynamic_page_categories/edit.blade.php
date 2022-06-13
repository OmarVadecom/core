@extends('admin.layout')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Dynamic Page Categories') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Dynamic Page Categories') }}</li>
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
                        <h3 class="card-title mt-1">{{ __('Add Dynamic Page Category') }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('dynamic-page-categories.index'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('dynamic-page-categories.update',  $dynamicPageCategory->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <input type="hidden" name="dynamic_page_category_id" value="{{ $dynamicPageCategory->id }}" />
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Language') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control lang" name="language_id">
                                        @foreach($langs as $lang)
                                            <option value="{{$lang->id}}" {{ $dynamicPageCategory->language_id == $lang->id ? 'selected' : '' }} >{{$lang->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('language_id'))
                                        <p class="text-danger"> {{ $errors->first('language_id') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control titleinp" name="title" placeholder="{{ __('Title') }}" value="{{ $dynamicPageCategory->title }}">
                                    @if ($errors->has('title'))
                                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Slug') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control sluginp" name="slug" placeholder="{{ __('Slug') }}" value="{{ $dynamicPageCategory->slug }}">
                                    @if ($errors->has('slug'))
                                        <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                       <option value="0" {{ $dynamicPageCategory->status == '0' ? 'selected' : '' }}>{{ __('Unpublish') }}</option>
                                       <option value="1" {{ $dynamicPageCategory->status == '1' ? 'selected' : '' }}>{{ __('Publish') }}</option>
                                      </select>
                                    @if ($errors->has('status'))
                                        <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
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
