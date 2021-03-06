@extends('student_pannel.student_master');
@section('component')
<div class="row" style="margin-top:50px;">
  <form action="/attendance-report" method="post" role="form">
  {{ csrf_field() }}

<div class="form-group row">
  <div class="form-group">
      <label for="" class="col-md-8 form-control-label">{{ __('Select Subject') }}</label>
      <div class="col-md-8">
        <select name="subject_id" id="subject" class="form-control input-lg" required="required">
          <option value="0" disable="true" selected="true">Select Subject</option>
          @foreach($subjects as $subject)
          <option value="{{$subject->id}}" disable="true" selected="true">{{$subject->subject_name}}</option>
          @endforeach
        </select>
      </div>
  </div>
</div>

<div class="form-group row">
  <div class="form-group">
      <label for="" class="col-md-8 form-control-label">{{ __('Select Month') }}</label>
      <div class="col-md-8">
        <select name="month" id="month" class="form-control input-lg" required="required">
          <option value="" disable="true" selected="true">Month</option>
            <option value="1" disable="true" selected="true">January</option>
            <option value="2" disable="true" selected="true">February</option>
            <option value="3" disable="true" selected="true">March</option>
            <option value="4" disable="true" selected="true">April</option>
            <option value="5" disable="true" selected="true">May</option>
            <option value="6" disable="true" selected="true">June</option>
            <option value="7" disable="true" selected="true">July</option>
            <option value="8" disable="true" selected="true">August</option>
            <option value="9" disable="true" selected="true">September</option>
            <option value="10" disable="true" selected="true">October</option>
            <option value="11" disable="true" selected="true">November</option>
            <option value="12" disable="true" selected="true">December</option>
        </select>
      </div>
  </div>
</div>
<div class="form-group row">
  <div class="form-group">
      <label for="" class="col-md-8 form-control-label">{{ __('Select Year') }}</label>
      <div class="col-md-8">
        <select name="year" id="year" class="form-control input-lg" required="required">
          <option value="2018" disable="true" selected="true">2018</option>
          <option value="2019" disable="true" selected="true">2019</option>
            <option value="" disable="true" selected="true"></option>
        </select>
      </div>
  </div>
</div>
<div class="col-md-8 col-md-offset-4">
   <div class="form-group mb-0">
     <button type="submit" name="submit" class="btn btn-primary">
         {{ __('Show Report') }}
     </button>
 </div>
 </div>
</form>
@endsection
