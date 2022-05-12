@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Feature') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Feature') }}</li>
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
                                                    <select class="form-control form-control-sm lang" id="languageSelect" data="{{url()->current() . '?language='}}">
                                                        @foreach($langs as $lang)
                                                            <option
                                                                    {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                                    value="{{$lang->code}}"
                                                            >{{$lang->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <a href="{{ route('admin.feature.add'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
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
                                            <form action="{{ route('admin.feature.index') }}" method="get">
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
                                        <th>{{ __('Icon') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($features as $id=>$feature)
                                        <tr>
                                            <td>
                                                {{ $id }}
                                            </td>
                                            <td>
                                                <i class="{{ $feature->icon }}"></i>
                                            </td>
                                            <td>
                                                {{ $feature->title }}
                                            </td>
                                            <td>
                                                {{ $feature->serial_number }}
                                            </td>
                                            <td>
                                                @if($feature->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.feature.edit', $feature->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.feature.delete', $feature->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
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
