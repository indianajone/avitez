<div class="panel panel-plain">
    <div class="panel-heading" role="tab" id="faq-{{ $id }}">
        <h3 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#faqs" href="#collapse-{{ $id }}" aria-expanded="true" aria-controls="collapse-{{ $id }}">{{ $title }}</a>
        </h3>
    </div>
    <div id="collapse-{{ $id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-{{ $id }}">
        <div class="panel-body">{!! $body !!}</div>
    </div>
</div>