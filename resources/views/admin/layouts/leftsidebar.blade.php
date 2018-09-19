
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="true" data-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item {{ Request::is('admin') ? 'm-menu__item--active' : null }}" aria-haspopup="true">
                <a href="/admin" class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-home"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Dashboard
                            </span>
                    </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__item  m-menu__item" aria-haspopup="true" data-menu-submenu-toggle="hover">
                <a href="/admin/points" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon fa fa-paypal"></i>
                    <span class="m-menu__link-text">
                        Points
                    </span>
                </a>
            </li>
            <li class="m-menu__item  m-menu__item" aria-haspopup="true" data-menu-submenu-toggle="hover">
                <a href="/admin/users" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon fa fa-users"></i>
                    <span class="m-menu__link-text">
                                        Users
                                    </span>
                </a>
            </li>
            <li class="m-menu__item  m-menu__item" aria-haspopup="true">
                <a href="/logout" class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-sign-out"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                Logout
                            </span>
                    </span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->