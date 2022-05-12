@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        @if (request()->path()=='admin/product/pending/orders')
                            {{ __('Pending') }}
                        @elseif (request()->path()=='admin/product/all/orders')
                            {{ __('All') }}
                        @elseif (request()->path()=='admin/product/processing/orders')
                            {{ __('Processing') }}
                        @elseif (request()->path()=='admin/product/completed/orders')
                            {{ __('Completed') }}
                        @elseif (request()->path()=='admin/product/rejected/orders')
                            {{ __('Rejcted') }}
                        @endif
                        {{ __('Order') }}
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            @if (request()->path()=='admin/product/pending/orders')
                                {{ __('Pending') }}
                            @elseif (request()->path()=='admin/product/all/orders')
                                {{ __('All') }}
                            @elseif (request()->path()=='admin/product/processing/orders')
                                {{ __('Processing') }}
                            @elseif (request()->path()=='admin/product/completed/orders')
                                {{ __('Completed') }}
                            @elseif (request()->path()=='admin/product/rejected/orders')
                                {{ __('Rejcted') }}
                            @endif
                            {{ __('Order') }}
                        </li>
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
                                                    <input type="hidden" value="order" name="table">
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
                                            <form action="{{ route($route_search) }}" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="order_number">Order Number</label>
                                                        <input
                                                            value="{{ request()->get('order_number') }}"
                                                            placeholder="Order Number"
                                                            class="form-control"
                                                            name="order_number"
                                                            id="order_number"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="total">Total</label>
                                                        <input
                                                            value="{{ request()->get('total') }}"
                                                            class="form-control"
                                                            placeholder="Total"
                                                            name="total"
                                                            type="text"
                                                            id="total"
                                                        />
                                                    </div>
                                                    @if($status == 0)
                                                        <div class="col-3">
                                                            <label
                                                                class="@if($currentLang->code === 'ar') text-left @endif"
                                                                for="order_status"
                                                            >Order Status</label>
                                                            <select name="order_status" class="form-control" id="order_status">
                                                                <option value="">Order Status</option>
                                                                <option
                                                                    @if(request()->get('order_status') === '0') selected @endif
                                                                    value="0"
                                                                >Pending</option>
                                                                <option
                                                                    @if(request()->get('order_status') === '1') selected @endif
                                                                    value="1"
                                                                >Processing</option>
                                                                <option
                                                                    @if(request()->get('order_status') === '2') selected @endif
                                                                    value="2"
                                                                >Completed</option>
                                                                <option
                                                                    @if(request()->get('order_status') === '3') selected @endif
                                                                    value="3"
                                                                >Rejected</option>
                                                            </select>
                                                        </div>
                                                    @endif
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="payment_status"
                                                        >Payment Status</label>
                                                        <select
                                                            data-placeholder="Payment Status"
                                                            name="payment_status"
                                                            class="form-control"
                                                            id="payment_status"
                                                        >
                                                            <option value="">Payment Status</option>
                                                            <option
                                                                @if(request()->get('payment_status') === '0') selected @endif
                                                                value="0"
                                                            >Pending</option>
                                                            <option
                                                                @if(request()->get('payment_status') === '1') selected @endif
                                                                value="1"
                                                            >completed</option>
                                                        </select>
                                                    </div>
                                                    @if($status != 0)
                                                        <div class="col-3" style="line-height: 97px">
                                                            <button type="submit" class="btn btn-primary text-center">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                    @endif
                                                </div>
                                                @if($status == 0)
                                                    <div class="row">
                                                        <div class="col-12" style="margin-top: 10px">
                                                            <button type="submit" class="btn btn-primary text-center">
                                                                <i class="fa fa-search"></i> Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endif
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
                                            <input type="checkbox" data-target="order-bulk-delete" class="bulk_all_delete" />
                                        </th>
                                        <th scope="col">{{ __('Order Number') }}</th>
                                        <th scope="col" width="15%">{{ __('Gateway') }}</th>
                                        <th scope="col">{{ __('Total') }}</th>
                                        <th scope="col">{{ __('Order Status') }}</th>
                                        <th scope="col">{{ __('Payment Status') }}</th>
                                        <th scope="col">{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key => $order)
                                        <tr id="order-bulk-delete">
                                            <td>
                                                <input type="checkbox" class="bulk-item" value="{{ $order->id}} ">
                                            </td>
                                            <td>#{{$order->order_number}}</td>
                                            <td>{{$order->method}}</td>
                                            <td>{{ $order->currency_sign }}{{round($order->total,2) }}</td>
                                            <td>
                                                <form
                                                    action="{{route('admin.product.orders.status')}}"
                                                    id="statusForm{{$order->id}}"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                                    <select
                                                        class="
                                                            form-control form-control-sm
                                                            @if ($order->order_status == '0')
                                                                bg-warning
                                                            @elseif ($order->order_status == '1')
                                                                bg-primary
                                                            @elseif ($order->order_status == '2')
                                                                bg-success
                                                            @elseif ($order->order_status == '3')
                                                                bg-danger
                                                            @endif
                                                        "
                                                        name="order_status"
                                                        onchange="document.getElementById('statusForm{{$order->id}}').submit();"
                                                    >
                                                        <option value="0" {{$order->order_status == '0' ? 'selected' : ''}}>
                                                            Pending
                                                        </option>
                                                        <option value="1" {{$order->order_status == '1' ? 'selected' : ''}}>
                                                            Processing
                                                        </option>
                                                        <option value="2" {{$order->order_status == '2' ? 'selected' : ''}}>
                                                            Completed
                                                        </option>
                                                        <option value="3" {{$order->order_status == '3' ? 'selected' : ''}}>
                                                            Rejected
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <form
                                                    action="{{route('admin.product.payment.status')}}"
                                                    id="paymentStatusForm{{$order->id}}"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                                    <select
                                                        class="
                                                            form-control form-control-sm
                                                            @if ($order->payment_status == 1)
                                                                bg-warning
                                                            @else
                                                                bg-danger
                                                            @endif
                                                        "
                                                        name="payment_status"
                                                        onchange="document.getElementById('paymentStatusForm{{$order->id}}').submit();"
                                                    >
                                                        <option value="0" {{$order->payment_status == '0' ? 'selected' : ''}}>
                                                            Pending
                                                        </option>
                                                        <option value="1" {{$order->payment_status == '1' ? 'selected' : ''}}>
                                                            Complete
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-info btn-sm dropdown-toggle"
                                                        id="dropdownMenuButton"
                                                        data-toggle="dropdown"
                                                        aria-expanded="false"
                                                        aria-haspopup="true"
                                                        type="button"
                                                    >
                                                        Actions
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a
                                                            href="{{route('admin.product.details', $order->id)}}"
                                                            class="dropdown-item"
                                                        >Details</a>
                                                        <a
                                                            href="{{asset('assets/front/invoices/product/'.$order->invoice_number)}}"
                                                            class="dropdown-item"
                                                            target="_blank"
                                                        >Invoice</a>
                                                        <form
                                                            id="deleteform" class="d-inline-block dropdown-item"
                                                            action="{{ route('admin.product.order.delete') }}"
                                                            method="post"
                                                        >
                                                            @csrf
                                                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                            <button type="submit" id="delete">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
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
