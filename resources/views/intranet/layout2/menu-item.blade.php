@if ($item['submenu'] == [])
    <li class="nav-item">
        <a class="nav-link {{ MayoHelper::getMenuActivo($item['url']) }}" aria-current="page" href="{{ url($item['url']) }}">
            <i class=" icon nav-icon {{ $item['icono'] }}"></i>
            <span class="item-name">{{ utf8_decode(utf8_encode($item['nombre'])) }}</span>
        </a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#{{ utf8_decode(utf8_encode(strtolower(str_replace(' ','',$item['nombre'])))) }}" role="button" aria-expanded="false" aria-controls="{{ utf8_decode(utf8_encode(strtolower(str_replace(' ','',$item['nombre'])))) }}">
            <i class="icon nav-icon {{ $item['icono'] }}"></i>
            <span class="item-name">{{ utf8_decode(utf8_encode($item['nombre'])) }}</span>
            <i class="right-icon">
                <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="{{ utf8_decode(utf8_encode(strtolower(str_replace(' ','',$item['nombre'])))) }}" data-bs-parent="#sidebar-menu">
            @foreach ($item['submenu'] as $submenu)
                @include("intranet.layout2.menu-item", ["item" => $submenu])
            @endforeach
        </ul>
    </li>
@endif
