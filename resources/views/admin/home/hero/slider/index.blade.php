@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Slider') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Slider') }}</li>
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
                                                    <select
                                                        data="{{url()->current() . '?language='}}"
                                                        class="form-control form-control-sm lang"
                                                        id="languageSelect"
                                                    >
                                                        @foreach($langs as $lang)
                                                            <option
                                                                    {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                                    value="{{$lang->code}}"
                                                            >{{$lang->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <a
                                                    href="{{ route('admin.slider.add'). '?language=' . $currentLang->code }}"
                                                    class="btn btn-primary btn-sm"
                                                >
                                                    <i class="fas fa-plus"></i> {{ __('Add Slider') }}
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
                                            <form action="{{ route('admin.slider') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/> --}}
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
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $id=>$slider)
                                        <tr>
                                            <td>
                                                {{ $id }}
                                            </td>
                                            <td>
                                                <img class="w-80" src="{{ asset('assets/front/img/slider/'.$slider->image) }}" alt="" width="150px" height="150px" />
                                            </td>
                                            <td>
                                                {{ $slider->title }}
                                            </td>
                                            <td>
                                                {{ $slider->serial_number }}
                                            </td>
                                            <td>
                                                @if($slider->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.slider.delete', $slider->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $slider->id }}">
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
