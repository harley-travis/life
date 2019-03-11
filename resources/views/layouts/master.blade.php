@include('layouts.header')

    <!-- header -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
                    </div>
                </div>
            </div>
        </header>

        <!-- navbar -->
        
        <div class="mdl-layout__drawer">
            
        <header class="demo-drawer-header">  
            <!-- IMAGE UPLOAD AND AVATAR https://www.5balloons.info/upload-profile-picture-avatar-laravel-5-authentication/ -->         
            <span class="avatar" style="background-image:url('/storage/avatars/{{ $user->avatar }}')" /></span>
          <div class="demo-avatar-dropdown">
            <span>{{ Auth::user()->email }}</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item"><a class="mdl-navigation__link" href="{{ route('settings.overview') }}">Settings</a></li>
              <li class="mdl-menu__item"><a class="mdl-navigation__link" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </div>
        </header>
            
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="{{ route('entries.overview') }}">All Entries</a>
                <a class="mdl-navigation__link" href="{{ route('entries.add') }}">New Entry</a>
                
            </nav>
            <div class="sidebar-footer">
                <ul>
                    <li><i>V. 1.0</i></li>
                    <!-- <li><a href="#">Terms of Use</a></li> -->
                    <li><span class="copyright">&copy; <?php echo date('Y'); ?> Journal.WhiteJuly.com <br> All Rights Reserved</li>
                </ul>
            </div>
        </div>
        
        <!-- main content -->
        <main class="mdl-layout__content">
        <div class="page-content">
            @yield('content')

            </div>

            
        </main>
    </div>

    <!-- button -->
    <div class="add-btn">
        <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="{{ route('entries.add') }}">
            <i class="material-icons">add</i>
        </a>
    </div>

    <!-- <a href="{{ route('entries.add') }}" class="btn btn-primary">Add Entry</a> -->

@include('layouts.footer')