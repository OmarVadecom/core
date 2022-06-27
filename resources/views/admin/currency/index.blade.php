@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Currency') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Payment Settings') }}</li>
                        <li class="breadcrumb-item">{{ __('Currency') }}</li>
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
                                        <a href="{{ route('admin.currency.add') }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> {{ __('Add Currency') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="{{ route('admin.currency') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/> --}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
                                                <div class="row">
                                                    <div class="col-4">
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
                                                    <div class="col-4">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="value"
                                                        >Value</label>
                                                        <input
                                                            value="{{ request()->get('value') }}"
                                                            class="form-control"
                                                            placeholder="Value"
                                                            name="value"
                                                            type="text"
                                                            id="value"
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
                        <div class="card-body table-responsive">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Sign') }}</th>
                                        <th>{{ __('Value') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($currency as $id => $curr)
                                        <tr>
                                            <td>{{ ++$id }}</td>
                                            <td>
                                                {{ $curr->name }}
                                            </td>
                                            <td>
                                                {{ $curr->sign }}
                                            </td>
                                            <td>
                                                {{ $curr->value }}
                                            </td>
                                            <td>
                                                @if($curr->is_default == 1)
                                                    <a
                                                        class="btn btn-success btn-sm"
                                                        href="javascript:;"
                                                    >{{ __('Default') }}</a>
                                                    <a
                                                        href="{{ route('admin.currency.edit', $curr->id) }}"
                                                       class="btn btn-info btn-sm"
                                                    >
                                                        <i class="fas fa-pencil-alt"></i>
                                                        {{ __('Edit') }}
                                                    </a>
                                                    @if($curr->id != 1)
                                                        <form
                                                            action="{{ route('admin.currency.delete', $curr->id ) }}"
                                                            class="d-inline-block"
                                                            id="deleteform"
                                                            method="post"
                                                        >
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $curr->id }}">
                                                            <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                                <i class="fas fa-trash"></i>{{ __('Delete') }}
                                                            </button>
                                                        </form>
                                                    @endif
                                                @else
                                                    <a
                                                        href="{{ route('admin.currency.status', $curr->id ) }}"
                                                        class="btn btn-primary btn-sm"
                                                    >{{ __('Set Default') }}</a>
                                                    <a
                                                        href="{{ route('admin.currency.edit', $curr->id) }}"
                                                       class="btn btn-info btn-sm"
                                                    >
                                                        <i class="fas fa-pencil-alt"></i>
                                                        {{ __('Edit') }}
                                                    </a>
                                                    @if($curr->id != 1)
                                                        <form
                                                            action="{{ route('admin.currency.delete', $curr->id ) }}"
                                                            class="d-inline-block"
                                                            id="deleteform"
                                                            method="post"
                                                        >
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $curr->id }}">
                                                            <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                                <i class="fas fa-trash"></i>{{ __('Delete') }}
                                                            </button>
                                                        </form>
                                                    @endif
                                                @endif
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
