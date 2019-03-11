@extends('layouts.master')

@section('content')


            @if ($message = Session::get('success'))

            <div class="my-snack-wrapper">
                <div class="my-snack-container">
                    <div class="my-snack">
                    {{ $message }}
                    </div>
                </div>
            </div>

            @endif

            @if (count($errors) > 0)

            <div class="my-snack-wrapper">
                <div class="my-snack-container">
                    <div class="my-snack">
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                </div>
            </div>

            @endif
        </div>

<div class="demo-card-wide card-spacing mdl-shadow--2dp">
  <div class="mdl-card__title">
    
  <div class="mdl-textfield mdl-js-textfield">

  <div class="profile-header-container">
                <div class="profile-header-img">
                <img class="avatar-lg" src="/storage/avatars/{{ $user->avatar }}" />

                </div>
            </div>




    <h3>Upload avatar</h3>
  </div>

  </div>
  <div class="mdl-card__supporting-text settings-body">
  <form action="{{ route('settings.update_avatar') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp"><br />
          <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
         
      </div>
            
  </div>
  <div class="mdl-card__actions mdl-card--border">
    
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">
      Upload
    </button>
  </div>
  <div class="mdl-card__menu">

  </div>
</div>

</form> 
@endsection