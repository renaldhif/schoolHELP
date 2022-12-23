<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ Route('superadmin_dashboard') }}">
        <i class="fas fa-fw fa-solid fa-home"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Heading -->
<div class="sidebar-heading mt-3">
    Menu
</div>

<!-- Nav Item - Add School -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ Route('superadmin_addschool') }}">
        <i class="fas fa-fw fa-solid fa-school"></i>
        <span>Add School</span>
    </a>
</li>

<!-- Nav Item - Add School -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ Route('superadmin_addschooladmin') }}">
        <i class="fas fa-fw fa-solid fa-user-plus"></i>
        <span>Add School Administrator</span>
    </a>
</li>

<!-- Nav Item - Add School -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('superadmin_viewschooladmin')}}">
        <i class="fas fa-fw fa-solid fa-scroll"></i>
        <span>View All Registered School</span>
    </a>
</li>
