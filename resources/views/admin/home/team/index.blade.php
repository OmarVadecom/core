@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Team') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Team') }}</li>
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
                            <h3 class="card-title mt-1">{{ __('Section Content') }}</h3>
                            {{-- <div class="card-tools">
                                <div class="d-inline-block mr-4">
                                    <select class="form-control lang languageSelect" data="{{url()->current() . '?language='}}">
                                        @foreach($langs as $lang)
                                            <option
                                                {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                value="{{$lang->code}}"
                                            >{{$lang->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="col-md-6 nav-item nav-link active" id="nav-en-team-tab" data-toggle="tab" href="#nav-en-team" role="tab" aria-controls="nav-en-team" aria-selected="true">English</a>
                                    <a class="col-md-6 nav-item nav-link" id="nav-ar-team-tab" data-toggle="tab" href="#nav-ar-team" role="tab" aria-controls="nav-ar-team" aria-selected="false">عربي</a>
                                </div>
                            </nav>
                            <form
                                action="{{ route('admin.team_section_update',  $english_static->language_id) }}" method="POST"
                                enctype="multipart/form-data"
                                class="form-horizontal"
                            >
                                @csrf
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="col-md-12 tab-pane fade show active" id="nav-en-team" role="tabpanel" aria-labelledby="nav-en-team-tab" >
                                        {{--english--}}
                                        <div class="form-group row my-3">
                                            <label class="col-sm-2 control-label">{{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $english_static->team_title }}"
                                                    placeholder="{{ __('Title') }}"
                                                    class="form-control"
                                                    name="team_title"
                                                    type="text"
                                                >
                                                @if ($errors->has('team_title'))
                                                    <p class="text-danger"> {{ $errors->first('team_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                {{ __('Subtitle') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $english_static->team_sub_title }}"
                                                    placeholder="{{ __('Subtitle') }}"
                                                    name="team_sub_title"
                                                    class="form-control"
                                                    type="text"
                                                >
                                                @if ($errors->has('team_sub_title'))
                                                    <p class="text-danger"> {{ $errors->first('team_sub_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 tab-pane fade" id="nav-ar-team" role="tabpanel" aria-labelledby="nav-ar-team-tab">
                                        {{--arabic--}}
                                        <div class="form-group row my-3">
                                            <label class="col-sm-2 control-label">{{ __('العنوان') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $arabic_static->team_title }}"
                                                    placeholder="{{ __('العنوان') }}"
                                                    class="form-control"
                                                    name="ar_team_title"
                                                    type="text"
                                                >
                                                @if ($errors->has('ar_team_title'))
                                                    <p class="text-danger"> {{ $errors->first('ar_team_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                {{ __('العنوان الفرعي') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $arabic_static->team_sub_title }}"
                                                    placeholder="{{ __('العنوان الفرعي') }}"
                                                    name="ar_team_sub_title"
                                                    class="form-control"
                                                    type="text"
                                                >
                                                @if ($errors->has('ar_team_sub_title'))
                                                    <p class="text-danger"> {{ $errors->first('ar_team_sub_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
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
                                                    <select class="form-control lang" id="languageSelect" data="{{url()->current() . '?language='}}">
                                                        @foreach($langs as $lang)
                                                            <option
                                                                    {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                                    value="{{$lang->code}}"
                                                            >{{$lang->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <a href="{{ route('admin.team.add'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
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
                                            <form action="{{ route('admin.team') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/> --}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
                                                <div class="row">
                                                    <div class="col-3">
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
                                                            for="dagenation"
                                                        >Dagenation</label>
                                                        <input
                                                            value="{{ request()->get('dagenation') }}"
                                                            class="form-control"
                                                            placeholder="Dagenation"
                                                            name="dagenation"
                                                            type="text"
                                                            id="dagenation"
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
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Dagenation') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $id=>$team)
                                        <tr>
                                            <td>
                                                {{ $id }}
                                            </td>
                                            <td>
                                                <img class="w-80" src="{{ asset('assets/front/img/team/'.$team->image) }}" alt="" width="150px" height="150px" />
                                            </td>
                                            <td>{{ $team->name }}</td>
                                            <td>{{ $team->dagenation}}</td>
                                            <td>{{ $team->serial_number}}</td>
                                            <td>
                                                @if($team->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.team.delete', $team->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $team->id }}">
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
