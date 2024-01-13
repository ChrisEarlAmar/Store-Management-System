<div class="container-fluid bg-light text-dark p-3 d-flex align-items-center justify-content-between sticky-top d-sm-none d-md-none d-xxl-block d-xl-block d-lg-block" style="z-index: 1;">
    <h3 class="mb-0 h-font"><span style="color: #f8f9fa; user-select: none;">Store Management System</span></h3>
</div>


<div class="col-lg-2 bg-light border-top border-3 border-light position-fixed top-0" style="height: 100%; position: fixed; z-index: 2;" id="sidebar_menu">
    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container-fluid flex-lg-column align-items-stretch">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                <span class="fw-bold">Store Management System</span>
            </a>
            
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#admin_dropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-sm-none d--none d-md-none d-xxl-block d-xl-block d-lg-block" style="height: 30px;"></div>

            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="admin_dropdown">
                <ul class="nav nav-pills flex-column" id="menu">
                    <li class="nav-item mb-2">   
                        <a class="nav-link text-dark {{ request()->is('stores*') || request()->is('/') ? 'active' : '' }}" id="Store" href="{{ route('stores.index') }}"><i class="bi bi-shop-window me-1"></i> Stores</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-dark {{ request()->is('employees*') ? 'active' : '' }}" id="Employee" href="{{ route('employees.index') }}"><i class="bi bi-person-square me-1"></i> Employees</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>