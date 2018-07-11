<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{{ asset('images/user.png') }}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ini auth->user </div>
            <div class="email">auth->email</div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            @include('inc.listsidebar.home')

            @include('inc.listsidebar.buku')

            @include('inc.listsidebar.peminjam')

            @include('inc.listsidebar.peminjaman')
            
            @if($indicator == 'pengaturan')
                <li style="display:none" class="active">
            @endif
        </ul>
    </div>
    <!-- #Menu -->

</aside>
<!-- #END# Left Sidebar -->
