<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer Form Detail | IT Dept</title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS Link-->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!--JS Link-->
    <script src="{{url('assets/js/main.js')}}" defer></script>
    <!--Script Font Awseome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Link CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <div class="img-logo">
                <img src="{{ asset('/assets/img/loka4.png') }}" alt="">
            </div>
            <span class="logo_name">IT DEPT</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="./dashboard.html">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-stats'></i>
                        <span class="link_name">Troubleshoot</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{ route('troubleshoot.index')}}">Troubleshoot</a></li>
                    <li><a href="{{ route('troubleshoot.index') }}">Troubleshoot List</a></li>
                    <li><a href="./troubleshootForm.html">New Troubleshoot</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-wrench'></i>
                        <span class="link_name">Maintenance</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="./maintenanceList.html">Maintenance</a></li>
                    <li><a href="./maintenanceList.html">Maintenance List</a></li>
                    <li><a href="./newMaintenanceForm.html">New Maintenance</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-bar-chart-square'></i>
                        <span class="link_name">Project</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="./projectList.html">Project</a></li>
                    <li><a href="./projectList.html">Project List</a></li>
                    <li><a href="./newProject.html">New Project</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-report' ></i>
                        <span class="link_name">WO</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="./WO_InList.html">WO</a></li>
                    <li><a href="./WO_InList.html">WO In</a></li>
                    <li><a href="./WO_OutList.html">WO Out</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-server'></i>
                        <span class="link_name">Inventaris</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Inventaris</a></li>
                    <li><a href="./inventaris_LaptopList.html">Laptop</a></li>
                    <li><a href="./inventaris_PCList.html">PC</a></li>
                    <li><a href="./inventaris_PCPos.html">PC Pos</a></li>
                    <li><a href="./inventarisMobileList.html">Mobile</a></li>
                    <li><a href="./inventaris_PrinterList.html">Printer</a></li>
                    <li><a href="./inventaris_OTGList.html">OTG</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-detail'></i>
                        <span class="link_name">Administrasi System dan Aplikasi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Administrasi System dan Aplikasi</a></li>
                    <li><a href="./asaAnalisaList.html">Form Analisa</a></li>
                    <li><a href="./asaUATList.html">Form UAT</a></li>
                    <li><a href="./asaImprovmentList.html">Form Improvement</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-user'></i>
                        <span class="link_name">User</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">User</a></li>
                    <li><a href="./userList.html">User List</a></li>
                    <li><a href="./newUser.html">New User</a></li>
                </ul>
            </li>
        </ul>
    </div>


         <!-- Isi disini -->
        @yield('isi')
        <!-- isi disini end -->
<!--Link JS Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('sweetalert::alert')
</body>
</html>
