@extends('admin.layout')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Faq Category') }} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Faq') }}</li>
                        <li class="breadcrumb-item">{{ __('Category') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('faq-category.update' ,  $faq_category->id ) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label class="col-sm-2 control-label">{{ __('Language') }}<span class="text-danger">*</span></label>
                                    </div>
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">English</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">عربى</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent" >
                                        <div class=" col-sm-10 tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <label for="name" class="col-sm-2 control-label">{{ __('Name') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name_en" placeholder="{{ __('Name') }}" value="{{ $faq_category->name_en }}" required>
                                            @if ($errors->has('name_en'))
                                                <p class="text-danger"> {{ $errors->first('name_en') }} </p>
                                            @endif

                                        </div>
                                        <div class="col-sm-10 tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <label for="name" class="col-sm-2 control-label">{{ __('الاسم') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name_ar" placeholder="{{ __('الاسم') }}" value="{{ $faq_category->name_ar }}" required>
                                            @if ($errors->has('name_ar'))
                                                <p class="text-danger"> {{ $errors->first('name_ar') }} </p>
                                            @endif
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
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>

@endsection