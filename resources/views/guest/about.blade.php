@extends('guest.layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url({{ asset('img/banner.jpg') }})">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $title }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Feature Start -->
    <div class="container-xxl py-2">
        <div class="container">
            <div class="row g-5 px-4">
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa-solid fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Vision</h5>
                    <span>{{ $visi }}</span>
                </div>
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                    </div>
                    <h5 class="mb-3">Mission</h5>
                    @foreach ($misi as $mission)
                        <div class="d-flex align-items-start mb-2">
                            <i class="fa fa-check-circle text-primary me-3"></i>
                            <p>{{ $mission['value'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->
    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-4 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-4 ps-lg-0 wow fadeIn no-padding-mobile no-padding-tablet" data-wow-delay="0.1s"
                    style="padding-top: 80px;">
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="img-fluid w-50" src="{{ asset('img/About.png') }}"
                            style="object-fit: cover; max-width: 100%;" alt="about pict">
                    </div>
                </div>
                <div class="col-lg-8 about-text py-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-3 pe-lg-0">
                        <h6 class="text-primary">{{$title}}</h6>
                        <h1 class="mb-4">Expert In New and Renewable Energy Industry</h1>
                        <p>{{$about}}</p>
                        <p>Our Logo consists of 4 Colors that describe a burning
                            <span style="color: red;">Spirit</span>, a friendly
                            <span style="color: blue;">Energy</span>,
                            <span style="color: #6EC207;">Environment</span> care, and giving
                            <span style="color: #F3C623;">Wealth</span> to all people
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="text-primary">Organizational Structure</h4>
            </div>
            <div>
                <img class="img-fluid w-100" src="{{ asset('img/sotk.jpg') }}" alt="sotk">
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
