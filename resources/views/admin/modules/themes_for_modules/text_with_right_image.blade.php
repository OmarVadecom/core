<div class="col-sm-12">
    <section class="about-section section-gap" style="margin-bottom: 70px">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="about-text-block pl-lg-5 mt-md-gap-60">
                        <div class="section-title mb-40">
                            <h2 class="title">{{ isset($module['heading']) ? $module['heading'] : '' }}</h2>
                        </div>
                        <p>{{  isset($module['paragraph']) ? $module['paragraph'] : '' }}</p>
                    </div>
                    @if(isset($module))
                        @if(isset($module['red_button']) || isset($module['yellow_button']))
                            <div class="buttons pl-lg-5 d-flex mt-4">
                                @if(isset($module['red_button']) && $module['red_button']['url'] != null && $module['red_button']['text'] != null)
                                    <div class="red-button mr-2">
                                        <a
                                            href="{{ $module['red_button']['url'] }}"
                                            class="red-btn-module btn-module"
                                        >{{ $module['red_button']['text'] }}</a>
                                    </div>
                                @endif
                                @if(isset($module['yellow_button']) && $module['yellow_button']['url'] != null && $module['yellow_button']['text'] != null)
                                    <div class="yellow-button">
                                        <a
                                            href="{{ $module['yellow_button']['url'] }}"
                                            class="yellow-btn-module btn-module"
                                        >{{ $module['yellow_button']['text'] }}</a>
                                    </div>
                                @endif
                            </div>
                        @endif
                    @endif
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="about-thumb about-thumb-right" style="width: 550px;height: 650px; text-align: center; line-height: 650px;">
                        <img
                            src="{{ isset($module['image']) ? asset('assets/front/img/text_with_right_image/' . $module['image']) : asset('assets/admin/img/img-demo.jpg') }}"
                            alt="Image"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
