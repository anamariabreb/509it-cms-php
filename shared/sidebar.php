<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CMS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Contacts
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePersonal"
            aria-expanded="true" aria-controls="collapsePersonal">
            <i class="fas fa-fw fa-folder"></i>
            <span>Personal Contacts</span>
        </a>
        <div id="collapsePersonal" class="collapse" aria-labelledby="headingPersonal" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/views/view-pc-add.php">Add Contacts</a>
                <a class="collapse-item" href="/views/view-pc-manage.php">Manage Contacts</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBusiness"
            aria-expanded="true" aria-controls="collapseBusiness">
            <i class="fas fa-fw fa-folder"></i>
            <span>Business Contacts</span>
        </a>
        <div id="collapseBusiness" class="collapse" aria-labelledby="headingBusiness" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/views/view-bc-add.php">Add Contacts</a>
                <a class="collapse-item" href="/views/view-bc-manage.php">Manage Contacts</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->