@extends('app')

@section('content')

<div class="col-md-4">
    <img src="images/home/bottle.png" alt="Avitez's Bottle" />
</div>
<div class="col-md-8">
    <div class="row">
        <h1>FAQs</h1>
        <div class="panel-group" id="faqs" role="tablist" aria-multiselectable="false">
            @foreach ($faqs as $faq)

                @include('pages.partials.faq', [
                    'id' => $faq->id, 
                    'title' => $faq->title, 
                    'body' => $faq->body
                ])

            @endforeach
        </div>
    </div>
</div>

@endsection