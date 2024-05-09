<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kanun - Law Firm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{url('/webfront/css/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('/webfront/css/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('/webfront/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{url('/home')}}">
                                <h1>kanun</h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="top-bar-right">
                            <div class="text">
                                <h2>8:00 <sub>am</sub> - 9:00 <sub>pm</sub></h2>
                                <p>Opening Hour Mon - Fri </p>
                            </div>
                            <div class="text">
                                <h2>+91- 9584858545</h2>
                                <p>Call Us For Consultation</p>
                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{url('/home')}}" class="nav-item nav-link active">Home</a>
                            <!-- <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                                <a href="{{url('/service')}}" class="nav-item nav-link">Practice</a>
                                <a href="{{url('/team')}}" class="nav-item nav-link">Attorneys</a> -->
                            <!-- <a href="#about" class="nav-item nav-link">About</a> -->
                            <a href="{{url('/')}}#about" class="nav-item nav-link">About</a>
                            <!-- <a href="#service" class="nav-item nav-link">Practice</a> -->
                            <a href="{{url('/')}}#service" class="nav-item nav-link">Practice</a>
                            <!-- <a href="#team" class="nav-item nav-link">Attorneys</a> -->
                            <a href="{{url('/')}}#team" class="nav-item nav-link">Attorneys</a>
                            <!-- <a href="{{url('/portfolio')}}" class="nav-item nav-link">Case Studies</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="{{url('/blog')}}" class="dropdown-item">Blog Page</a>
                                        <a href="{{url('/single')}}" class="dropdown-item">Single Page</a>
                                    </div>
                                </div> -->
                            <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Case Status</a>
                                <div class="dropdown-menu">
                                    <a href="{{url('/clint-login')}}" class="dropdown-item">Client Login</a>
                                    <a href="https://district.mphc.gov.in/" class="dropdown-item" target="__blank">Distric Court</a>
                                    <a href="https://mphc.gov.in/case-status" class="dropdown-item" target="__blank">High Court</a>
                                    <a href="{{url('/admin-dashboard')}}" class="dropdown-item">Advocate Login</a>

                                </div>
                            </div>

                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="{{url('/clint-login')}}">Clint login</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->