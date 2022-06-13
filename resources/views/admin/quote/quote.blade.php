@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Quote') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Quote') }}</li>
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
                                            <input type="hidden" value="quote" name="table">
                                            <button class="btn btn-danger btn-sm">
                                                <i class="far fa-trash-alt"></i>
                                                {{__('Bulk Delete')}}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="{{ route($route_search) }}" method="get">
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
                                                            type="text"
                                                            name="name"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="subject"
                                                        >Subject</label>
                                                        <input
                                                            value="{{ request()->get('subject') }}"
                                                            placeholder="Subject"
                                                            class="form-control"
                                                            name="subject"
                                                            id="subject"
                                                            type="text"
                                                        />
                                                    </div>
                                                    @if($status == 0)
                                                        <div class="col-3">
                                                            <label
                                                                class="@if($currentLang->code === 'ar') text-left @endif"
                                                                for="status"
                                                            >Status</label>
                                                            <select name="status" class="form-control" id="status">
                                                                <option value="">Status</option>
                                                                <option
                                                                    @if(request()->get('status') === '0') selected @endif
                                                                    value="0"
                                                                >Pending</option>
                                                                <option
                                                                    @if(request()->get('status') === '1') selected @endif
                                                                    value="1"
                                                                >Processing</option>
                                                                <option
                                                                    @if(request()->get('status') === '2') selected @endif
                                                                    value="2"
                                                                >Completed</option>
                                                                <option
                                                                    @if(request()->get('status') === '3') selected @endif
                                                                    value="3"
                                                                >Rejected</option>
                                                            </select>
                                                        </div>
                                                    @endif
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
                                            <input type="checkbox" data-target="quote-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Subject') }}</th>
                                        <th>{{ __('Mail') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quotes as $id => $quote)
                                        <tr id="quote-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="{{ $quote->id}} " />
                                            </td>
                                            <td>
                                                {{ $quote->name }}
                                            </td>
                                            <td>
                                                {{ $quote->subject }}
                                            </td>
                                            <td>
                                                <a href="mailto:{{ $quote->email }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-paper-plane"></i>
                                                    {{ __('Send Mail') }}
                                                </a>
                                            </td>
                                            <td>
                                                <form
                                                    action="{{route('admin.quote.status')}}"
                                                    id="statusForm{{$quote->id}}"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="quote_id" value="{{$quote->id}}" />
                                                    <select
                                                        class="form-control form-control-sm
                                                            @if ($quote->status == 0)
                                                                bg-warning
                                                            @elseif ($quote->status == 1)
                                                                bg-primary
                                                            @elseif ($quote->status == 2)
                                                                bg-success
                                                            @elseif ($quote->status == 3)
                                                                bg-danger
                                                            @endif
                                                        "
                                                        name="status"
                                                        onchange="document.getElementById('statusForm{{$quote->id}}').submit();"
                                                    >
                                                        <option value="0" {{$quote->status == 0 ? 'selected' : ''}}>{{ __('Pending') }}</option>
                                                        <option value="1" {{$quote->status == 1 ? 'selected' : ''}}>{{ __('Processing') }}</option>
                                                        <option value="2" {{$quote->status == 2 ? 'selected' : ''}}>{{ __('Completed') }}</option>
                                                        <option value="3" {{$quote->status == 3 ? 'selected' : ''}}>{{ __('Rejected') }}</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('admin.quote.details', $quote->id) }}">
                                                    <i class="fas fa-eye"></i>
                                                    {{ __('Details') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.quote.delete', $quote->id ) }}"
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

