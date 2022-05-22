<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="section-content text-center mb-30">
        <div class="col-lg-6 col-md-8">
            <div class="about-thumb" style="width: 550px;height: 650px;text-align: center; line-height: 650px;">
                <img src="{{$module['text_img'] ? asset('assets/front/img/text_content_center/' . $module['text_img']) : asset('assets/admin/img/img-demo.jpg') }}" alt="Image">
            </div>
        </div>
        <h4 class="title">{{ $module['title'] }}</h4>
        <p>{{  $module['content'] }}</p>
        
    </div>
</div>
