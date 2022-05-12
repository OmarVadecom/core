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
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Packages Categories') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <div class="col-md-2">
                                            <div class="card-tools d-flex justify-content-end">
{{--                                                <div class="d-inline-block mr-4">--}}
{{--                                                    --}}{{-- <select class="form-control lang" id="languageSelect" data="{{url()->current() . '?language='}}">--}}
{{--                                                        @foreach($langs as $lang)--}}
{{--                                                            <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}} >{{$lang->name}}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select> --}}
{{--                                                </div>--}}
                                                <a href="{{ route('package-category.create'). '?language=' . $currentLang->code }}"
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
                                            <form action="{{ route('package-category.index') }}" method="get">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="name"
                                                        >Name</label>
                                                        <input
                                                            value="{{ request()->get('name') }}"
                                                            class="form-control"
                                                            placeholder="Name"
                                                            name="name"
                                                            type="text"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="slug"
                                                        >Slug</label>
                                                        <input
                                                            value="{{ request()->get('slug') }}"
                                                            class="form-control"
                                                            placeholder="Slug"
                                                            name="slug"
                                                            type="text"
                                                            id="slug"
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
                                                    <div class="col-2" style="line-height: 97px">
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
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('slug') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($PackagesCategories as $id => $packageCategory)
                                        <tr>
                                            <td> {{ $id }} </td>
                                            <td>
                                                {{ $packageCategory->name_en }}
                                            </td>
                                            <td>
                                                {{ $packageCategory->slug }}
                                            </td>
                                            <td>
                                                @if($packageCategory->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Un Publish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('package-category.edit', $packageCategory->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('package-category.destroy', $packageCategory->id ) }}"
                                                    id="deleteform" class="d-inline-block"
                                                    method="post"
                                                >
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{ $packageCategory->id }}">
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
