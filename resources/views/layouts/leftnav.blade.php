<div class="col-sm-2 sidebar">

    <div class="profile-wrapper">
        <div class="profile-img-wrapper">
            <img src="https://i.imgur.com/vfh0Tl7.jpg" alt="" class="profile-img">
        </div>
        <div class="user-name-wrapper">
            <span class="user-name">{{ Auth::user()->name }}</span>
        </div>
    </div>  

    <div class="sidebar-nav">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('entries.overview') }}">View Entries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('entries.add') }}">Add Entry</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Import / Export</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
        </ul>
    </div>

    <div class="sidebar-footer">
        <ul>
            <li><i>V. 1.0</i></li>
            <li><a href="#">Terms of Use</a></li>
            <li><span class="copyright">&copy; <?php echo date('Y'); ?> MyJournal.com <br> All Rights Reserved</li>
        </ul>
    </div>

</div>