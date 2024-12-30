@extends('guest.layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url({{ asset('img/banner.jpg') }})">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Projects Start -->
    <div class="container-xxl">
        <!-- <div class="container-xxl py-5"> -->
        <div class="container my-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Projects</h6>
                <h1 class="mb-4">Visit Our Latest Projects</h1>
            </div>

            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="{{ asset('storage/' . $project->image) }}" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                    href="{{ asset('storage/' . $project->image) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                    href="{{ route('projects.show', $project->id) }}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">{{$project->project_name}}</h5>
                        </div>
                    </div>
                @endforeach

                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset("img/service3.jpg")}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="{{asset("img/service3.jpg")}}"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Build Small Scale LNG Plants at Madura Island</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
