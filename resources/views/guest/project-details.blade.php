@extends('guest.layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-light py-2">
        <div class="container">
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text" style="font-size: 15px;">
                    <li class="breadcrumb-item"><a class="text-black" href="{{ route('home') }}">Home </a></li>
                    <li class="breadcrumb-item"> / </li>
                    <li class="breadcrumb-item text-black active" aria-current="page">Project Details</li>
                </ol>
            </nav>
            <h4 class="fw-medium text-blak mb-3 animated slideInDown">Project Details</h4>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Projects Start -->
    <div class="container-xxl">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0 py-5">
                <!-- Image on the left side -->
                <div class="col-lg-7 col-sm-12 ps-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <img class="img-fluid w-100" src="{{ asset('storage/' . $project->image) }}"
                            alt="project 1">
                    </div>
                </div>

                <!-- Project information on the right side -->
                <div class="col-lg-5 ps-lg-4 pt-3 pt-lg-0 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-3 pe-lg-0 border shadow">
                        <h6 class="text-primary">Project Information</h6>
                        <ul class="list-unstyled">
                            <li><strong>Partner:</strong> {{ $project->client }} </li>
                            <li><strong>Project date:</strong> {{ $project->project_date }}</li>
                        </ul>
                    </div>
                    <h5 class="mt-4">{{ $project->project_name }}</h5>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
