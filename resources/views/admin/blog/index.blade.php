@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Blogs') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Blogs') }}</li>
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
                                    <div class="card-tools d-flex justify-content-end">
                                        <div class="d-inline-block mr-4">
                                            <select class="form-control lang" id="languageSelect" data="{{url()->current() . '?language='}}">
                                                @foreach($langs as $lang)
                                                    <option
                                                            {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                            value="{{$lang->code}}"
                                                    >{{$lang->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <form class="d-inline-block mr-3" action="{{route('back.bulk.delete')}}" method="get">
                                            <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                            <input type="hidden" value="blog" name="table">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                                {{__('Bulk Delete')}}
                                            </button>
                                        </form>
                                        <a href="{{ route('admin.blog.add'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> {{ __('Add') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="{{ route('admin.blog') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/> --}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="title"
                                                        >Title</label>
                                                        <input
                                                            value="{{ request()->get('title') }}"
                                                            class="form-control" name="title"
                                                            placeholder="Title"
                                                            type="text"
                                                            id="title"
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
                                                            >Publish
                                                            </option>
                                                            <option
                                                                @if(request()->get('status') === '0') selected @endif
                                                                value="0"
                                                            >Unpublish
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="category"
                                                        >Category</label>
                                                        <select class="form-control" name="category_id" id="category">
                                                            <option value="" selected="selected">Select something</option>
                                                            @foreach($bCategories as $category)
                                                                <option
                                                                    @if(request()->get('category_id') == $category->id) selected @endif
                                                                    value="{{ $category->id }}"
                                                                >
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
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
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="blog-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th>{{ __('Image') }}</th>
                                        <th style="width: 49% !important;">{{ __('Title') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $id => $blog)
                                        <tr id="blog-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="{{ $blog->id}}" />
                                            </td>
                                            <td>
                                                <img class="w-80" src="{{ asset('assets/front/img/blog/'.$blog->image) }}" alt="" />
                                            </td>
                                            <td>
                                                {{ $blog->title }}
                                            </td>
                                            <td>
                                                {{ $blog->bcategory->name }}
                                            </td>
                                            <td>
                                                @if($blog->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.blog.edit', $blog->id) }}"
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <i class="fas fa-pencil-alt"></i>
                                                    {{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.blog.delete', $blog->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $blog->id }}">
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

