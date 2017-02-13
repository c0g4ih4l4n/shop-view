
@extends ('main-test')

@section ('content')

    <div class="container">
    <div id="gototop"> </div>
    <header id="header">
    </header>
    <div class="demo-gallery">

        <ul id="lightgallery" class="list-unstyled row thumbnails">
            <li class="col-xs-6 col-sm-4 col-md-3 span3" data-responsive="{{ URL::asset('demo/img/1-375.jpg') }} 375, {{ URL::asset('demo/img/1-480.jpg') }} 480, {{ URL::asset('demo/img/1.jpg') }} 800" data-src="{{ URL::asset('demo/img/1-1600.jpg') }}" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
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


        <ul class="thumbnails">

            <li class="span3">
              <div class="thumbnail">
                <a class="zoomTool" href="" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>

                <a href="">
                    <img src="assets/img/a.jpg" alt="">
                </a>

                <div class="caption cntr">
                    <p>Manicure & Pedicure</p>
                    <p><strong> $22.00</strong></p>
                    <br class="clr">
                </div>
              </div>
            </li>

        </ul>
    </div>

    {{-- </div> --}}
@stop

