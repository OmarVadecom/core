<div class="card">
@php
$randNumModule = \Illuminate\Support\Str::random(10);
@endphp


  <div class="card-header toggle-open-close-module">
    <i class="fas fa-times icon-delete"></i>
    Thanks Messsage
    <i class="minimize-module fas fa-chevron-down"></i>
  </div>

  <div class="card-body" style="display: none">
    <p>
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">عربي</a>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">English</button>
    </p>
    @if(\Illuminate\Support\Str::contains(\Illuminate\Support\Facades\Route::getCurrentRoute()->getActionName(), 'edit'))
   
      <div class="col-md-12">
              <div class="form-group collapse multi-collapse" id="multiCollapseExample2">
              <label for="title">Thanks Messsage</label>
              <textarea type="text" name="mod[{{ $randNumModule }}][Thanksmessage][content]" class="form-control">{{  $moduleAttributes['content'] }}</textarea>
            </div>
      </div>

      <div class="col-md-12">
        <div class="form-group collapse multi-collapse" id="multiCollapseExample1">
        <label for="title">رساله شكر</label>
        <textarea type="text" name="mod[{{ $randNumModule }}][Thanksmessage][ar_content]" class="form-control">{{  $moduleAttributes['ar_content'] }}</textarea>
      </div>
</div>
    @else
      <div class="col-md-12">
        <div class="form-group collapse multi-collapse" id="multiCollapseExample2">
        <label for="title">Thanks Messsage</label>
        <textarea type="text" name="mod[{{ $randNumModule }}][Thanksmessage][content]" class="form-control"></textarea>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group collapse multi-collapse" id="multiCollapseExample1">
        <label for="title">رساله شكر</label>
        <textarea type="text" name="mod[{{ $randNumModule }}][Thanksmessage][ar_content]" class="form-control"></textarea>
        </div>
      </div>
    @endif
  </div>
</div>
<div class="clearfix"></div>

