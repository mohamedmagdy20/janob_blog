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
<<<<<<< HEAD
<li class="nav-item">
    <a href="{{ route('Ad.index') }}" class="nav-link {{ Request::is('dashboard/blog/index') ? 'active' : '' }}">
=======
<li class="nav-item mx-2">
    <a href="{{ route('ad.index') }}" class="nav-link {{ Request::is('dashboard/blog/index') ? 'active' : '' }}">
>>>>>>> 948cbe6b426111e6a0ac453caa655ef649e08247
        <i class="fa-solid fa-newspaper"></i>
        <p>الاعلانات</p>
    </a>
</li>
<li class="nav-item ">
    <a href="{{ route('poll.index') }}" class="nav-link {{ Request::is('dashboard/blog/index') ? 'active' : '' }}">
        <i class="fa-solid fa-clipboard-question"></i>
        <p>الأسئله</p>
    </a>
</li>
