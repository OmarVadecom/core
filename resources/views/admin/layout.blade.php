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
        	<div class="container">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="lfm">File Manager</button>
                            </div>
                        </div>
                    </div>
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
          <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}} "></script>
         <script src="{{asset('/vendor/laravel-filemanager/js/dropzone.min.js')}}"></script>

         <script>
            $('#lfm').filemanager('image');
         </script>
       <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('lfm').addEventListener('click', (event) => {
            event.preventDefault();
            window.open('/laravel-filemanager', 'fm', 'width=1400,height=800');
            });
        });
        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
        </script>
        <script type="text/javascript">
            var mainbs = {!! $mainbs !!};
        </script>
     
    </body>
</html>
