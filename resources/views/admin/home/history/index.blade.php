@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('About History') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('About History') }}</li>
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
                            <h3 class="card-title mt-1">{{ __('History Info') }}</h3>
                            <div class="card-tools">
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
                            </div>
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ route('admin.historycontent.update', $static->language_id) }}"
                                class="form-horizontal"
                                method="POST"
                            >
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">{{ __('Title') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input
                                            value="{{ $static->our_history_title }}"
                                            placeholder="{{ __('Title') }}"
                                            name="our_history_title"
                                            class="form-control"
                                            type="text"
                                        />
                                        @if ($errors->has('our_history_title'))
                                            <p class="text-danger"> {{ $errors->first('our_history_title') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">{{ __('Text') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea
                                            placeholder="{{ __('Text') }}"
                                            name="our_history_text"
                                            class="form-control"
                                            rows="3"
                                        >{{ $static->our_history_text }}</textarea>
                                        @if ($errors->has('our_history_text'))
                                            <p class="text-danger"> {{ $errors->first('our_history_text') }} </p>
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
                    </div>
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
{{--                                                <div class="d-inline-block mr-4">--}}
{{--                                                    <select class="form-control lang" id="languageSelect" data="{{url()->current() . '?language='}}">--}}
{{--                                                        @foreach($langs as $lang)--}}
{{--                                                            <option--}}
{{--                                                                    {{$lang->code == request()->input('language') ? 'selected' : ''}}--}}
{{--                                                                    value="{{$lang->code}}"--}}
{{--                                                            >{{$lang->name}}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
                                                <a href="{{ route('admin.history.add'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
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
                                            <form action="{{ route('admin.history.index') }}" method="get">
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
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('Stratus') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($histories as $id=>$history)
                                        <tr>
                                            <td>{{ ++$id }}</td>
                                            <td>
                                                <img class="w-80" src="{{ asset('assets/front/img/history/'.$history->image) }}" alt="" />
                                            </td>
                                            <td>{{ $history->title }}</td>
                                            <td>{{ $history->serial_number }}</td>
                                            <td>
                                                @if($history->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.history.edit', $history->id )  }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.history.delete', $history->id ) }}"
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
