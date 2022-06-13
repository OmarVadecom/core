@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Sitemap') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Sitemap') }}</li>
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-tools d-flex justify-content-end">
                                        <a href="{{ route('admin.sitemap.add') }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> {{ __('Add Sitemap') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="{{ route('admin.sitemap.index') }}" method="get">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="file_name"
                                                        >File Name</label>
                                                        <input
                                                            value="{{ request()->get('file_name') }}"
                                                            placeholder="File Name"
                                                            class="form-control"
                                                            name="file_name"
                                                            id="file_name"
                                                            type="text"
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
                        <div class="card-body">
                            @if (count($sitemaps) == 0)
                                <h3 class="text-center">NO SITEMAP FOUND</h3>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped data_table">
                                        <thead>
                                            <tr>
                                                <th scope="col">File Name</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sitemaps as $key => $sitemap)
                                                <tr>
                                                    <td>{{$sitemap->filename}}</td>
                                                    <td>
                                                        <form
                                                            action="{{route('admin.sitemap.download', $sitemap->id)}}"
                                                            class="d-inline-block"
                                                            method="post"
                                                        >
                                                            @csrf
                                                            <input type="hidden" name="filename" value="{{$sitemap->filename}}" />
                                                            <button type="submit" class="btn btn-info btn-sm">
                                                              <span class="btn-label">
                                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                                              </span>
                                                                Download
                                                            </button>
                                                        </form>
                                                        <form
                                                            action="{{ route('admin.sitemap.delete', $sitemap->id ) }}"
                                                            id="deleteform" class="d-inline-block"
                                                            method="post"
                                                        >
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $sitemap->id }}">
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
