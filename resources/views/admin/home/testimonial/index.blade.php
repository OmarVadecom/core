@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Testimonials') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Testimonials') }}</li>
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
                            <h3 class="card-title mt-1">{{ __('Testimonial Content') }}</h3>
                            <div class="card-tools">
                                <div class="d-inline-block mr-4">
                                    <select class="form-control lang languageSelect" data="{{url()->current() . '?language='}}">
                                        @foreach($langs as $lang)
                                            <option
                                                {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                value="{{$lang->code}}"
                                            >{{$lang->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form
                                action="{{ route('admin.testimonialcontent.update',  $saectiontitle->language_id) }}"
                                enctype="multipart/form-data"
                                class="form-horizontal"
                                method="POST"
                            >
                                @csrf

                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">
                                        {{ __('Testimonial Title') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input
                                            value="{{ $saectiontitle->testimonial_title }}"
                                            placeholder="{{ __('Testimonial Title') }}"
                                            name="testimonial_title"
                                            class="form-control"
                                            type="text"
                                        >
                                        @if ($errors->has('testimonial_title'))
                                            <p class="text-danger"> {{ $errors->first('testimonial_title') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">
                                        {{ __('Testimonial Sub-title') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input
                                            value="{{ $saectiontitle->testimonial_subtitle }}"
                                            placeholder="{{ __('Testimonial Sub-Title') }}"
                                            name="testimonial_subtitle"
                                            class="form-control"
                                            type="text"
                                        >
                                        @if ($errors->has('testimonial_subtitle'))
                                            <p class="text-danger"> {{ $errors->first('testimonial_subtitle') }} </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                                                <div class="d-inline-block mr-4">
                                                    <select class="form-control lang" id="languageSelect" data="{{url()->current() . '?language='}}">
                                                        @foreach($langs as $lang)
                                                            <option
                                                                    {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                                    value="{{$lang->code}}"
                                                            >{{$lang->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <a href="{{ route('admin.testimonial.add'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-plus"></i> {{ __('Add') }}
                                                </a>
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
                                            <form action="{{ route('admin.testimonial') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/> --}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
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
                                                            for="position"
                                                        >Position</label>
                                                        <input
                                                            value="{{ request()->get('position') }}"
                                                            class="form-control"
                                                            placeholder="Position"
                                                            name="position"
                                                            type="text"
                                                            id="position"
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
                        <div class="card-body no-padding">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Position') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $id=>$testimonial)
                                        <tr>
                                            <td>{{ ++$id }}</td>
                                            <td>
                                                <img class="w-80" src="{{ asset('assets/front/img/'.$testimonial->image) }}" alt="" />
                                            </td>
                                            <td>{{ $testimonial->name }}</td>
                                            <td>{{ $testimonial->position}}</td>
                                            <td>{{ $testimonial->serial_number}}</td>
                                            <td>
                                                <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>{{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.testimonial.delete', $testimonial->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                                >
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $testimonial->id }}">
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
