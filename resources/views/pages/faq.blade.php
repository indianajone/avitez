@extends('app')

@section('content')

<div class="row">
    <div class="col-xs-4">
        <img src="images/home/bottle.png" alt="Avitez's Bottle" />
    </div>
    <div class="col-xs-8">
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
</div>

@endsection