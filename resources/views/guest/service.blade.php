@extends('guest.layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url({{ asset('img/banner.jpg') }})">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Service</h6>
                <h1 class="mb-4">Our Business</h1>
            </div>
            <div class="row g-4">
                <div class="row g-4">
                    @for($i = 0; $i < 4; $i++)
                        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="{{ 0.1 * ($i + 1) }}s">
                            <div class="service-item rounded overflow-hidden">
                                <img class="img-fluid" src="{{ asset('img/service' . ($i + 1) . '.jpg') }}" alt="">
                                <div class="position-relative p-4 pt-0">
                                    <div class="service-icon">
                                        <!-- Tambahkan ikon dinamis jika diperlukan -->
                                        <i class="fa fa-gears fa-3x"></i>
                                    </div>
                                    <!-- Tampilkan deskripsi dari database -->
                                    <h4 class="mb-3">{{ $descriptions[$i]['value'] }}</h4>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="container-xxl bg-white py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-4">Renewable Energy</h3>
                    </div>
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="border p-4 shadow rounded overflow-hidden">
                            <div class="text-center text-black pt-0">
                                <h6>
                                    @if(isset($descriptions[4]['value']))
                                        {{ $descriptions[4]['value'] }}
                                    @else
                                        Data not available
                                    @endif
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
