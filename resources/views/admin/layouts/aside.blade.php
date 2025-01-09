<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="/">Desa Kota Bangun II</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin.profile') }}">KB2</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">MAIN MENU</li>
        <li class="{{ Request::is('admin/profile*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.profile') }}"><i class="fas fa-home"></i>
                <span>Profil Desa</span></a>
        </li>
        <li class="{{ Request::is('admin/event*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.event') }}"><i class="fas fa-calendar"></i>
                <span>Kegiatan Desa</span></a>
        </li>
        <li class="{{ Request::is('admin/potential*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.potential') }}"><i class="fas fa-th-large"></i>
                <span>Potensi Desa</span></a>
        </li>


    </ul>
</aside>
