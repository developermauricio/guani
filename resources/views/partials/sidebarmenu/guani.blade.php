<!--=====================================
	LOGO
======================================-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow sidebar-background-black"
     data-scroll-to-active="true">
    <div class="navbar-header" style="margin-bottom: 2.1rem; margin-left: 0.1rem">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto mr-2">
                <a class="navbar-brand" style="margin-top: 0.2rem"
                   href="/html/ltr/vertical-menu-template/index.html"><span
                        class="brand-logo">
                        <img src="/images/icon-logo-guani.png" alt="" style="margin-top: 1.1rem">
                            </span>
                    <img width="130" src="/images/logo-text-guani-with.png" class="brand-text" alt="" style="padding-left: 0.3rem;">
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                        data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>

    <!--=====================================
		MENU NAVEGACIÓN
======================================-->
    <div class="main-menu-content">
        <ul class="navigation navigation-main backgroud-menu-black" id="main-menu-navigation" data-menu="menu-navigation">
            <!--=====================================
		            MENU DASHBOARD
            ======================================-->
            <li class="{{request()->is('dashboard') ? 'active' : '' }} nav-item"><a class="d-flex align-items-center " href="/"><i class="text-background-menu-black" data-feather="home"></i><span class="menu-title text-truncate text-background-menu-black" data-i18n="Dashboards">Dashboard</span></a>
            </li>
            <li class="navigation-header" style="margin-top: 1.5rem"><span data-i18n="Apps &amp; Pages">Navegación</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <!--=====================================
		        EMPRESA INCENTIVADORES
            ======================================-->
            <li class=" nav-item icons-background-black"><a class="d-flex align-items-center" href="#"><i data-feather='thumbs-up'></i><span
                        class="menu-title text-truncate text-background-menu-black" data-i18n="User">Em. Incentivadoras</span></a>
                <ul class="menu-content menu-content-background-black">
                    <li class="{{request()->is('incentivadoras/all-companies') ? 'active' : '' }}" ><a class="d-flex align-items-center hover-colapse-menu-background-black" href="{{ route('admin.allIndex.companies.incentivadora') }}"><i
                                data-feather="circle"></i><span
                                class="menu-item text-truncate text-background-menu-black" data-i18n="List">Empresas</span></a>
                    </li>
                    <li class="{{request()->is('incentivadoras/create-company') ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{route('admin.index.create.company.incentivadora')}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate text-background-menu-black" data-i18n="View">Crear Empresa</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--=====================================
		        EMPRESAS REDENTORAS
            ======================================-->
            <li class=" nav-item icons-background-black"><a class="d-flex align-items-center" href="#"><i data-feather='thumbs-up'></i><span
                        class="menu-title text-truncate text-background-menu-black" data-i18n="User">Em. Redentoras</span></a>
                <ul class="menu-content menu-content-background-black">
                    <li>
                        <a class="d-flex align-items-center hover-colapse-menu-background-black" href="guani-user-list.html">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate text-background-menu-black" data-i18n="List">Empresas</span>
                        </a>
                    </li>
                    <li class="{{request()->is('redentoras/create-company') ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{route('admin.index.create.company.redentora')}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate text-background-menu-black" data-i18n="View">Crear Empresa</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--=====================================
		        ADMINISTRAR PREMIOS
            ======================================-->
            <li class=" nav-item icons-background-black"><a class="d-flex align-items-center" href="#"><i data-feather='box'></i><span
                        class="menu-title text-truncate text-background-menu-black" data-i18n="User">Premios</span></a>
                <ul class="menu-content menu-content-background-black">
                    <li><a class="d-flex align-items-center hover-colapse-menu-background-black" href="guani-user-list.html"><i
                                data-feather="circle"></i><span
                                class="menu-item text-truncate text-background-menu-black" data-i18n="List">Todos los Premios</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="guani-user-view.html"><i
                                data-feather="circle"></i><span
                                class="menu-item text-truncate text-background-menu-black" data-i18n="View">Crear Premio</span></a>
                    </li>
                </ul>
            </li>
            <!--=====================================
		        ADMINISTRAR PREMIOS
            ======================================-->
            <li class=" nav-item icons-background-black"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span
                        class="menu-title text-truncate text-background-menu-black" data-i18n="User">Administrar Usuarios</span></a>
                <ul class="menu-content menu-content-background-black">
                    <li><a class="d-flex align-items-center hover-colapse-menu-background-black" href="guani-user-list.html"><i
                                data-feather="circle"></i><span
                                class="menu-item text-truncate text-background-menu-black" data-i18n="List">Todos los Usuarios</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="guani-user-view.html"><i
                                data-feather="circle"></i><span
                                class="menu-item text-truncate text-background-menu-black" data-i18n="View">Crear Usuario</span></a>
                    </li>
                </ul>
            </li>
            <!--=====================================
               ADMINISTRAR USUARIOS
           ======================================-->
            <li class=" nav-item icons-background-black"><a class="d-flex align-items-center" href="#"><i data-feather='tool'></i><span
                        class="menu-title text-truncate text-background-menu-black" data-i18n="User">Soporte y Ayuda</span></a>
            </li>
        </ul>
    </div>
</div>
