<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @foreach ($menu->items as $menuItem)
                <li class="nav-item">
                    <a href="{{ $menuItem['url'] }}" class="nav-link {{ $menu->getActive($menuItem) }}">
                        <i class="nav-icon {{ $menuItem['icon-class'] }}"></i>
                        <p>
                            {{ $menuItem['name'] }}

                            @if($menuItem['children'])
                                <i class="right fas fa-angle-left"></i>
                            @endif
                        </p>
                    </a>
                    @if($menuItem['children'])
                        @foreach ($menuItem['children'] as $menuChildrenItem)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ $menuChildrenItem['url'] }}" class="nav-link {{ $menu->getActive($menuChildrenItem) }}">
                                        <i class="nav-icon {{ $menuChildrenItem['icon-class'] }}"></i>
                                        <p>
                                            {{ $menuChildrenItem['name'] }}
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
</div>
