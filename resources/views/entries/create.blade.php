@extends('layouts.master')

@section('content')

<form action="{{ route('entries.add') }}" method="post">

<div class="demo-card-wide card-spacing mdl-shadow--2dp">
  <div class="mdl-card__title">
    
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="title" name="title" placeholder="entry title">
    <label class="mdl-textfield__label" for="title">Title</label>
  </div>

  </div>
  <div class="mdl-card__supporting-text">
        <label for="entry"></label>
        <textarea class="form-control" id="entry" name="entry" rows="8"></textarea>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a href="{{ route('entries.overview') }}" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
      Go Back
    </a>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">
      Save
    </button>
  </div>
  <div class="mdl-card__menu">

  </div>
</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">


    <!-- <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="entry title">
    </div>

    <div class="form-group">
        <label for="entry">Entry</label>
        <textarea class="form-control" id="entry" name="entry" rows="8"></textarea>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-success">Save</button> -->

</form>
   
@endsection