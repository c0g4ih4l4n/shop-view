@extends ('main')

@section ('content')
	<h3>Product</h3>
	<ul class="thumbnails" id="lightgallery">

		<li class="span3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{ URL::asset('demo/img-product/product-1.jpg') }}" data-sub-html="<h4>Manicure & Pedicure</h4><p> $22.00</p>">
		  <div class="thumbnail">
			<a class="zoomTool" href="" title="Zoom"><span class="icon-search"></span> QUICK VIEW</a>

			<a href="" class="product">
				<img class="img-product" src="assets/img-product/product-1.jpg" alt="">
			</a>

			<div class="caption cntr">
				<p>Manicure & Pedicure</p>
				<p><strong> $22.00</strong></p>
				<br class="clr">
			</div>
		  </div>
		</li>

		<li class="span3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{ URL::asset('demo/img-product/product-2.jpg') }}" data-sub-html="<h4>Manicure & Pedicure</h4><p> $22.00</p>">
		  <div class="thumbnail">
			<a class="zoomTool" href="" title="Zoom"><span class="icon-search"></span> QUICK VIEW</a>

			<a href="">
				<img src="assets/img-product/product-2.jpg" alt="">
			</a>

			<div class="caption cntr">
				<p>Manicure & Pedicure</p>
				<p><strong> $22.00</strong></p>
				<br class="clr">
			</div>
		  </div>
		</li>

		<li class="span3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{ URL::asset('demo/img-product/product-3.jpg') }}" data-sub-html="<h4>Manicure & Pedicure</h4><p> $22.00</p>">
		  <div class="thumbnail">
			<a class="zoomTool" href="" title="Zoom"><span class="icon-search"></span> QUICK VIEW</a>

			<a href="">
				<img src="assets/img-product/product-3.jpg" alt="">
			</a>

			<div class="caption cntr">
				<p>Manicure & Pedicure</p>
				<p><strong> $22.00</strong></p>
				<br class="clr">
			</div>
		  </div>
		</li>

		<li class="span3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{ URL::asset('demo/img-product/product-4.jpg') }}" data-sub-html="<h4>Manicure & Pedicure</h4><p> $22.00</p>">
		  <div class="thumbnail">
			<a class="zoomTool" href="" title="Zoom"><span class="icon-search"></span> QUICK VIEW</a>

			<a href="">
				<img src="assets/img-product/product-4.jpg" alt="">
			</a>

			<div class="caption cntr">
				<p>Manicure & Pedicure</p>
				<p><strong> $22.00</strong></p>
				<br class="clr">
			</div>
		  </div>
		</li>

		<li class="span3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{ URL::asset('demo/img-product/product-4.jpg') }}" data-sub-html="<h4>Manicure & Pedicure</h4><p> $22.00</p>">
		  <div class="thumbnail">
			<a class="zoomTool" href="" title="Zoom"><span class="icon-search"></span> QUICK VIEW</a>

			<a href="">
				<img src="assets/img-product/product-4.jpg" alt="">
			</a>

			<div class="caption cntr">
				<p>Manicure & Pedicure</p>
				<p><strong> $22.00</strong></p>
				<br class="clr">
			</div>
		  </div>
		</li>

		<li class="span3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{ URL::asset('demo/img-product/product-4.jpg') }}" data-sub-html="<h4>Manicure & Pedicure</h4><p> $22.00</p>">
		  <div class="thumbnail">
			<a class="zoomTool" href="" title="Zoom"><span class="icon-search"></span> QUICK VIEW</a>

			<a href="">
				<img src="assets/img-product/product-4.jpg" alt="">
			</a>

			<div class="caption cntr">
				<p>Manicure & Pedicure</p>
				<p><strong> $22.00</strong></p>
				<br class="clr">
			</div>
		  </div>
		</li>

	</ul>

<!--
Clients
-->
@stop