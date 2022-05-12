@extends('admin.layout')

@section('content')

<style>
    .mw-60{
        width: 60%;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Request Details') }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
            <li class="breadcrumb-item">{{ __('Request Details') }}</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                    <h3 class="card-title">{{ __('Request Details:') }}</h3>
                    <div class="card-tools">
                        <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">
                          <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>
                                    {{ __('Name') }}
                                </th>
                                <td class="mw-60">
                                    {{ $request->client_name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ __('Email') }}
                                </th>
                                <td class="mw-60">
                                    {{ $request->client_email_address }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ __('Phone') }}
                                </th>
                                <td class="mw-60">
                                    {{ $request->client_phone_number }}
                                </td>
                            </tr>
                            @if($request->category != null)
                            <tr>
                                <th>
                                    {{ __('Category') }}
                                </th>
                                <td class="mw-60">
                                    {{ $request->category }}
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <th>
                                    {{ __('Package') }}
                                </th>
                                <td class="mw-60">
                                    {{ $request->package }}
                                </td>
                            </tr>
                            @if($request->message != null)

                            <tr>
                                <th>
                                    {{ __('Message') }}
                                </th>
                                <td class="mw-60">
                                    {{ $request->message }}
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <th>
                                    {{ __('Request Date') }}
                                </th>
                                <td class="mw-60">
                                    {{ $request->created_at }}

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ __('Status') }}
                                </th>
                                <td class="mw-60">
                                    <span class="
                                    btn
                                    @if ($request->status == "new")
                                    bg-warning
                                    @elseif ($request->status == 1)
                                    bg-success
                                    @endif
                                    btn-sm
                                    "> 
                                        @if($request->status == "new")
                                        Unread
                                        @elseif($request->status == 1)
                                        Read
                                        @endif
                                    </span>
                                </td>
                            </tr>
                 
                        </table>
                        <a href="{{ route('requests.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
                        @if($next != '')
                        <a href="/vc-admin/requests/{{$next}}"  class="pull-right btn btn-success">Next</a> 
                        @endif
                        @if($prev != '')
                        <a href="/vc-admin/requests/{{$prev}}" style="margin-right:5px" class="pull-right btn btn-success">Prev</a>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
@endsection

