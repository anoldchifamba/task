<!-- need to remove -->
<!-- <li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li> -->

<li class="nav-item">
    <a href="{{ route('tasks.index') }}" class="nav-link {{ Request::is('tasks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tasks</p>
    </a>
</li>



<!-- 
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li> -->

<!-- <li class="nav-item">
    <a href="{{ route('usertasks.index') }}" class="nav-link {{ Request::is('userTasks*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>User Tasks</p>
    </a>
</li> -->

