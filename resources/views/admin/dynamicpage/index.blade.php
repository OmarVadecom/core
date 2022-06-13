@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Dynamic Page') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Dynamic Page') }}</li>
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
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
                                            <div class="card-tools d-flex justify-content-end">
                                                <div class="d-inline-block mr-4">
                                                    <select class="form-control lang" id="languageSelect"
                                                            data="{{url()->current() . '?language='}}">
                                                        @foreach($langs as $lang)
                                                            <option
                                                                {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                                value="{{$lang->code}}"
                                                            >{{$lang->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <a href="{{ route('admin.dynamic_page.add'). '?language=' . $currentLang->code }}"
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
                                            <form action="{{ route('admin.dynamic_page') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/> --}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif"
                                                               for="slug">Slug</label>
                                                        <input type="text" class="form-control" name="slug"
                                                               placeholder="Slug"
                                                               value="{{ request()->get('slug') }}" id="slug">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif"
                                                               for="title">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                               placeholder="Title"
                                                               value="{{ request()->get('title') }}" id="title">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif"
                                                               for="status">Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Status</option>
                                                            <option
                                                                    value="1"
                                                                    @if(request()->get('status') === '1') selected @endif
                                                            >Publish
                                                            </option>
                                                            <option
                                                                    value="0"
                                                                    @if(request()->get('status') === '0') selected @endif
                                                            >Unpublish
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif"
                                                               for="category">Category</label>
                                                        <select class="form-control" name="category_id" id="category">
                                                            <option value="" selected="selected">Select something
                                                            </option>

                                                            @foreach($dynamicPagesCategories as $category)
                                                                <option
                                                                        value="{{ $category->id }}"
                                                                        @if(request()->get('category_id') == $category->id) selected @endif
                                                                >
                                                                    {{ $category->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12" style="margin-top: 10px">
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
                                        <th style="width: 435px !important;">{{ __('Page title') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dynamicpages as $id=>$dynamicpage)
                                        <tr>
                                            <td>
                                                {{ $id }}
                                            </td>
                                            <td>
                                                {{ $dynamicpage->title }}
                                            </td>
                                            <td>
                                                {{ $dynamicpage->serial_number }}
                                            </td>
                                            <td>
                                                @if($dynamicpage->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ route('admin.dynamic_page.edit', $dynamicpage->id) }}"
                                                   class="btn btn-info btn-sm"><i
                                                            class="fas fa-pencil-alt"></i>{{ __('Edit') }}</a>

                                                @if($dynamicpage->status == 1)
                                                    <a href="{{ asset($dynamicpage->url) }}" target="_blank"
                                                       class="btn btn-primary btn-sm"><i class="fas fa-eye"></i>{{ __('View') }}
                                                    </a>
                                                @else
                                                    <span class="btn btn-primary btn-sm">
                                                        <i class="fas fa-eye"></i>
                                                        {{ __('View') }}
                                                    </span>
                                                @endif
                                                <form id="deleteform" class="d-inline-block"
                                                      action="{{ route('admin.dynamic_page.delete', $dynamicpage->id ) }}"
                                                      method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $dynamicpage->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i>{{ __('Delete') }}
                                                    </button>
                                                </form>
                                                <a
                                                    href="{{ route('admin.dynamic_page.copy', $dynamicpage->id) }}"
                                                    class="btn btn-success btn-sm text-white"
                                                    target="_blank"
                                                >
                                                    <i class="fa fa-copy"></i>
                                                    {{ __('Copy') }}
                                                </a>
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
