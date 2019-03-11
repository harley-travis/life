@extends('layouts.master')

@section('content')

<div class="demo-card-wide card-spacing mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">{{ $entry->title }}</h2>
  </div>
  <div class="mdl-card__supporting-text">
  <div class="view-date">
        <span>{{ $entry->created_at->format('m/d/Y') }}</span>
    </div>
    {!! $entry->entry !!}
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a href="{{ route('entries.overview') }}" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
      Go Back
    </a>
    <a href="{{ route('entries.edit', ['id' => $entry->id ]) }}" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">
      Edit Entry
    </a>
  </div>
  <div class="mdl-card__menu">

  </div>
</div>



    <!-- <div class="cta-btns">
        <a href="{{ route('entries.overview') }}" class="btn btn-primary">Go Back</a>
        <a href="{{ route('entries.edit', ['id' => $entry->id ]) }}" class="btn btn-warning">Edit Entry</a>
    </div> -->

    <!-- <div class="topbar view-entry">
        <h1>{{ $entry->title }}</h1>
    </div>

    <div class="view-date">
        <span>{{ $entry->created_at->format('m/d/Y') }}</span>
    </div>

    <div class="view-entry padding-bottom">
        {!! $entry->entry !!}
        <div class="cta-btns">
            <a href="{{ route('entries.overview') }}" class="btn btn-primary">Go Back</a>
            <a href="{{ route('entries.edit', ['id' => $entry->id ]) }}" class="btn btn-warning">Edit Entry</a>
        </div>
    </div> -->


   
@endsection