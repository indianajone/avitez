@extends('app')

@section('content')

<div class="row">
	<div class="col-md-4">
		<img src="images/home/bottle.png" alt="Avitez's Bottle" />
	</div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<h1 class="xlarge">Asia's first all natural water bottle made100% from Plants</h1>
				<p>An evolutionary product for the visionary mindset. Created to meet the increasingly sophisticated demands of an ever-changing world.</p>
			</div>
		</div>
		<div class="thumbnails">
			<div class="col-md-4 dotted-line">
				<div class="thumbnail thumbnail-plain">
					<img src="images/home/temp-1.jpg" alt="" />
					<div class="caption">
						<h3>Water from Nature, Bottled by Nature</h3>
						<p>A natural water source, from its origins to its packaging, right through to the end of its existence.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 dotted-line">
				<div class="thumbnail thumbnail-plain">
					<img src="images/home/temp-2.jpg" alt="" />
					<div class="caption">
						<h3>An Eco-Friendly Bottle</h3>
						<p>Natural, organic bottles that are 100% recyclable and compostable.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail thumbnail-plain">
					<img src="images/home/temp-3.jpg" alt="" />
					<div class="caption">
						<h3>Premium Still Mineral Water</h3>
						<p>Water that cares for life and the world we live in.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h5><i class="logo-s"></i>Avitez and Centara Hotels &amp; Resorts are giving back... {!! link_to_route('env_path', 'read more') !!}</h5>
			</div>
		</div>
	</div>
</div>

@endsection
