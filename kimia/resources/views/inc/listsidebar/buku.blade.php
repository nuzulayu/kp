@if($indicator == 'buku' || $indicator == 'all' || $indicator == 'disini' || $indicator == 'disana')
    <li class="active">
@else
    <li>
@endif
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">books</i>
        <span>Buku</span>
    </a>
    <ul class="ml-menu">
        @if($indicator == 'all')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/buku/all">Semua</a>
        </li>

        @if($indicator == 'disini')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/buku/disini">Di Sini</a>
        </li>

        @if($indicator == 'disana')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/buku/disana">Di Luar</a>
        </li>
    </ul>
</li>
