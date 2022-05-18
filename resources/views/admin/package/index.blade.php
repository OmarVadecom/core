@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Packages') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Packages') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
{{--                    <div class="card card-primary card-outline">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title mt-1">{{ __('Pakage Content') }}</h3>--}}
{{--                            <div class="card-tools">--}}
{{--                                <div class="d-inline-block mr-4">--}}
{{--                            <select class="form-control lang" id="languageSelect" data="{{url()->current() . '?language='}}">--}}
{{--                                @foreach($langs as $lang)--}}
{{--                                    <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}} >{{$lang->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <form class="form-horizontal" action="{{ route('admin.plancontent.update',  $saectiontitle->language_id) }}" method="POST" enctype="multipart/form-data">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-sm-2 control-label">{{ __('Pakage Title') }}<span class="text-danger">*</span></label>--}}

{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="text" class="form-control" name="package_title" placeholder="{{ __('Pakage Title') }}" value="{{ $saectiontitle->package_title }}">--}}
{{--                                        @if ($errors->has('package_title'))--}}
{{--                                            <p class="text-danger"> {{ $errors->first('package_title') }} </p>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label  class="col-sm-2 control-label">{{ __('Pakage Sub-title') }}<span class="text-danger">*</span></label>--}}

{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="text" class="form-control" name="package_sub_title" placeholder="{{ __('Pakage Sub-Title') }}" value="{{ $saectiontitle->package_sub_title }}">--}}
{{--                                        @if ($errors->has('package_sub_title'))--}}
{{--                                            <p class="text-danger"> {{ $errors->first('package_sub_title') }} </p>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="offset-sm-2 col-sm-10">--}}
{{--                                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </form>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                            <div class="card-tools d-flex justify-content-end">
                                                <div class="d-inline-block mr-4">
                                                    <select
                                                            class="form-control lang"
                                                            id="languageSelect"
                                                            data="{{url()->current() . '?language='}}"
                                                    >
                                                        @foreach($langs as $lang)
                                                            <option
                                                                    {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                                    value="{{$lang->code}}"
                                                            >{{$lang->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <a href="{{ route('dynamic-page-categories.create'). '?language=' . $currentLang->code }}"
                                                   class="btn btn-primary btn-sm">
                                                    <i class="fas fa-plus"></i> {{ __('Add') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="{{ route('admin.package') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/>--}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="title"
                                                        >Title</label>
                                                        <input
                                                            value="{{ request()->get('title') }}"
                                                            class="form-control"
                                                            placeholder="Title"
                                                            name="title"
                                                            type="text"
                                                            id="title"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="price"
                                                        >Price</label>
                                                        <input
                                                            value="{{ request()->get('price') }}"
                                                            class="form-control"
                                                            placeholder="Price"
                                                            name="price"
                                                            type="text"
                                                            id="price"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="status"
                                                        >Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Status</option>
                                                            <option
                                                                    @if(request()->get('status') === '1') selected @endif
                                                            value="1"
                                                            >Publish</option>
                                                            <option
                                                                    @if(request()->get('status') === '0') selected @endif
                                                            value="0"
                                                            >Unpublish</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3" style="line-height: 97px">
                                                        <button type="submit" class="btn btn-primary text-center">
                                                            <i class="fa fa-search"></i> Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>{{ __('#') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Price') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packages as $id=>$package)
                                        <tr>
                                            <td>
                                                {{ $id }}
                                            </td>
                                            <td>
                                                {{ $package->title }}
                                            </td>
                                            <td>
                                                {{ __('$') }}{{ $package->price }}
                                            </td>
                                            <td>
                                                {{ $package->serial_number }}
                                            </td>
                                            <td>
                                                @if($package->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.package.edit', $package->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.package.delete', $package->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $package->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i>{{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
