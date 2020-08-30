<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('home')?'active':'' }}" href="{{ route('home') }}">
        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
    </a>
</li>
<li class="nav-item {{ request()->routeIs('news')?'active':'' }}">
    <a class="nav-link" href="{{ route('news') }}">Список новостей</a>
</li>
<li class="nav-item {{ request()->routeIs('category_list')?'active':'' }}">
    <a class="nav-link" href="{{ route('category_list') }}">Список категорий новостей</a>
</li>
<li class="nav-item {{ request()->routeIs('admin.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('admin.index') }}">Админ панель</a>
</li>
