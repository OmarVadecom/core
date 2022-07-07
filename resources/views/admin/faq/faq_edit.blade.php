@extends('admin.layout')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('Faq') }} </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Faq') }}</li>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">{{ __('Add Faq ') }}</h3>
                            <div class="card-tools">
                                <a href="{{ route('faq.index')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-angle-double-left"></i> {{ __('Back') }}
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('faq.update', $faq->id) }}" method="POST">
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
                                            <label for="name" class="col-sm-2 control-label">{{ __('Question') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="question_en" placeholder="{{ __('question') }}" value="{{$faq->question_en}}" required>
                                            @if ($errors->has('question_en'))
                                                <p class="text-danger"> {{ $errors->first('question_en') }} </p>
                                            @endif
                                            <label for="answer_en" class="col-sm-2 control-label">{{ __('Answer') }}<span class="text-danger">*</span></label>
                                            <textarea id="editor1" class="form-control" name="answer_en" required>{{$faq->answer_en}} </textarea>
                                            @if ($errors->has('answer_en'))
                                                <p class="text-danger"> {{ $errors->first('answer_en') }} </p>
                                            @endif
                                        </div>
                                        <div class="col-sm-10 tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <label for="name" class="col-sm-2 control-label">{{ __('السؤال') }}<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="question_ar" placeholder="{{ __('السؤال') }}" value="{{$faq->question_ar}}" required>
                                            @if ($errors->has('question_ar'))
                                                <p class="text-danger"> {{ $errors->first('question_ar') }} </p>
                                            @endif
                                            <label for="answer_en" class="col-sm-2 control-label">{{ __('الاجابة') }}<span class="text-danger">*</span></label>
                                            <textarea id="editor2" class="form-control" name="answer_ar" required>{{$faq->answer_ar}} </textarea>
                                            @if ($errors->has('answer_ar'))
                                                <p class="text-danger"> {{ $errors->first('answer_ar') }} </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="answer_en" class="col-sm-2 control-label">Category<span class="text-danger">*</span></label>
                                    <select name="category_id" required >

                                    @foreach($faqs_categoris as $fcat)
                                            <option value="{{$fcat->id}}" {{ ( $fcat->id == $faq->category_id) ? 'selected' : '' }}> {{$fcat->name_en}} </option>

                                            <option value=""></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
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
      <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
     <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    </script>
@endsection
