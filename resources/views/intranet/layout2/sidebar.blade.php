<aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="../dashboard/index.html" class="navbar-brand">
            <!--Logo start-->
            <div class="logo-main">
                <div class="logo-normal">
                    <img src="{{asset('imagenes/sistema/logo_mini_maya.png')}}" class="img-fluid" alt="...">
                </div>
                <div class="logo-mini">
                    <img src="{{asset('imagenes/sistema/logo_mini_maya.png')}}" class="img-fluid" alt="...">
                </div>
            </div>
            <!--logo End-->
            <h4 class="logo-title">Fundación</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true" style="z-index: 100000;">
            <i class="icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">

                @foreach ($menusComposer as $key => $item)
                    @if ($item['menu_id'] != 0)
                        @break
                    @endif
                    @include("intranet.layout2.menu-item", ["item" => $item])
                @endforeach
            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
