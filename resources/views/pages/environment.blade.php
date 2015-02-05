@extends('app')

@section('content')

<div class="content-push-top">
    <div class="col-md-1"></div>
    <div class="col-md-11">
        <h1>
            Our Environment
            <small>Through Avitez bottle sales, our customers have saved…</small>
        </h1>
        <div class="environments">
            <div class="thumbnail">
                <img src="images/our-environment/oil-save.png" alt="" />
                <div class="caption">
                    <h3>200,000<small>litres</small></h3>
                </div>
            </div>
            
            <div class="thumbnail">
                <img src="images/our-environment/tree.png" alt="" />
                <div class="caption">
                    Equivalent to the effect of growing 
                    <h3>34,567<small>tree</small></h3>
                    seedlings for 10 years
                </div>
            </div>
      
            <div class="thumbnail">
                <img src="images/our-environment/car.png" alt="" />
                <div class="caption">
                    Equivalent to the greenhouse gas emitted from driving
                    <h3>1,256<small>kilometers</small></h3>
                </div>
            </div>

            <div class="thumbnail">
                <img src="images/our-environment/temp.png" alt="" />
                <div class="caption">
                    Avitez bottle production saves up to
                    <h3>60%</h3>
                    in Greenhouse Gas Emissions
                </div>
            </div>
        </div>
       
        <div class="giving-back">
            <div class="col-md-3">
                <img src="images/our-environment/avitez-cantara-logo.png" alt="Saved 34,567 of tree" />
            </div>
            <div class="col-md-9">
                <h4>Avitez and Centara Hotels &amp; Resorts are giving back</h4>
                <p>Centara Hotels &amp; Resorts, a leading hotel chain, will be serving Avitez water across all bars and restaurants in Thailand. Keeping in line with Avitez eco-friendly initiatives and messaging. Centara Group and Avitez have pledged to donate 5.50thb for every Avitez bottle sold for natural conservation programs in Thailand.</p>
            </div>
        </div>
    </div>
</div>

@endsection