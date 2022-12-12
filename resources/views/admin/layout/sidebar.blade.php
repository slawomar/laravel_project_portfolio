<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Panel admina</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i> <span>Pulpit admina</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/home-banner')||Request::is('admin/home-about')||Request::is('admin/home-skill')||Request::is('admin/home-qualification')||Request::is('admin/home-counter')||Request::is('admin/home-testimonial')||Request::is('admin/home-client')||Request::is('admin/home-service') ? "active" : "" }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Strona startowa</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/home-banner') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_banner') }}"><i class="fas fa-angle-right"></i> Sekcja banera</a></li>
                    <li class="{{ Request::is('admin/home-about') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_about') }}"><i class="fas fa-angle-right"></i>Sekcja o nas</a></li>
                    <li class="{{ Request::is('admin/home-skill') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_skill') }}"><i class="fas fa-angle-right"></i>Sekcja umiejętności</a></li>
                    <li class="{{ Request::is('admin/home-qualification') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_qualification') }}"><i class="fas fa-angle-right"></i>Sekcja kwalifikacji</a></li>
                    <li class="{{ Request::is('admin/home-counter') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_counter') }}"><i class="fas fa-angle-right"></i>Sekcja licznika</a></li>
                    <li class="{{ Request::is('admin/home-testimonial') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_testimonial') }}"><i class="fas fa-angle-right"></i>Sekcja opinii klientów</a></li>
                    <li class="{{ Request::is('admin/home-client') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_client') }}"><i class="fas fa-angle-right"></i>Sekcja klientów</a></li>
                    <li class="{{ Request::is('admin/home-service') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_service') }}"><i class="fas fa-angle-right"></i>Sekcja usług</a></li>
                </ul>
            </li>


            <li class="nav-item dropdown {{ Request::is('admin/page/services') ? "active" : "" }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Pozostałe strony</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/services') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_page_services') }}"><i class="fas fa-angle-right"></i> Strona z usługami</a></li>
                </ul>
            </li>


            <li class="{{ Request::is('admin/skill/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_skill_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Table"><i class="fas fa-hand-point-right"></i> <span>Umiejętności</span></a></li>

            <li class="{{ Request::is('admin/education/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_education_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Education"><i class="fas fa-hand-point-right"></i> <span>Wykształcenie</span></a></li>

            <li class="{{ Request::is('admin/experience/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_experience_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Experience"><i class="fas fa-hand-point-right"></i> <span>Doświadczenie</span></a></li>

            <li class="{{ Request::is('admin/testimonial/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_testimonial_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Opinie"><i class="fas fa-hand-point-right"></i> <span>Opinie</span></a></li>
            
            <li class="{{ Request::is('admin/client/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_client_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Klienci"><i class="fas fa-hand-point-right"></i> <span>Klienci</span></a></li>
            
            <li class="{{ Request::is('admin/service/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_service_show') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Usługi"><i class="fas fa-hand-point-right"></i> <span>Usługi</span></a></li>
            
            <li class=""><a class="nav-link" href="setting.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

            <li class=""><a class="nav-link" href="form.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Form"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Invoice"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>