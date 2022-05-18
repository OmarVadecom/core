@extends('front.layout')

@section('meta-keywords', "$seo->gallery_meta_key")
@section('meta-description', "$seo->gallery_meta_desc")
@section('content')
  @if(isset($galleries) && Auth::guard('admin')->check())  
                <div  style="position:fixed;top:0px;height: 25px;z-index:5555555; width:100%; border-bottom-left-radius: 10px; background-color:#cce5ff; border-bottom-right-radius: 10px;">
                    <a  target="_blank" style="text-decoration: underline; text-align: center; margin: auto; display: block; color: #ffffff; font-weight: 700; font-size: 14px;" href="{{route('admin.gallery.index')}}"><i class="far fa-edit"></i> Edit this Page</a>
                </div>
  @endif
 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-title-area" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-title-item text-center">
					<h2 class="title">{{ __('Gallery') }}</h2>
					
						<ul class="breadcrumb-nav">
							<li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
							<li class="active" aria-current="page">{{ __('Gallery') }}</li>
						</ul>
					
				</div> <!-- page title -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> 

<!--====== PAGE TITLE PART ENDS ======-->


  <!-- Gallery Area Start -->
  <div class="project-gallery" id="project-gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="project-gallery-filter d-flex justify-content-center">
            <ul class="project-gallery-menu d-inline-block">
              <li class="filter active" data-filter="all">All</li>
              @foreach ($gcategories as $gcategory)
                <li class="filter" data-filter=".cat-{{ $gcategory->id }}">{{ $gcategory->name }}</li>
              @endforeach
            </ul>
          </div>

          <div class="row project-gallery-item">
              @foreach ($galleries as $gallery)
              <div class="mix col-md-6 col-lg-4 gallery-item cat-{{ $gallery->category_id }}">
                <div class="gallery-item-content">
                  <div class="item-thumbnail">
                    <div class="img" style="background-image: url({{ asset('assets/front/img/gallery/'.$gallery->image) }})"></div>
                    <div class="content-overlay">
                      <div class="content">
                        <div class="links">
                          @if($gallery->video_link !== null)
                          <a class="img-popup image-preview  mfp-iframe" href="{{ $gallery->video_link }}">
                            <i class="fas fa-video"></i>
                          </a>
                          @else 
                          <a class="img-popup image-preview" href="{{ asset('assets/front/img/gallery/'.$gallery->image) }}">
                            <i class="far fa-image"></i>
                          </a>
                          @endif
                        </div>
                        <div class="info">
                          <p class="tag">{{ $gallery->gcategory->name }}</p>
                          <h4 class="project-name">{{ $gallery->title }}
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery Area End -->


@endsection
