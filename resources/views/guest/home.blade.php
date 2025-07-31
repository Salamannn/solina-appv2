@extends('guest.layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/banner.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start px-3">
                            <div class="col-12 col-lg-8">
                                <h4 class="display-3 text-white animated slideInDown">{{ $title }}</h4>
                                <p class="fs-6 fw-normal text-white mb-4 pb-3">
                                    {{ $banner }}.
                                </p>
                                <a href="{{ route('wa') }}"
                                    class="btn text-white btn-carousel rounded-pill py-2 px-4 animated slideInLeft fw-light">
                                    @if ($lang == 'id')
                                        <i class="fa-brands fa-whatsapp pe-2"></i> Hubungi Kami
                                    @else
                                        <i class="fa-brands fa-whatsapp pe-2"></i> Contact Us
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                @if ($lang == 'id')
                    <h6 class="text-primary">Layanan</h6>
                    <h1 class="mb-4">Jasa Kami</h1>
                @else
                    <h6 class="text-primary">Service</h6>
                    <h1 class="mb-4">Our Business</h1>
                @endif

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/service1.jpg') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            @if ($lang == 'id')
                                <h4 class="mb-3">Pembangkit Energi Ramah Lingkungan & Energi Terbarukan</h4>
                            @else
                                <h4 class="mb-3">Friendly Environmentally Energy & Renewable Energy Generation</h4>
                            @endif

                            <!-- <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                                                                                                                <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/service2.jpg') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-recycle fa-3x"></i>
                            </div>
                            @if ($lang == 'id')
                                <h4 class="mb-3">Pengelolaan Limbah</h4>
                            @else
                                <h4 class="mb-3">Waste Management</h4>
                            @endif

                            <!-- <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                                                                                                                <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/service3.jpg') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-gears fa-3x"></i>
                            </div>
                            @if ($lang == 'id')
                                <h4 class="mb-3">Penelitian dan Pengembangan di bidang Teknologi & Rekayasa</h4>
                            @else
                                <h4 class="mb-3">R&D on Technology & Engineering</h4>
                            @endif

                            <!-- <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                                                                                                                <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('img/service4.jpg') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-oil-well fa-3x"></i>
                            </div>
                            @if ($lang == 'id')
                                <h4 class="mb-3">Konsultasi Bisnis Minyak & Gas</h4>
                            @else
                                <h4 class="mb-3">Oil & Gas Business Consultation</h4>
                            @endif

                            <!-- <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                                                                                                                <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-4 ps-lg-0 wow fadeIn no-padding-mobile no-padding-tablet" data-wow-delay="0.1s"
                    style="padding-top: 110px;">
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="img-fluid w-50" src="{{ asset('img/About.png') }}"
                            style="object-fit: cover; max-width: 100%;" alt="about pict">
                    </div>
                </div>
                <div class="col-lg-8 about-text py-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-3 pe-lg-0">
                        @if ($lang == 'id')
                            <h6 class="text-primary">Tentang Kami</h6>
                            <h1 class="mb-4">Pakar Industri Energi Baru dan Terbarukan</h1>
                        @else
                            <h6 class="text-primary">About Us</h6>
                            <h1 class="mb-4">Expert In New and Renewable Energy Industries</h1>
                        @endif

                        <p>{{ $about }}</p>
                        <a href="{{ route('about') }}"
                            class="btn btn-primary rounded-pill py-2 px-3 mt-3 fw-normal">Explore
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Projects Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <!-- <div class="container-xxl py-5"> -->
        <div class="container my-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                @if ($lang == 'id')
                    <h6 class="text-primary">Projek Kami</h6>
                    <h1 class="mb-4">Projek Terbaru</h1>
                @else
                    <h6 class="text-primary">Our Projects</h6>
                    <h1 class="mb-4">Latest Projects</h1>
                @endif

            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="{{ asset('storage/' . $project->image) }}" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                    href="{{ asset('storage/' . $project->image) }}" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                    href="{{ route('projects.show', $project->id) }}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">{{ $project->project_name }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center align-items-center wow fadeInUp">
                @if ($lang == 'id')
                    <a href="{{ route('project') }}"
                        class="btn btn-primary rounded-pill py-2 px-3 mt-3 fw-normal">Selengkapnya
                        ...</a>
                @else
                    <a href="{{ route('project') }}" class="btn btn-primary rounded-pill py-2 px-3 mt-3 fw-normal">See
                        More
                        ...</a>
                @endif
            </div>
        </div>
    </div>
    <!-- Projects End -->
    <!-- Partner Start -->
    <div class="container-xxl bg-light py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-4">Partners</h2>
            </div>
            <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="row text-center">
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-1.png') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-2.png') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-3.png') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-4.png') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-5.png') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row text-center">
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-7.png') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-8.png') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-9.webp') }}" alt="">
                            </div>
                            <div class="col-6 col-lg-2">
                                <img class="carousel-img" src="{{ asset('img/partner-10.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tombol Navigasi -->
                <button class="carousel-control-prev" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Partner Start -->

    <!-- Message Start -->
    <div class="container-xxl py-3">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-4 pe-lg-0 wow fadeIn p-5" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img src="{{ asset('img/founder.jpg') }}" class="img-fluid w-75" src="img/team-1.jpg"
                                alt="">
                        </div>
                        <div class="p-4">
                            @if ($lang == 'id')
                                <h5>Komisaris Utama</h5>
                                <span>Mochamad Soleh</span>
                            @else
                                <h5>President Commissioner</h5>
                                <span>Mochamad Soleh</span>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 feature-text wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5">
                        <i class="fa-solid fa-quote-left fa-4x" style="color: #E4E0E1;"></i>
                        @if ($lang == 'id')
                            <h3 class="text-primary mt-4" style="text-align: justify">Pesan dari Pendiri</h3>
                        @else
                            <h3 class="text-primary mt-4" style="text-align: justify">Founder Message</h3>
                        @endif
                        <p class="my-2 pb-2">
                            {{ $foundermsg }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Message End -->

    <div id="loading">
        <div class="container d-flex justify-content-center align-items-center min-vh-100 flex-column flex-md-row">
            <div class="d-flex flex-column align-items-center me-md-3">
                <div class="d-flex">
                    <img src="{{ asset('img/ssse1.png') }}" class="img-fluid" data-aos="fade-right" alt="">
                    <img src="{{ asset('img/ssse2.png') }}" class="img-fluid" data-aos="fade-left" alt="">
                </div>
                <div class="d-flex">
                    <img src="{{ asset('img/ssse3.png') }}" class="img-fluid" data-aos="fade-right" alt="">
                    <img src="{{ asset('img/ssse4.png') }}" class="img-fluid" data-aos="fade-left" alt="">
                </div>
            </div>
            <div class="mt-3 mt-md-0" id="text-container">
                <img src="{{ asset('img/tulisan.png') }}" class="img-fluid" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" alt="">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init();

        // Fungsi untuk menyembunyikan loading dan menampilkan konten utama
        function showMainContent() {
            // Sembunyikan animasi loading
            document.getElementById('loading').style.display = 'none';
        }

        // Tunda 3 detik, kemudian tampilkan konten utama
        setTimeout(showMainContent, 2000); // 3000 ms = 3 detik
    </script>
@endpush
