@extends('admin.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('faq Category') }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home"></i>
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">{{ __('faq') }}</li>
                        <li class="breadcrumb-item">{{ __('faq Categories') }}</li>
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
{{--                                        <form class="d-inline-block mr-3" action="{{route('back.bulk.delete')}}" method="get">--}}
{{--                                            <input type="hidden" value="" name="ids[]" id="bulk_delete">--}}
{{--                                            <input type="hidden" value="bcategory" name="table">--}}
{{--                                            <button class="btn btn-danger btn-sm">--}}
{{--                                                <i class="far fa-trash-alt"></i>--}}
{{--                                                {{__('Bulk Delete')}}--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
                                        <a
                                                href="{{ route('faq-category.create'). '?language=' . $currentLang->code }}"
                                                class="btn btn-primary btn-sm"
                                        >
                                            <i class="fas fa-plus"></i> {{ __('Add') }}
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered data_table">
                                <thead>
                                <tr>
                                    <th>
                                       #
                                    </th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($faqcategories as $key => $faqcategory)
                                    <tr id="bcategory-bulk-delete">
                                        <td>
                                            {{ ++$key  }}
                                        </td>
                                        <td>
                                            @if( request()->get('language') == 'ar')
                                            {{ $faqcategory->name_ar }}
                                            @else
                                                {{ $faqcategory->name_en }}
                                                @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('faq-category.edit', $faqcategory->id) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                                {{ __('Edit') }}
                                            </a>
                                            <form
                                                    action="{{ route('faq-category.destroy', $faqcategory->id ) }}"
                                                    class="d-inline-block"
                                                    id="deleteform"
                                                    method="post"
                                            >
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $faqcategory->id }}">
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
