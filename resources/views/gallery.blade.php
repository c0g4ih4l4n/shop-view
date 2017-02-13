<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/lightGallery.css') }}" />
    <script src="{{ URL::asset('demo/js/jquery.min.js') }}"></script>
</head>

<body>

    <div class="demo-gallery">

        <ul id="lightgallery" class="list-unstyled row">
            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{ URL::asset('demo/img/1-375.jpg') }} 375, {{ URL::asset('demo/img/1-480.jpg') }} 480, {{ URL::asset('demo/img/1.jpg') }} 800" data-src="{{ URL::asset('demo/img/1-1600.jpg') }}" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                <a href="">
                    <img src="{{ URL::asset('demo/img/thumb-1.jpg') }}" />
                </a>
            </li>

            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800" data-src="img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                <a href="">
                    <img src="{{ URL::asset('demo/img/thumb-2.jpg') }}" />
                </a>
            </li>

        </ul>

    </div>


    <!-- jQuery version must be >= 1.8.0; -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> --}}

    <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
    <script src="{{ URL::asset('demo/js/jquery.mousewheel.min.js') }}"></script>

{{--     <script src="{{ URL::asset('demo/js/lightgallery.min.js') }}"></script>

    <!-- lightgallery plugins -->
    <script src="{{ URL::asset('demo/js/lg-thumbnail.min.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-fullscreen.min.js') }}"></script>
    <script type="text/javascript">
        require(['./lightgallery.js'], function() {
            require(["./lg-zoom.js", "./lg-thumbnail.js"], function(){
                $("#lightgallery").lightGallery();
            });
        });

        $(document).ready(function() {
            $("#lightgallery").lightGallery();
        });
    </script> --}}

    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
    </script>
    <script src="{{ URL::asset('demo/js/picturefill.min.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lightgallery.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-fullscreen.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-thumbnail.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-video.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-autoplay.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-zoom.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-hash.js') }}"></script>
    <script src="{{ URL::asset('demo/js/lg-pager.js') }}"></script>
</body>
</html>