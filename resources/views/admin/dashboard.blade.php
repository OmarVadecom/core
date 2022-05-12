@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Welcome back,') }} {{ Auth::guard('admin')->user()->name }} !</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Product') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$currentLang->products()->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        @php
                            $porder = App\Models\Order::where('order_status', '0')->orderBy('id', 'DESC')->get();
                        @endphp
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Pending Product Order') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$porder->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Blogs') }}</span>
                            <span class="info-box-number font-weight-normal">{{$currentLang->blogs()->count()}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Job') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$currentLang->jobs()->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        @php
                            $applicants = App\Models\JobApplication::where('status', '0')->orderBy('id', 'DESC')->get();
                        @endphp
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('New Job Applied') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$applicants->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Services') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$currentLang->services()->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Team Members') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$currentLang->teams()->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Subscribers') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{\App\Models\Newsletter::count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Quotes') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{\App\Models\Quote::count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Projects') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$currentLang->portfolios()->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('Gallery') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{$currentLang->galleries()->count()}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('User') }}</span>
                            <h4 class="info-box-number font-weight-normal">{{\App\Models\User::count()}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h4>{{ __('Latest Quotes :') }}</h4>
                        </div>
                        <div class="card-header pb-0 border-bottom-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="{{ route('admin.dashboard') }}" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="subject"
                                                        >Subject</label>
                                                        <input
                                                            value="{{ request()->get('subject') }}"
                                                            class="form-control"
                                                            placeholder="Subject"
                                                            name="subject"
                                                            id="subject"
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
                        <div class="card-body pt-0">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Subject') }}</th>
                                        <th>{{ __('Mail') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quotes as $id => $quote)
                                        <tr>
                                            <td>{{ ++$id }}</td>
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
                                                <a
                                                    href="{{ route('admin.quote.details', $quote->id) }}"
                                                    class="btn btn-info btn-sm"
                                                >
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Latest Portfolios :') }}</h3>
                        </div>
                        <div class="card-header pb-0 border-bottom-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="{{ route('admin.dashboard') }}" method="get">
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
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="service">Category</label>
                                                        <select class="form-control" name="service_id" id="service">
                                                            <option value="" selected="selected">Select something</option>
                                                            @foreach($services as $service)
                                                                <option
                                                                    @if(request()->get('service_id') == $service->id) selected @endif
                                                                    value="{{ $service->id }}"
                                                                >
                                                                    {{ $service->title }}
                                                                </option>
                                                            @endforeach
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
                        <div class="card-body pt-0">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Category') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portfolios as $id => $portfolio)
                                        <tr>
                                            <td>{{ ++$id }}</td>
                                            <td>
                                                {{ $portfolio->title }}
                                            </td>
                                            <td>
                                                {{ $portfolio->service->title }}
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
    </div>
@endsection
