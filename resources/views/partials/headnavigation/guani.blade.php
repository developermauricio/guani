<nav
    class="header-navbar background-navigation-header-black navbar navbar-expand-lg align-items-center fixed-top navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                                                                                   data-feather="menu"></i></a>
                </li>
            </ul>
            {{--            <ul class="nav navbar-nav bookmark-icons">--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="guani-email.html"--}}
            {{--                                                          data-toggle="tooltip" data-placement="top"--}}
            {{--                                                          title="Email"><i class="ficon"--}}
            {{--                                                                           data-feather="mail"></i></a></li>--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="guani-chat.html"--}}
            {{--                                                          data-toggle="tooltip" data-placement="top" title="Chat"><i--}}
            {{--                            class="ficon" data-feather="message-square"></i></a></li>--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="guani-calendar.html"--}}
            {{--                                                          data-toggle="tooltip" data-placement="top"--}}
            {{--                                                          title="Calendar"><i class="ficon"--}}
            {{--                                                                              data-feather="calendar"></i></a></li>--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="guani-todo.html"--}}
            {{--                                                          data-toggle="tooltip" data-placement="top" title="Todo"><i--}}
            {{--                            class="ficon" data-feather="check-square"></i></a></li>--}}
            {{--            </ul>--}}
            {{--            <ul class="nav navbar-nav">--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i--}}
            {{--                            class="ficon text-warning" data-feather="star"></i></a>--}}
            {{--                    <div class="bookmark-input search-input">--}}
            {{--                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>--}}
            {{--                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"--}}
            {{--                               data-search="search">--}}
            {{--                        <ul class="search-list search-list-bookmark"></ul>--}}
            {{--                    </div>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            {{--       SELECT DE IDIOMAS     --}}
            {{--            <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"--}}
            {{--                                                               href="javascript:void(0);" data-toggle="dropdown"--}}
            {{--                                                               aria-haspopup="true" aria-expanded="false"><i--}}
            {{--                        class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>--}}
            {{--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a--}}
            {{--                        class="dropdown-item" href="javascript:void(0);" data-language="en"><i--}}
            {{--                            class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item"--}}
            {{--                                                                              href="javascript:void(0);"--}}
            {{--                                                                              data-language="fr"><i--}}
            {{--                            class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item"--}}
            {{--                                                                             href="javascript:void(0);"--}}
            {{--                                                                             data-language="de"><i--}}
            {{--                            class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"--}}
            {{--                                                                             href="javascript:void(0);"--}}
            {{--                                                                             data-language="pt"><i--}}
            {{--                            class="flag-icon flag-icon-pt"></i> Portuguese</a></div>--}}
            {{--            </li>--}}
            <li class="nav-item d-none d-lg-block"><a class="nav-link icon-navigation-header-black nav-link-style"><i
                        class="ficon"
                        data-feather="moon"></i></a>
            </li>
            {{--          BUSCADOR  --}}
            {{--            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"--}}
            {{--                                                                                   data-feather="search"></i></a>--}}
            {{--                <div class="search-input">--}}
            {{--                    <div class="search-input-icon"><i data-feather="search"></i></div>--}}
            {{--                    <input class="form-control input" type="text" placeholder="Buscar..." tabindex="-1"--}}
            {{--                           data-search="search">--}}
            {{--                    <div class="search-input-close"><i data-feather="x"></i></div>--}}
            {{--                    <ul class="search-list search-list-main"></ul>--}}
            {{--                </div>--}}
            {{--            </li>--}}
            {{--      CARRITO DE COMPRAS      --}}
            {{--            <li class="nav-item dropdown dropdown-cart mr-25"><a class="nav-link" href="javascript:void(0);"--}}
            {{--                                                                 data-toggle="dropdown"><i class="ficon"--}}
            {{--                                                                                           data-feather="shopping-cart"></i><span--}}
            {{--                        class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>--}}
            {{--                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">--}}
            {{--                    <li class="dropdown-menu-header">--}}
            {{--                        <div class="dropdown-header d-flex">--}}
            {{--                            <h4 class="notification-title mb-0 mr-auto">My Cart</h4>--}}
            {{--                            <div class="badge badge-pill badge-light-primary">4 Items</div>--}}
            {{--                        </div>--}}
            {{--                    </li>--}}
            {{--                    <li class="scrollable-container media-list">--}}
            {{--                        <div class="media align-items-center"><img class="d-block rounded mr-1"--}}
            {{--                                                                   src="/guani-assets/images/pages/eCommerce/1.png"--}}
            {{--                                                                   alt="donuts" width="62">--}}
            {{--                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body"--}}
            {{--                                                                   href="guani-ecommerce-details.html"> Apple watch--}}
            {{--                                            5</a></h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="1">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$374.90</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="media align-items-center"><img class="d-block rounded mr-1"--}}
            {{--                                                                   src="/guani-assets/images/pages/eCommerce/7.png"--}}
            {{--                                                                   alt="donuts" width="62">--}}
            {{--                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body"--}}
            {{--                                                                   href="guani-ecommerce-details.html"> Google Home--}}
            {{--                                            Mini</a></h6><small class="cart-item-by">By Google</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="3">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$129.40</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="media align-items-center"><img class="d-block rounded mr-1"--}}
            {{--                                                                   src="/guani-assets/images/pages/eCommerce/2.png"--}}
            {{--                                                                   alt="donuts" width="62">--}}
            {{--                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body"--}}
            {{--                                                                   href="guani-ecommerce-details.html"> iPhone 11--}}
            {{--                                            Pro</a></h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="2">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$699.00</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="media align-items-center"><img class="d-block rounded mr-1"--}}
            {{--                                                                   src="/guani-assets/images/pages/eCommerce/3.png"--}}
            {{--                                                                   alt="donuts" width="62">--}}
            {{--                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body"--}}
            {{--                                                                   href="guani-ecommerce-details.html"> iMac Pro</a>--}}
            {{--                                    </h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="1">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$4,999.00</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="media align-items-center"><img class="d-block rounded mr-1"--}}
            {{--                                                                   src="/guani-assets/images/pages/eCommerce/5.png"--}}
            {{--                                                                   alt="donuts" width="62">--}}
            {{--                            <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body"--}}
            {{--                                                                   href="guani-ecommerce-details.html"> MacBook--}}
            {{--                                            Pro</a></h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="1">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$2,999.00</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </li>--}}
            {{--                    <li class="dropdown-menu-footer">--}}
            {{--                        <div class="d-flex justify-content-between mb-1">--}}
            {{--                            <h6 class="font-weight-bolder mb-0">Total:</h6>--}}
            {{--                            <h6 class="text-primary font-weight-bolder mb-0">$10,999.00</h6>--}}
            {{--                        </div>--}}
            {{--                        <a class="btn btn-primary btn-block" href="guani-ecommerce-checkout.html">Checkout</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--     NOTIFICACIONES       --}}
            <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);"
                                                                         data-toggle="dropdown"><i class="ficon"
                                                                                                   data-feather="bell"></i><span
                        class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notificación</h4>
                            <div class="badge badge-pill badge-light-primary">6 Nuevos</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img
                                            src="/app-assets/images/portrait/small/avatar-s-15.jpg"
                                            alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span
                                            class="font-weight-bolder">Información 🎉</span> vamos!</p><small
                                        class="notification-text"> Nuevo usuario registrado.</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Ver
                            todas las notifícaciones</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                                                           id="dropdown-user" href="javascript:void(0);"
                                                           data-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                            class="user-name font-weight-bolder">John Doe</span><span
                            class="user-status">Admin</span></div>
                    <span class="avatar"><img class="round"
                                              src="/app-assets/images/portrait/small/avatar-s-11.jpg"
                                              alt="avatar" height="40" width="40"><span
                            class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a
                        class="dropdown-item" href="{{ route('admin.index.perfil') }}"><i class="mr-50" data-feather="user"></i>
                        Perfil</a>
                    {{--                    <a class="dropdown-item" href="guani-email.html">--}}
                    {{--                        <i class="mr-50" data-feather="mail"></i> Inbox</a><a--}}
                    {{--                        class="dropdown-item" href="guani-todo.html"><i class="mr-50" data-feather="check-square"></i>--}}
                    {{--                        Task</a><a class="dropdown-item" href="guani-chat.html"><i class="mr-50"--}}
                    {{--                                                                                 data-feather="message-square"></i>--}}
                    {{--                        Chats</a>--}}
                    <div class="dropdown-divider"></div>
                    {{--                    <a class="dropdown-item" href="page-account-settings.html"><i class="mr-50"--}}
                    {{--                                                                                  data-feather="settings"></i>--}}
                    {{--                        Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="mr-50"--}}
                    {{--                                                                                         data-feather="credit-card"></i>--}}
                    {{--                        Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="mr-50"--}}
                    {{--                                                                                    data-feather="help-circle"></i>--}}
                    {{--                        FAQ</a>--}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" href="page-auth-login-v2.html"><i class="mr-50"
                                                                                        data-feather="power"></i>
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
