@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('newsletters') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('newsletters') }}</li>
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
                                        <form class="d-inline-block mr-3" action="{{route('back.bulk.delete')}}" method="get">
                                            <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                            <input type="hidden" value="newsletter" name="table">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                                {{__('Bulk Delete')}}
                                            </button>
                                        </form>
                                        <a href="{{ route('admin.newsletter.add')}}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> {{ __('Add Email') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>Filter Data</h4>
                                            <form action="{{ route('admin.newsletter') }}" method="get">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="email"
                                                        >Email</label>
                                                        <input
                                                            value="{{ request()->get('email') }}"
                                                            class="form-control"
                                                            placeholder="Email"
                                                            name="email"
                                                            type="text"
                                                            id="email"
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
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="newsletter-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($newsletters as $id => $newsletter)
                                        <tr id="newsletter-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="{{ $newsletter->id}}" />
                                            </td>
                                            <td>
                                                {{ $newsletter->email }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.newsletter.edit', $newsletter->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    {{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.newsletter.delete', $newsletter->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $newsletter->id }}">
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
