<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Pages / Blank - Admin Bootstrap Template</title>
        <meta name="robots" content="noindex, nofollow">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/css/quill.snow.css" rel="stylesheet">
        <link href="assets/css/quill.bubble.css" rel="stylesheet">
        <link href="assets/css/remixicon.css" rel="stylesheet">
        <link href="assets/css/simple-datatables.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        @include('layout.navbar-new')
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item"> <a class="nav-link collapsed" href="index.html"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="components-alerts.html"> <i class="bi bi-circle"></i><span>Alerts</span> </a></li>
                    <li> <a href="components-accordion.html"> <i class="bi bi-circle"></i><span>Accordion</span> </a></li>
                    <li> <a href="components-badges.html"> <i class="bi bi-circle"></i><span>Badges</span> </a></li>
                    <li> <a href="components-breadcrumbs.html"> <i class="bi bi-circle"></i><span>Breadcrumbs</span> </a></li>
                    <li> <a href="components-buttons.html"> <i class="bi bi-circle"></i><span>Buttons</span> </a></li>
                    <li> <a href="components-cards.html"> <i class="bi bi-circle"></i><span>Cards</span> </a></li>
                    <li> <a href="components-carousel.html"> <i class="bi bi-circle"></i><span>Carousel</span> </a></li>
                    <li> <a href="components-list-group.html"> <i class="bi bi-circle"></i><span>List group</span> </a></li>
                    <li> <a href="components-modal.html"> <i class="bi bi-circle"></i><span>Modal</span> </a></li>
                    <li> <a href="components-tabs.html"> <i class="bi bi-circle"></i><span>Tabs</span> </a></li>
                    <li> <a href="components-pagination.html"> <i class="bi bi-circle"></i><span>Pagination</span> </a></li>
                    <li> <a href="components-progress.html"> <i class="bi bi-circle"></i><span>Progress</span> </a></li>
                    <li> <a href="components-spinners.html"> <i class="bi bi-circle"></i><span>Spinners</span> </a></li>
                    <li> <a href="components-tooltips.html"> <i class="bi bi-circle"></i><span>Tooltips</span> </a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="forms-elements.html"> <i class="bi bi-circle"></i><span>Form Elements</span> </a></li>
                    <li> <a href="forms-layouts.html"> <i class="bi bi-circle"></i><span>Form Layouts</span> </a></li>
                    <li> <a href="forms-editors.html"> <i class="bi bi-circle"></i><span>Form Editors</span> </a></li>
                    <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Form Validation</span> </a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="tables-general.html"> <i class="bi bi-circle"></i><span>General Tables</span> </a></li>
                    <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Data Tables</span> </a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Chart.js</span> </a></li>
                    <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>ApexCharts</span> </a></li>
                    <li> <a href="charts-echarts.html"> <i class="bi bi-circle"></i><span>ECharts</span> </a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="icons-bootstrap.html"> <i class="bi bi-circle"></i><span>Bootstrap Icons</span> </a></li>
                    <li> <a href="icons-remix.html"> <i class="bi bi-circle"></i><span>Remix Icons</span> </a></li>
                    <li> <a href="icons-boxicons.html"> <i class="bi bi-circle"></i><span>Boxicons</span> </a></li>
                </ul>
                </li>
                <li class="nav-heading">Pages</li>
                <li class="nav-item"> <a class="nav-link collapsed" href="users-profile.html"> <i class="bi bi-person"></i> <span>Profile</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i class="bi bi-question-circle"></i> <span>F.A.Q</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="pages-contact.html"> <i class="bi bi-envelope"></i> <span>Contact</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="pages-register.html"> <i class="bi bi-card-list"></i> <span>Register</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="pages-login.html"> <i class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="pages-error-404.html"> <i class="bi bi-dash-circle"></i> <span>Error 404</span> </a></li>
                <li class="nav-item"> <a class="nav-link " href="pages-blank.html"> <i class="bi bi-file-earmark"></i> <span>Blank</span> </a></li>
            </ul>
        </aside>
        <footer id="footer" class="footer">
            <div class="copyright"> &copy; Copyright <strong><span>Compnay Name</span></strong>. All Rights Reserved</div>
            <div class="credits"> with love <a href="https://freeetemplates.com/">FreeeTemplates</a></div>
        </footer>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="assets/js/apexcharts.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/echarts.min.js"></script>
        <script src="assets/js/quill.min.js"></script>
        <script src="assets/js/simple-datatables.js"></script>
        <script src="assets/js/tinymce.min.js"></script>
        <script src="assets/js/validate.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>