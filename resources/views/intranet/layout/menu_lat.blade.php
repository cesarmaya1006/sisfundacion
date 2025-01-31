<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-image: url('{{ asset('imagenes/sistema/icono_sistema.png') }}');background-repeat: no-repeat;">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link bg-light" style="text-decoration: none;background-color: rgba(39, 39, 39, 0.8);">
        <img src="{{ asset('imagenes/sistema/icono_sistema.png') }}" alt="M & M" class="brand-image img-circle elevation-3" style="opacity: .8;max-height: 10px;" >
        <span class="brand-text"><strong>Lonja SCA</strong></span>
    </a>
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition" style="background-color: rgba(39, 39, 39, 0.8)">
        <div class="user-panel d-flex">
            <div class="image">
                <img src="{{asset('imagenes/prueba/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <h5 class="text-white text-small" style="font-size: 0.85em;">Cesar Maya</h5>
                @if (session('rol_principal_id') < 4)
                    <h6 class="text-white" style="font-size: 0.85em;">{{session('rol_principal')}}</h6>
                @endif
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact" style="font-size: 0.85em;" data-widget="treeview" role="menu"data-accordion="false">
                @foreach ($menusComposer as $key => $item)
                    @if ($item['menu_id'] != 0)
                        @break
                    @endif
                    @include("intranet.layout.menu-item", ["item" => $item])
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
