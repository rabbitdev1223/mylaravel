<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('index')}}" target="_blank"><i data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('/starter-kit') }}" href="javascript:void(0)"><i data-feather="anchor"></i><span>Starter kit</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('/starter-kit') }};">
                            <li>
                                <a class="submenu-title {{ in_array(Route::currentRouteName(), ['index','layout-dark']) ? 'active' : '' }}" href="javascript:void(0)">
                                    Color Version<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['index','layout-dark']) ? 'block' : 'none' }};">
                                    <li><a href="{{route('index')}}"  class="{{routeActive('index')}}">Layout Light</a></li>
                                    <li><a href="{{route('layout-dark')}}" class="{{routeActive('layout-dark')}}">Layout Dark</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title {{ in_array(Route::currentRouteName(), ['boxed','layout-rtl']) ? 'active' : '' }}" href="javascript:void(0)">
                                    Page layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['boxed','layout-rtl', 'default-layout', 'compact-layout', 'modern-layout']) ? 'block' : 'none' }};">
                                    <li><a href="{{route('boxed')}}" class="{{routeActive('boxed')}}">Boxed</a></li>
                                    <li><a href="{{route('layout-rtl')}}" class="{{routeActive('layout-rtl')}}">RTL </a></li>
                                    <li><a href="{{route('default-layout')}}" class="{{routeActive('default-layout')}}">Default Layout</a></li>
                                    <li><a href="{{route('compact-layout')}}" class="{{routeActive('compact-layout')}}">Compact Layout</a></li>
                                    <li><a href="{{route('modern-layout')}}" class="{{routeActive('modern-layout')}}">Modern Layout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title {{ in_array(Route::currentRouteName(), ['footer-light','footer-dark', 'footer-fixed']) ? 'active' : '' }}" href="javascript:void(0)">
                                    Footers<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['footer-light','footer-dark', 'footer-fixed']) ? 'block' : 'none' }};">
                                    <li><a href="{{ route('footer-light') }}" class="{{routeActive('footer-light')}}">Footer Light</a></li>
                                    <li><a href="{{ route('footer-dark') }}" class="footer-dark-click {{routeActive('footer-dark')}}">Footer Dark</a></li>
                                    <li><a href="{{ route('footer-fixed') }}" class="{{routeActive('footer-fixed')}}">Footer Fixed</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>