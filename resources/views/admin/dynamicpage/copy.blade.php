@extends('admin.layout')
@section('style')
    <style>
        .icon-delete{
            color: #dc3545;
            cursor: pointer;
            margin-right: 10px;
            padding: 3px 5px;
            border-radius: 5px;
            font-size: 16px;
        }
        .minimize-module {
            cursor: pointer;
            color: #007bff;
            float: right;
            height: 25px;
            padding: 3px;
            border-radius: 5px;

        }

        .fix-slug {
            line-height: 37px;
            height: 37px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            background-color: #eceeef;
            text-align: center;
            border-radius: 0.18rem;
        }
        @media (min-width: 576px) {
            .modules-container {
                margin-left: 16.666667%
            }
        }
    </style>
@endsection
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('Dynamic Page') }} </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li class="breadcrumb-item">{{ __('Dynamic Page') }}</li>
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
                        <h3 class="card-title mt-1">{{ __('Dynamic Page') }}</h3>
                        <div class="card-tools">
                            {{-- <a href="{{ asset($dynamicpage->url) }}" class="btn btn-primary btn-sm" target="_blank"> --}}
                            <a href="{{ config('app.url') . '/' . $dynamicpage->slug }}" class="btn btn-primary btn-sm" target="_blank">
                                <i class="fa fa-eye"></i>
                                Preview
                            </a>
                            <a href="{{ route('admin.dynamic_page'). '?language=' . $currentLang->code }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="{{ route('admin.dynamic_page.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Language') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control lang" name="language_id">
                                        @foreach($langs as $lang)
                                            <option value="{{$lang->id}}" {{ $dynamicpage->language_id == $lang->id ? 'selected' : '' }} >{{$lang->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('language_id'))
                                        <p class="text-danger"> {{ $errors->first('language_id') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Category') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control lang" name="category_id">
                                        <option value="" selected> Select Category </option>
                                        @foreach($dynamicPageCategories as $dynamicPageCategory)
                                            <option value="{{$dynamicPageCategory->id}}" {{ $dynamicpage->category_id == $dynamicPageCategory->id ? 'selected' : '' }}>{{$dynamicPageCategory->title}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <p class="text-danger"> {{ $errors->first('category_id') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Title') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control titleinp" name="title" placeholder="{{ __('Title') }}" value="{{ $dynamicpage->title }}">
                                    @if ($errors->has('title'))
                                        <p class="text-danger"> {{ $errors->first('title') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Slug') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control sluginp" name="slug" placeholder="{{ __('Slug') }}" value="{{ $dynamicpage->slug }}" readonly>
                                    @if ($errors->has('slug'))
                                        <p class="text-danger"> {{ $errors->first('slug') }} </p>
                                    @endif
                                </div>
                                <div class="col-sm-1">
                                    <div class="fix-slug">
                                        <input type="checkbox" name="fix_slug" class="fix_slug" checked />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="meta_keywords" class="col-sm-2 control-label">{{ __('Meta Keywords') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" placeholder="{{ __('Meta Keywords') }}" value="{{ $dynamicpage->meta_keywords }}">
                                    @if ($errors->has('meta_keywords'))
                                        <p class="text-danger"> {{ $errors->first('meta_keywords') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="meta_description" class="col-sm-2 control-label">{{ __('Meta Description') }}</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="meta_description" placeholder="{{ __('Meta Description') }}"  rows="4">{{ $dynamicpage->meta_description }}</textarea>
                                    @if ($errors->has('meta_description'))
                                        <p class="text-danger"> {{ $errors->first('meta_description') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="value" class="col-sm-2 control-label">{{ __('Order') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="serial_number" placeholder="{{ __('Order') }}" value="{{ $dynamicpage->serial_number }}">
                                    @if ($errors->has('serial_number'))
                                        <p class="text-danger"> {{ $errors->first('serial_number') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="footer" class="col-sm-2 control-label">
                                    Footer
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="footer" id="footer">
                                        <option value="together" {{ $dynamicpage->footer == 'together' ? 'selected' : '' }}>Together</option>
                                        <option value="long_footer" {{ $dynamicpage->footer == 'long_footer' ? 'selected' : '' }}>Long Footer</option>
                                        <option value="short_footer" {{ $dynamicpage->footer == 'short_footer' ? 'selected' : '' }}>Short Footer</option>
                                    </select>
                                    @if ($errors->has('footer'))
                                        <p class="text-danger"> {{ $errors->first('footer') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-2 control-label">{{ __('Status') }}<span class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="status">
                                       <option value="0" {{ $dynamicpage->status == '0' ? 'selected' : '' }}>{{ __('Unpublish') }}</option>
                                       <option value="1" {{ $dynamicpage->status == '1' ? 'selected' : '' }}>{{ __('Publish') }}</option>
                                      </select>
                                    @if ($errors->has('status'))
                                        <p class="text-danger"> {{ $errors->first('status') }} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">{{ __('Modules') }}<span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control lang modules" name="module">
                                        <option selected disabled>Select Module</option>
                                        @foreach(\App\Helpers\Helper::modules() as $key => $module)
                                            <option value="{{$key}}">{{$module}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('module'))
                                        <p class="text-danger"> {{ $errors->first('module') }} </p>
                                    @endif
                                    <br>
                                    <button style="float:right;" class="btn btn-success" id="add_module">Add</button>
                                </div>
                            </div>

                            <div class="modules-container">
                                @if($dynamicpage->modules != null)
                                    @foreach ($dynamicpage->modules as $randomKey => $module)
                                        @foreach ($module as $keyModule => $moduleAttributes)
                                            @include('admin.modules.style_of_modules.' . $keyModule)
                                        @endforeach
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-2">
                                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                                <div class="col-sm-3 ml-0 pl-0">
                                    <button type="submit" class="btn btn-primary" name="update_continue" value="update_continue" style="width: 70%;padding: 6px 0px;">
                                        {{ __('Update And Continue') }}
                                    </button>
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

@section('script')
    <script src="{{ asset('assets/front/js/jquery-ui.js') }}"></script>
    <script>
        $('#add_module').on('click', function (e) {
            let valModule = $(".modules").val();
            e.preventDefault();
            jQuery.ajax({
                url: "{{ url('admin/dynamic-page/') }}" + '/' + valModule,
                method: 'get',
                success: function(data) {
                    $('.modules-container').append(data);
                    $(".summernote").summernote();
                }
            });
        });

        $(document).on("click",".icon-delete",function() {
            $(this).parent().parent().remove();
        });

        $(document).on("click",".minimize-module",function() {
            e.stopPropagation();
            $(this).parent().siblings('.card-body').slideToggle(500);
        });

        $(document).on("click", ".toggle-open-close-module", function () {
            $(this).siblings('.card-body').slideToggle(500);
        });

        $(".modules-container").sortable();
    </script>
@endsection
