<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Boilerplate Multimedia HTML5 Framework</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="stylesheet" href="assets/css/main.css"/>

<!--JQUERY CODES GO HERE -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--[if lt IE 9]><script src="assets/js/modernizr.js"></script><![endif]-->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>



</head>
<body>
<a id="skip" href="#main">Skip to Main Content</a>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div class="container">
<!-- HEADER -->
<header role="banner" class="box">
    <h1>This is a header</h1>
</header>


<!-- MAIN FLEX NAV -->
<nav class="applePie" role="navigation" aria-labelledby="nav">
<div class="menubtn">Menu Button</div>
<ul id="nav">
	<li><a href="#">Fruit Pies</a>
		<ul>
			<li><a href="#">Spring</a>
				<ul>
					<li><a href="#">Exotic Pies</a>
						<ul>
							<li><a href="#">Pineapple Pie</a></li>
						</ul>
					</li>
					<li><a href="#">Blueberry Pie</a></li>
				</ul>
			</li>
			<li><a href="#">Summer</a>
				<ul>
					<li><a href="#">Peach Pie</a></li>
					<li><a href="#">Strawberry Pie</a></li>
				</ul>
			</li>
			<li><a href="#">Fall</a>
				<ul>
					<li><a href="#">Pumpkin Pie</a></li>
					<li><a href="#">Apple Pie</a></li>
				</ul>
			</li>
			<li><a href="#">Winter</a>
				<ul>
					<li><a href="#">Pear Pie</a></li>
					<li><a href="#">Persimmons Pie</a></li>
				</ul>
			</li>

		</ul>
	</li>

	<li><a href="#">Dessert Pies</a>
		<ul>
			<li><a href="#">Pumpkin Pie</a>
				<ul>
					<li><a href="#">Maple Pumpkin Pie</a></li>
					<li><a href="#">Cocoa Pumpkin Pie</a></li>
				</ul>
			</li>
			<li><a href="#">Peanut Butter Pie</a></li>
			<li><a href="#">Whoopie Pies</a></li>

		</ul>
	</li>

	<li><a href="#">Hearty Pie</a>
		<ul>
			<li><a href="#">Sheppards Pie</a></li>
			<li><a href="#">Chicken Pot Pie</a></li>
			<li><a href="#">Mushroom Pie</a></li>
			<li><a href="#">Spinach Pie</a></li>
		</ul>
	</li>


</ul>
</nav>



<!-- CONTENT STARTS HERE -->
<section role="main" id="main" class="clearfix">
<article role="article">
	<div class="single box clearfix">
		<p>This is .single</p>
		<div class="embed_media">
			<iframe src="http://player.vimeo.com/video/67621971" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
	
	</div>

<div class="clearfix">
	<div class="half box">
		<p>This is .half</p>
		<!-- TABLE -->
		<table summary="This is a table" id="table">
		<thead>
		  <tr>
		   <th></th>
		   <th id="ColHdr2">xxxxx</th>
		   <th id="ColHdr3">xxxxx</th>
		   <th id="ColHdr4">xxxxx</th>
		  </tr>
		 </thead>
		 <tbody>
		  <tr>
		   <th id="RowHdr2">xxxxx</th>
		   <td headers="ColHdr2 RowHdr2">xxxxx</td>
		   <td headers="ColHdr3 RowHdr2">xxxxx</td>
		   <td headers="ColHdr4 RowHdr2">xxxxx</td>
		  </tr>
		  <tr>
		   <th id="RowHdr3">xxxxx</th>
		   <td headers="ColHdr2 RowHdr3">xxxxx</td>
		   <td headers="ColHdr3 RowHdr3">xxxxx</td>
		   <td headers="ColHdr4 RowHdr3">xxxxx</td>
		  </tr>
		 </tbody>
		</table>
	</div>
	<div class="half box">
		<p>This is .half</p>

		<dl title="Drink types" class="box clearfix">
		  <dt>Coffee</dt>
		    <dd>Black hot drink</dd>
		  <dt>Milk</dt>
		    <dd>White cold drink</dd>
		</dl>

		<div class="embed_media">
			<iframe src="http://player.vimeo.com/video/67621971" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
	</div>
</div>

<div class="clearfix">
	<div class="two-thirds box">
		<p>This is .two-thirds</p>
	</div>
	<div class="one-third box">
		<p >This is .one-third</p>
		<figure>
			<img src="assets/images/test.jpg" alt="This is a Picture"/>
			<figcaption>A cheeky macaque, Lower Kintaganban River, Borneo. Original by <a href="http://www.flickr.com/photos/rclark/">Richard Clark</a>
			</figcaption>
		</figure>
	</div>
</div>

<div class="clearfix">
	<div class="quarter box">
		<p>This is .quarter</p>
		<ol>
			<li>Ordered List Item</li>
			<li>Ordered List Item</li>
			<li>Ordered List Item</li>
			<li>Ordered List Item</li>
		</ol>
	</div>
	<div class="three-quarter box">
		<p>This is .three-quarter</p>
		<ul>
			<li>Unordered List Item</li>
			<li>Unordered List Item</li>
			<li>Unordered List Item</li>
			<li>Unordered List Item</li>
		</ul>
		<div class="embed_media">
			<iframe src="http://player.vimeo.com/video/67621971" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
	</div>
</div>
<div class="clearfix">
	<div class="quarter box">
		<p>This is .quarter</p>
	</div>
	<div class="quarter box">
		<p>This is .quarter</p>
	</div>
	<div class="quarter box">
		<p>This is .quarter</p>
	</div>
	<div class="quarter box">
		<p>This is .quarter</p>
	</div>
</div>
<div class="clearfix">
	<div class="fifth box">
		<p>This is .fifth</p>
	</div>
	<div class="fifth box">
		<p>This is .fifth</p>
	</div>
	<div class="fifth box">
		<p>This is .fifth</p>
	</div>
	<div class="fifth box">
		<p>This is .fifth</p>
	</div>
	<div class="fifth box">
		<p>This is .fifth</p>
	</div>
</div>
</article>
</section>


<!-- FOOTER -->
<footer role="contentinfo" class="clearfix">
<ul id="footer-navigation" class="box">
	<li><a href="#">This is a link</a></li>
	<li><a href="#">This is a link</a></li>
	<li><a href="#">This is a link</a></li>
</ul>
</footer>

</div><!--END OF CONTAINER-->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
     (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
     g.src='http://www.google-analytics.com/ga.js';
     s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
