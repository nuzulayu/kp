@if($indicator == 'databarang' || $indicator == 'kategori' || $indicator == 'masuk' || $indicator == 'keluar' || $indicator == 'lokasi')
    <li class="active">
@else
    <li>
@endif
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">widgets</i>
        <span>Peminjaman</span>
    </a>
    <ul class="ml-menu">
        @if($indicator == 'databarang')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/databarang">Draft</a>
        </li>
        @if($indicator == 'masuk')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/masuk">Telah Kembali</a>
        </li>
        @if($indicator == 'keluar')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/keluar">Masih Dipinjam</a>
        </li>
    </ul>
</li>
