@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Social Links') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Social Links') }}</li>
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
                            <h3 class="card-title">{{ __('Add Social Links') }} </h3>
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ route('admin.storeSlinks') }}"
                                class="form-horizontal"
                                onsubmit="store(event)"
                                method="POST"
                                id="slink"
                            >
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">
                                        {{ __('Social Icon') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <button
                                            class="btn btn-secondary biconpicker"
                                            data-icon="fab fa-facebook-f"
                                            data-iconset="fontawesome5"
                                            role="iconpicker"
                                        ></button>
                                        <input id="inputIcon" type="hidden" name="icon" value="">
                                        @if ($errors->has('icon'))
                                            <p class="text-danger"> {{ $errors->first('icon') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="website_title" class="col-sm-2 control-label">{{ __('Social URL') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="url" value="" placeholder="{{ __('Social URL') }}" />
                                        @if ($errors->has('url'))
                                            <p class="text-danger"> {{ $errors->first('url') }} </p>
                                        @endif
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
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Social Links List</h3>
                        </div>
                        <div class="card-header pm-0 border-bottom-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="{{ route('admin.slinks') }}" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="icon">Icon</label>
                                                        <input
                                                            value="{{ request()->get('icon') }}"
                                                            class="form-control"
                                                            placeholder="icon"
                                                            type="text"
                                                            name="icon"
                                                            id="icon"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="url">Url</label>
                                                        <input
                                                                value="{{ request()->get('url') }}"
                                                                class="form-control"
                                                                placeholder="url"
                                                                type="text"
                                                                name="url"
                                                                id="url"
                                                        />
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
                        <div class="card-body pt-0">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Icon</th>
                                        <th>URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slinks as $id => $slink)
                                        <tr>
                                            <td>{{ ++$id }}</td>
                                            <td>{{ $slink->icon }}</td>
                                            <td>{{ $slink->url}}</td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.editSlinks', $slink->id) }}"
                                                    class="btn btn-info btn-sm w-100"
                                                >
                                                    <i class="fas fa-pencil-alt"></i>Edit
                                                </a>
                                                <form
                                                    action="{{ route('admin.deleteSlinks', $slink->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $slink->id }}">
                                                    <button
                                                        style="padding: 3px 4px;margin-top: 5px"
                                                        class="btn btn-danger btn-sm"
                                                        type="submit"
                                                        id="delete"
                                                    >
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

