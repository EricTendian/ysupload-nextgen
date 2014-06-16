<div class="row">
@for ($i = 0; $i < 50; $i++)
    @if ($i % 4 === 0 && $i !== 0)
</div>
<br>
<div class="row">
    @endif
    <div class="col-md-3">
        <img src="http://baconmockup.com/200/200" class="img-responsive">
    </div>
@endfor
</div>