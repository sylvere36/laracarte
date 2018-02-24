@extends('layouts.default', ["titre" => "About"])

@section('content')
	<div class="container">
		<h2>What is Laracarte?</h2>
		<p>Laracarte is a clone app of <a href="https://laramap.com/" target="_blank">Laramap.com.</a></p>
		<div class="row">
			<div class="col-md-6">
				<div class="alert alert-warning">
					<p><i class="fa fa-exclamation-triangle"></i> This app has been built by <a href="https://twitter.com/etsmo" target="_blank">@etsmo</a> for learning purposes.</p>
				</div>
			</div>
		</div>
		<p>Feel free to help to improve the <a href="https://github.com/sylvere36/laracarte">source code.</a></p>
	</div>
	<hr>

	<div class="container">
		<h2>What is Laramap?</h2>
		<p>Laramap is the website by which Laracarte was inspired :).</p>
		<p>More info <a href="">here.</a></p>
	</div>
	<hr>

	<div class="container">
		<h2>Which tools and services are used in Laracarte?</h2>
		<p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>

		<ul>
		    <li>Laravel</li>
		    <li>Bootstrap</li>
		    <li>Amazon S3</li>
		    <li>Mandrill</li>
		    <li>Google Maps</li>
		    <li>Gravatar</li>
		    <li>Antony Martin's Geolocation Package</li>
		    <li>Michel Fortin's Markdown Parser Package</li>
		    <li>Heroku</li>
		</ul>
	</div>
@endsection