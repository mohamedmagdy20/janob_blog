<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>الصفحه الرئيسية</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('blogs.index') }}" class="nav-link {{ Request::is('dashboard/blog/index') ? 'active' : '' }}">
        <i class="fa-solid fa-blog"></i>
        <p>المقالات</p>
    </a>
</li>
