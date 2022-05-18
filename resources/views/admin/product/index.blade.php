@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Products') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Products') }}</li>
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
                                        <div class="col-md-7"></div>
                                        <div class="col-md-5">
                                            <div class="card-tools d-flex justify-content-end">
                                                <div class="d-inline-block mr-3">
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
                                                    <input type="hidden" value="product" name="table">
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="far fa-trash-alt"></i> {{__('Bulk Delete')}}
                                                    </button>
                                                </form>
                                                <a href="{{ route('admin.product.add') }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-plus"></i> {{ __('Add Product') }}
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
                                            <form action="{{ route('admin.product') }}" method="get">
{{--                                                <input type="hidden" name="language" value="{{ $currentLang->code }}"/>--}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="price">Price</label>
                                                        <input
                                                            value="{{ request()->get('price') }}"
                                                            class="form-control"
                                                            placeholder="Price"
                                                            type="text"
                                                            name="price"
                                                            id="price"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="title">Title</label>
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
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="status">Status</label>
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
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="category"
                                                        >Category</label>
                                                        <select class="form-control" name="category_id" id="category">
                                                            <option value="" selected="selected">Select something</option>
                                                            @foreach($productCategories as $category)
                                                                <option
                                                                    value="{{ $category->id }}"
                                                                    @if(request()->get('category_id') == $category->id) selected @endif
                                                                >
                                                                    {{ $category->name }}
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
                        <div class="card-body table-responsive">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="product-bulk-delete" class="bulk_all_delete">
                                        </th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Price') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $id=>$product)
                                        <tr id="product-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="{{ $product->id}} ">
                                            </td>
                                            <td>
                                                <img class="w-80" src="{{ asset('assets/front/img/'.$product->image) }}" alt="" />
                                            </td>
                                            <td>
                                                {{$product->title}}
                                            </td>
                                            <td>
                                                {{ Helper::showAdminCurrencyPrice($product->current_price) }}
                                            </td>

                                            <td>
                                                {{$product->category->name}}
                                            </td>

                                            <td>
                                                @if($product->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.product.delete', $product->id ) }}"
                                                    id="deleteform" class="d-inline-block"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
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

