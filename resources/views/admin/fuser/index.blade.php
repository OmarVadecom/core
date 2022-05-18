@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('User') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('User') }}</li>
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
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="{{ route('admin.front_user.index') }}" method="get">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="name">Name</label>
                                                        <input
                                                            value="{{ request()->get('name') }}"
                                                            class="form-control"
                                                            placeholder="Name"
                                                            type="text"
                                                            name="name"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-4">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="email">Email</label>
                                                        <input
                                                            value="{{ request()->get('email') }}"
                                                            class="form-control"
                                                            placeholder="Email"
                                                            name="email"
                                                            type="text"
                                                            id="email"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="status"
                                                        >Email Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Email Status</option>
                                                            <option
                                                                @if(request()->get('status') === 'Yes') selected @endif
                                                                value="Yes"
                                                            >Verify</option>
                                                            <option
                                                                @if(request()->get('status') === '0') selected @endif
                                                                value="0"
                                                            >Unverify</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-2" style="line-height: 97px">
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
                                        <th scope="col">#</th>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Email Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ ++$key}}</td>
                                            <td>
                                                <img class="w-80" src="{{asset('assets/front/img/'.$user->image)}}" alt="">
                                            </td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <form
                                                    action="{{route('admin.front_user.status_update')}}"
                                                    id="statusForm{{$user->id}}"
                                                    class="d-inline-block"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                                    <select
                                                        class="form-control form-control-sm
                                                                @if ($user->email_verified == '0')
                                                                    bg-warning
                                                                @elseif ($user->email_verified == 'Yes')
                                                                    bg-success
                                                                @endif
                                                            "
                                                        name="email_status"
                                                        onchange="document.getElementById('statusForm{{$user->id}}').submit();"
                                                    >
                                                        <option value="0" {{$user->email_verified == '0' ? 'selected' : ''}}>
                                                            Unverify
                                                        </option>
                                                        <option value="Yes" {{$user->email_verified == 'Yes' ? 'selected' : ''}}>
                                                            Verify
                                                        </option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a
                                                    href="{{route('admin.front_user.details', $user->id)}}"
                                                    class="btn btn-primary btn-sm"
                                                >
                                                    <span class="btn-label">
                                                        <i class="fas fa-eye"></i>
                                                    </span>
                                                    View
                                                </a>
                                                <form
                                                    action="{{route('admin.front_user.status_delete', $user->id)}}"
                                                    class="deleteform d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm deletebtn" id="delete">
                                                        <span class="btn-label">
                                                          <i class="fas fa-trash"></i>
                                                        </span>
                                                        Delete
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
