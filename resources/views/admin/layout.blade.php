<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">

        <title>{{ $setting->website_title }}</title>

        <link rel="shortcut icon" href="{{  asset('assets/front/img/'.$setting->fav_icon) }}" type="image/png">

        @includeif('admin.partials.styles')

        @if($currentLang->direction == 'rtl' )
            <style>
                .content-wrapper .form-group {
                    direction: rtl;
                    text-align: right
                }

                label {
                    display: block;
                    text-align: right
                }

                button[type=submit] {
                    display: block;
                    text-align: right
                }

                .custom-file-label::after {
                    right: auto;
                    left: 0px;
                }

                input[type=email],
                input[name=from_email] {
                    direction: ltr;
                    text-align: left
                }

                .cm-s-monokai.CodeMirror {
                    direction: ltr;
                    text-align: left
                }

                div.dataTables_wrapper div.dataTables_filter label {
                    text-align: right
                }
            </style>
        @endif

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    </head>

    <body
        @if(Session::has('notification')) data-notification-message='{{ json_encode(Session::get('notification')) }} @endif'
        class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed"
        {{ Session::has('notification') ? 'data-notification' : '' }}
    >

        <div class="wrapper">
            @include('admin.partials.top-navbar')

            @include('admin.partials.side-navbar')

            <div class="content-wrapper">
        
        @if(Request::is('*/edit/*') || Request::is('*/add') )
        	{{-- <div class="container">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="lfm">File Manager</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <input type="text" id="profile-photo">
            <button onclick="filemanager.selectFile('profile-photo')">Choose</button> --}}
            <div class="input-group">
                <input type="text" id="image_label" class="form-control" name="image"
                       aria-label="Image" aria-describedby="button-image">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                </div>
            </div>
        @endif
           
            @yield('content')
            

            @include('admin.partials.footer')
        </div>
        <input type="hidden" id="main_url" value="{{ route('front.index') }}">

        @php
            $mainbs                     = [];
            $mainbs['slider_overlay']   = $commonsetting->slider_overlay;
            $mainbs                     = json_encode($mainbs);
        @endphp
       
        @includeif('admin.partials.scripts')
        <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
        
        <script>
        document.addEventListener("DOMContentLoaded", function() {

document.getElementById('button-image').addEventListener('click', (event) => {
  event.preventDefault();

  window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
});
});

// set file link
function fmSetLink($url) {
document.getElementById('image_label').value = $url;
}     
        </script>     
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
