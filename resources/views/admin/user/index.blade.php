@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('User Role') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('User Role') }}</li>
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
                                <div class="col-4">
                                    <h4>Filter Data</h4>
                                </div>
                                <div class="col-8">
                                    <div class="card-tools d-flex justify-content-end">
                                        <a href="{{ route('admin.user.add') }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-plus"></i> {{ __('Add User & Role') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="{{ route('admin.user.index') }}" method="get">
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
                                                            name="name"
                                                            type="text"
                                                            id="name"
                                                        />
                                                    </div>
                                                    <div class="col-3">
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
                                                    <div class="col-3">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="role"
                                                        >Role</label>
                                                        <input
                                                            value="{{ request()->get('role') }}"
                                                            class="form-control"
                                                            placeholder="Role"
                                                            name="role"
                                                            type="text"
                                                            id="role"
                                                        />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="@if($currentLang->code === 'ar') text-left @endif" for="role_id">Role</label>
                                                        <select class="form-control" name="role_id" id="role_id">
                                                            <option value="" selected="selected">Select something</option>
                                                            <option
                                                                @if(request()->get('role_id') == 'owner') selected @endif
                                                                value="owner"
                                                            >Owner</option>
                                                            @foreach($roles as $role)
                                                                <option
                                                                    @if(request()->get('role_id') == $role->id) selected @endif
                                                                    value="{{ $role->id }}"
                                                                >
                                                                    {{ $role->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12" style="margin-top: 10px">
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
                                        <th scope="col">Role</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        @if ($user->id != Auth::guard('admin')->user()->id)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <img class="w-80" src="{{asset('assets/admin/img/admin-user/'.$user->image)}}" alt="" />
                                                </td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    @if (empty($user->role))
                                                        <span class="badge badge-danger">Owner</span>
                                                    @else
                                                        {{$user->role->name}}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @elseif ($user->status == 0)
                                                        <span class="badge badge-warning">Deactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="{{route('admin.user.edit', $user->id)}}">
                                                        <span class="btn-label">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                        Edit
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.user.delete', $user->id) }}"
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
                                        @endif
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
