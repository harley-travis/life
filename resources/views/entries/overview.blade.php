@extends('layouts.master')

@section('content')

@if(Session::has('info'))

    <div class="my-snack-wrapper">
        <div class="my-snack-container">
            <div class="my-snack">
                {{ Session::get('info') }}
            </div>
        </div>
    </div>

@endif

    @if( isset($entries) )

        @forelse($entries as $entry)
        
            <div class="demo-card-wide overview-card card-spacing mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text"><a href="{{ route('entries.view', ['id' => $entry->id ]) }}" class="overview-title"> {{ $entry->title }} </a></h2>
                </div>
                <div class="mdl-card__supporting-text">
                {!! str_limit($entry->entry, 200) !!}
                </div>
                <!-- <div>
                {{ $entry->created_at->format('m/d/Y') }}
                </div> -->
            </div>
            
        @empty

            <span class="empty">No Entries Recorded! Start <a href="{{ route('entries.add') }}">Here</a>.</span>

        @endforelse
    
        <div class="pagination-wrapper">
            {{ $entries->links() }}
        </div>
    
    @endif

@endsection