<aside class="asideMenu">
    <ul class=" list-unstyled ">
        <li>
            <a class="asideMenuLink" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge fa-lg" style="color: #FFf;"></i>
                {{ __('Dashboard') }}
            </a>
        </li>
        <li>
            <a class="asideMenuLink" href="{{ route('admin.projects.index')}}">
                <i class="fa-solid fa-folder-tree fa-lg" style="color: #fff;"></i>
                {{ __('Project') }}
            </a>
        </li>
    </ul>
</aside>