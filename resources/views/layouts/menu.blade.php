<!-- need to remove -->
<li class="nav-item mx-2">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>الصفحه الرئيسية</p>
    </a>
</li>

<li class="nav-item mx-2">
    <a href="{{ route('blogs.index') }}" class="nav-link {{ Request::is('dashboard/blog/index') ? 'active' : '' }}">
        <i class="fa-solid fa-blog"></i>
        <p>المقالات</p>
    </a>
</li>
<li class="nav-item mx-2">
    <a href="{{ route('ad.index') }}" class="nav-link {{ Request::is('dashboard/blog/index') ? 'active' : '' }}">
        <i class="fa-solid fa-newspaper"></i>
        <p>الاعلانات</p>
    </a>
</li>
<li class="nav-item mx-2">
    <a href="{{ route('poll.index') }}" class="nav-link {{ Request::is('dashboard/blog/index') ? 'active' : '' }}">
        <i class="fa-solid fa-clipboard-question"></i>
        <p>الأسئله</p>
    </a>
</li>

<li class="nav-item mx-2">
    <a href="{{ route('message.index') }}" class="nav-link {{ Request::is('dashboard/message/index') ? 'active' : '' }}">
        <i class="fa-solid fa-message"></i>
        <p>الأسئله</p>
    </a>
</li>

<li class="nav-item mx-2">
    <a href="{{ route('social.index') }}" class="nav-link {{ Request::is('dashboard/social/index') ? 'active' : '' }}">
        <i class="fa-solid fa-s"></i>
        <p>سوشيل ميديا</p>
    </a>
</li>
