<!DOCTYPE html>img
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'Crime Report Management System') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="public/assets/img/favicon.png" rel="icon">
    <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Nova - v1.2.0
    * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="page-index">

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
{{--            <img src="assets/img/logo.png" alt="">--}}
            <h1 class="d-flex align-items-center">Crime Report Management System</h1>
        </a>


        <nav id="navbar" class="navbar">
            <ul>
                <li>
                
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> <a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#">Report a Crime</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    
                        <!-- <p>You do not have permission to view this page.</p> -->
                    

               

                
                <!-- @can('is-admin', 'is-dispatch','is-auth' )
                    <li><a href="{{ route('admin.report') }}">Report Management</a></li>

                    <li><a href="{{ route('admin.users.index') }}">Users Management</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>


                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color: #000000" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endcan -->

      
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<div>
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                <h2 data-aos="fade-up">Crime Report Management System of Laguna City</h2>
                    <blockquote>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima. </p>
                    </blockquote>
                </div>
                {{--Chart in main page--}}
                @include('chart')
            </div>
        </div>
    </section>

</div>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="padding-left: 500px">
                &copy; Copyright <strong><span>Crime Reporting Management System</span></strong>. All Rights Reserved

</footer>
<!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- <div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="assets/vendor/aos/aos.js')}}"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="assets/vendor/php-email-form/validate.js')}}"></script> -->

<!-- Template Main JS File -->
<script src="assets/js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


</body>

</html>
