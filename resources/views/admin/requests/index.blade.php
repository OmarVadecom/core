@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Requests') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Requests') }}</li>
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
                                                <form class="d-inline-block" action="{{route('back.bulk.delete')}}" method="get">
                                                    <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                                    <input type="hidden" value="requests" name="table">
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="far fa-trash-alt"></i> {{__('Bulk Delete')}}
                                                    </button>
                                                </form>
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
                                            <form action="{{ route('requests.index') }}" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="name">Name</label>
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
                                                        <label for="mail">Mail</label>
                                                        <input
                                                            value="{{ request()->get('mail') }}"
                                                            class="form-control"
                                                            placeholder="Mail"
                                                            name="mail"
                                                            type="text"
                                                            id="mail"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="phone">Phone</label>
                                                        <input
                                                            value="{{ request()->get('phone') }}"
                                                            class="form-control"
                                                            placeholder="Phone"
                                                            name="phone"
                                                            type="text"
                                                            id="phone"
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
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" data-target="quote-bulk-delete" class="bulk_all_delete">
                                        </th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Mail') }}</th>
                                        <th>{{ __('Phone') }}</th>
                                        <th>{{ __('Package') }}</th>
                                        <th>{{ __('Date') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th style="width: 135px">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requests as $key=>$request)
                                        <tr id="quote-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="{{ $request->id}} "></td>
                                            <td>
                                                {{ $request->client_name }}
                                            </td>
                                            <td>
                                                {{ $request->client_email_address }}
                                            </td>
                                            <td>
                                                {{ $request->client_phone_number }}
                                            </td>
                                            <td>
                                                {{ $request->package }}
                                            </td>
                                            <td>
                                                {{ $request->created_at }}
                                            </td>
                                            <td>
                                                @if ($request->status == "new")
                                                    <p style="text-align: center;" class="bg-warning">Unread</p>
                                                @else
                                                    <p style="text-align: center;" class="bg-success">Read</p>
                                                @endif
                                            </td>
                                            <td class="d-flex">
                                                <a
                                                    href="{{ route('requests.show', $request->id) }}"
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <i class="fas fa-eye"></i>{{ __('Details') }}
                                                </a>
                                                <form
                                                    action="{{ route('requests.delete', $request->id ) }}"
                                                    style="margin-left: 5px"
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