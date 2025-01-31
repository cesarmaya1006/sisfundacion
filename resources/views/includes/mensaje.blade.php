@if (session("mensaje"))
    <div class="alert alert-bottom alert-success alert-dismissible fade show " role="alert">
        <svg class="flex-shrink-0 bi me-2 icon-24" width="24" height="24"><use xlink:href="#check-circle-fill"></use></svg>
        <span> {{ utf8_encode(utf8_decode(session("mensaje"))) }}</span>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session("errores"))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="flex-shrink-0 bi me-2 icon-24" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"></use></svg>
    <div>{{ utf8_encode(utf8_decode(session("errores"))) }}</div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


