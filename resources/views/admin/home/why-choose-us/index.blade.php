@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Why Choose Us') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>{{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('Why Choose Us') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                        <div class="card-tools d-flex justify-content-end">
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
                                            <a href="{{ route('admin.wcu.add'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus"></i> {{ __('Add') }}
                                            </a>
                                        </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                Filter Data
                                            </h4>
                                            <form action="{{ route('admin.why_chooseus') }}" method="get">
                                                {{-- <input type="hidden" name="language" value="{{ $currentLang->code }}"/> --}}
                                                <input type="hidden" name="language" value="{{ request('language') }}"/>
                                                <div class="row">
                                                    <div class="col-5">
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
                                                    <div class="col-4">
                                                        <label
                                                            class="@if($currentLang->code === 'ar') text-left @endif"
                                                            for="status"
                                                        >Status</label>
                                                        <select name="status" class="form-control" id="status">
                                                            <option value="">Status</option>
                                                            <option
                                                                    @if(request()->get('status') === '1') selected @endif
                                                            value="1"
                                                            >Publish</option>
                                                            <option
                                                                    @if(request()->get('status') === '0') selected @endif
                                                            value="0"
                                                            >Unpublish</option>
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
                        <div class="card-body">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                    <tr>
                                        <th>{{ __('#') }}</th>
                                        <th>{{ __('Icon') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Order') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($why_selects as $id => $data)
                                        <tr>
                                            <td>
                                                {{ $id }}
                                            </td>
                                            <td>
                                                <i class="{{ $data->icon }}"></i>
                                            </td>
                                            <td>
                                                {{ $data->title }}
                                            </td>
                                            <td>
                                                {{ $data->serial_number }}
                                            </td>
                                            <td>
                                                @if($data->status == 1)
                                                    <span class="badge badge-success">{{ __('Publish') }}</span>
                                                @else
                                                    <span class="badge badge-warning">{{ __('Unpublish') }}</span>
                                                @endif
                                            </td>
                                            <td style="width: 20% !important;">
                                                <a
                                                    href="{{ route('admin.wcu.edit', $data->id) }}"
                                                    style="width: 99%;margin-bottom: 3px"
                                                    class="btn btn-info btn-sm"
                                                >
                                                    <i class="fas fa-pencil-alt"></i>
                                                    {{ __('Edit') }}
                                                </a>
                                                <form
                                                    action="{{ route('admin.wcu.delete', $data->id ) }}"
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
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1 ">{{ __('Why Choose Us Info') }}</h3>
                            {{-- <div class="card-tools">
                                <div class="d-inline-block mr-4">
                                    <select class="form-control form-control-sm lang" id="languageSelect"
                                            data="{{url()->current() . '?language='}}">
                                        @foreach($langs as $lang)
                                            <option
                                                {{$lang->code == request()->input('language') ? 'selected' : ''}}
                                                value="{{$lang->code}}"
                                            >{{$lang->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                           
                        </div>
                        <div class="card-body">
                            <nav>
                                <div class="nav nav-tabs " id="nav-tab" role="tablist">
                                    <a class="col-md-4 nav-item nav-link active mx-2" id="nav-en-why_chooseus-tab" data-toggle="tab" href="#nav-en-why_chooseus" role="tab" aria-controls="nav-en-why_chooseus" aria-selected="true">English</a>
                                    <a class="col-md-4 nav-item nav-link" id="nav-ar-why_chooseus-tab" data-toggle="tab" href="#nav-ar-why_chooseus" role="tab" aria-controls="nav-ar-why_chooseus" aria-selected="false">عربي</a>
                                </div>
                            </nav>
                            <form
                                action="{{ route('admin.why_chooseus_update', $english_static->language_id) }}"
                                enctype="multipart/form-data"
                                class="form-horizontal"
                                method="POST"
                            >
                                @csrf

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="form-group row my-3">
                                        <label class="col-sm-2 control-label">
                                            {{ __('Image1') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-sm-10">
                                            <img
                                                src="{{ asset('assets/front/img/'.$english_static->w_c_us_image1) }}"
                                                class="mw-400 mb-3 img-demo show-img"
                                                alt=""
                                            />
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="w_c_us_image1">
                                                    {{ __('Choose New Image') }}
                                                </label>
                                                <input type="file" class="custom-file-input up-img" name="w_c_us_image1" id="w_c_us_image1" />
                                            </div>
                                            <p class="help-block text-info">
                                                {{ __('Upload 370X344 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}
                                            </p>
                                            @if ($errors->has('w_c_us_image1'))
                                                <p class="text-danger"> {{ $errors->first('w_c_us_image1') }} </p>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">
                                            {{ __('Image2') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-sm-10">
                                            <img
                                                src="{{ asset('assets/front/img/'.$english_static->w_c_us_image2) }}"
                                                class="mw-400 mb-3 img-demo show-img"
                                                alt=""
                                            />
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="w_c_us_image2">
                                                    {{ __('Choose New Image') }}
                                                </label>
                                                <input type="file" class="custom-file-input up-img" name="w_c_us_image2" id="w_c_us_image2" />
                                            </div>
                                            <p class="help-block text-info">
                                                {{ __('Upload 370X344 (Pixel) Size image for best quality. Only jpg, jpeg, png image is allowed.') }}
                                            </p>
                                            @if ($errors->has('w_c_us_image2'))
                                                <p class="text-danger"> {{ $errors->first('w_c_us_image2') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 tab-pane fade show active" id="nav-en-why_chooseus" role="tabpanel" aria-labelledby="nav-en-why_chooseus-tab" >
                                        {{--english--}}
                                       
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                {{ __('Title') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $english_static->w_c_us_title }}"
                                                    placeholder="{{ __('Title') }}"
                                                    class="form-control"
                                                    name="w_c_us_title"
                                                    type="text"
                                                />
                                                @if ($errors->has('w_c_us_title'))
                                                    <p class="text-danger"> {{ $errors->first('w_c_us_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                {{ __('Subtitle') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $english_static->w_c_us_sub_title }}"
                                                    placeholder="{{ __('Subtitle') }}"
                                                    name="w_c_us_sub_title"
                                                    class="form-control"
                                                    type="text"
                                                />
                                                @if ($errors->has('w_c_us_sub_title'))
                                                    <p class="text-danger"> {{ $errors->first('w_c_us_sub_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 tab-pane fade" id="nav-ar-why_chooseus" role="tabpanel" aria-labelledby="nav-ar-why_chooseus-tab">
                                        {{--arabic--}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                {{ __('العنوان') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $arabic_static->w_c_us_title }}"
                                                    placeholder="{{ __('Title') }}"
                                                    class="form-control"
                                                    name="ar_w_c_us_title"
                                                    type="text"
                                                />
                                                @if ($errors->has('ar_w_c_us_title'))
                                                    <p class="text-danger"> {{ $errors->first('ar_w_c_us_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">
                                                {{ __('العنوان الفرعي') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-10">
                                                <input
                                                    value="{{ $arabic_static->w_c_us_sub_title }}"
                                                    placeholder="{{ __('Subtitle') }}"
                                                    name="ar_w_c_us_sub_title"
                                                    class="form-control"
                                                    type="text"
                                                />
                                                @if ($errors->has('ar_w_c_us_sub_title'))
                                                    <p class="text-danger"> {{ $errors->first('ar_w_c_us_sub_title') }} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
